<?php
    class NoticiaController {

        public static function HomePage() {
            include "./View/Modules/Noticia/HomePage.php";
        }

        public static function ViewGererenciarNoticia() {
            include "./View/Modules/Noticia/GerenciarNoticia.php";
        }

        public static function ViewCadastrarNoticia() {
            include "./View/Modules/Noticia/CadastrarNoticia.php";
        }

        public static function ViewNoticiaVer() {
            include "./Model/NoticiaModel.php";

            $model = new NoticiaModel();
            $model->getAllRows();

            include "./View/Modules/Noticia/VerNoticia.php";
        }

        public static function ViewDeletarNoticia() {
            include "./Model/NoticiaModel.php";

            $model = new NoticiaModel();
            $model->getAllRows();

            include "./View/Modules/Noticia/DeletarNoticia.php";
        }

        public static function DeletarNoticia() {
            $noticia = $_POST['titulo-deletar'];
            $noticia_confirmar = $_POST['titulo-deletar-confirmar'];

            if($noticia != $noticia_confirmar) {
                echo "<h2><center>[X] - Atenção: O título e o confirmar título não são iguais. Verifique e tente novamente.<center></h2>";
                echo "<center><a href=\"/noticia/deletar\">Clique aqui para voltar</a> </center>";
            } else {
                include "./Model/NoticiaModel.php";

                $noticia = new NoticiaModel();
                $noticia->id_deletar = $_POST['titulo-deletar'];

                $noticia->DeletarNoticia();

                header("Location: /noticia/deletar");
            }
        }

        public static function SalvarNoticia() {

            include "./Model/NoticiaModel.php";

            // Cada propriedade do objeto está sendo abastecidado com os dados ofertados
            // pelo usuário (Envio POST)
            $noticia = new NoticiaModel();
            $noticia->titulo = $_POST['titulo'];
            $noticia->manchete = $_POST['manchete'];
            $noticia->imagem_link = $_POST['image_link'];
            $noticia->categoria = $_POST['categoria'];
            $noticia->conteudo = $_POST['noticia'];

            $noticia->SalvarNoticia(); // Chamando o metodo SalvarNoticia da Model

            header("Location: /noticia/ver"); // Redirecionando o usuário para outra rota
        }

    }