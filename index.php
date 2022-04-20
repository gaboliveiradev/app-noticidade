<?php
    // * Responsável por pegar o que o usuário digitar na barra de navegação.
    // * Input: localhost:8000/teste | Output: /teste
    $uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // * Realizando os includes manualmente, em breve trabalharemos com autoload.
    include "./Controller/NoticiaController.php";

    switch($uri_parse) {
                
        case "/noticia/gerenciar":
            NoticiaController::ViewGererenciarNoticia();
        break;

        case "/noticia/cadastrar":
            NoticiaController::ViewCadastrarNoticia();
        break;

        case "/noticia/deletar":
            NoticiaController::ViewDeletarNoticia();
        break;

        case "/noticia/ver":
            NoticiaController::ViewNoticiaVer();
        break;

        case "/noticia/salvar":
            NoticiaController::SalvarNoticia();
        break;

        case "/deletando":
            NoticiaController::DeletarNoticia();
        break;

        default:
            NoticiaController::HomePage();
    }
?>  