<?php
    class NoticiaDAO {

        /*
            * Variavél responsável por armazenar o link de conexão com o banco de dados
        */
        private $conexao;

        /*
            * Metodo mágico, normalmente os metodos mágicos começam com "__" em seu nome.
            * O metodo construct é chamado toda vez que a classe é instanciada.
        */
        function __construct() {
            DEFINE("HOST", "localhost:3307");
            DEFINE("BANCO", "noticidade");
            DEFINE("USER", "root");
            DEFINE("PASS", "bibi2835201819");
            
            try {
                $this->conexao = new PDO("mysql:host=".HOST.";dbname=".BANCO, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $err) {
                echo "[X] - Foi detectado um erro ao tentar se conectar ao banco de dados MySql80. <br>";
                echo "<p>$err</p>";
            }
        }

        function deletarNoticia(NoticiaModel $model) {
            $sql = "DELETE FROM Noticia WHERE id = ?;";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->id_deletar);
            $stmt->execute();
        }

        function insertNoticia(NoticiaModel $model) {
            
            $sql = "INSERT INTO noticia (titulo, manchete, conteudo, image_link, id_categoria) VALUES (?, ?, ?, ?, ?);";

            // Declaração da variável stmt que conterá a montagem da consulta. Observe que
            // estamos acessando o método prepare dentro da propriedade que guarda a conexão
            // com o MySQL, via operador seta "->". Isso significa que o prepare "está dentro"
            // da propriedade $conexao e recebe nossa string sql com os devidor marcadores.
            $stmt = $this->conexao->prepare($sql);

            // Nesta etapa os bindValue são responsáveis por receber um valor e trocar em uma 
            // determinada posição, ou seja, o valor que está em 3, será trocado pelo terceiro ?
            // No que o bindValue está recebendo o model que veio via parâmetro e acessamos
            // via seta qual dado do model queremos pegar para a posição em questão.
            $stmt->bindValue(1, $model->titulo);
            $stmt->bindValue(2, $model->manchete);
            $stmt->bindValue(3, $model->conteudo);
            $stmt->bindValue(4, $model->imagem_link);
            $stmt->bindValue(5, $model->categoria);

            // Ao fim, onde todo SQL está montando, executamos a consulta.
            $stmt->execute();      
        }

        public function selectNoticia() {
            $sql = "SELECT * FROM Noticia;";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll();
        }
    }