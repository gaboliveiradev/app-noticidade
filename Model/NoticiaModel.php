<?php
    class NoticiaModel {
        public $id, $titulo, $manchete, $conteudo, $imagem_link, $categoria;
        public $id_deletar;
        
        public $rows;

        public function SalvarNoticia() {
            include "./DAO/NoticiaDAO.php";

            $dao = new NoticiaDAO();

            // Se id for nulo, significa que trata-se de um novo registro
            // caso contrário, é um update poque a chave primária já existe.
            if($this->id == null) {
                // No que estamos enviado o proprio objeto model para o insert, por isso do this
                $dao->insertNoticia($this);
            } else {
                // Update
            }
        }

        public function DeletarNoticia() {
            include "./DAO/NoticiaDAO.php";

            $dao = new NoticiaDAO();
            $dao->deletarNoticia($this);
        }

        public function getAllRows() {
            include "./DAO/NoticiaDAO.php";

            $dao = new NoticiaDAO();

            $this->rows = $dao->selectNoticia();
        }
    }