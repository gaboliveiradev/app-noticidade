<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NotiCidade - Cadastrar Notícia</title>
        <?php include "./View/Modules/Includes/css.cfg.html"; ?>
    </head>

    <body>
        <header>
            <?php include "./View/Modules/Includes/header.html"; ?>
        </header>

        <main class="cadastrarnoticia">
            <section class="box-form">
                <form class="forms-cadastrar-noticia" action="/noticia/salvar" method="POST">
                    <div class="header-forms">
                        <h2>NotiCidade - Postar Notícia</h2>
                        <hr>
                    </div>
                    <div class="main-forms">
                        <div class="titulo">
                            <label for="titulo">Título</label>
                            <input name="titulo" class="ipt-titulo" type="text">
                        </div>
                        <div class="manchete">
                            <label for="manchete">Manchete</label>
                            <input name="manchete" class="ipt-manchete" type="text">
                        </div>
                        <div class="imagem-link">
                            <label for="image_link">Link da Imagem</label>
                            <input name="image_link" class="ipt-imagem" type="text" placeholder="Exp.: https://imgur.com/FLl62jt.png">
                        </div>
                        <div class="categoria">
                            <label for="categoria">Categoria</label>
                            <select name="categoria" class="select-categoria">
                                <option value="1">Cultura e Entretenimento</option>
                                <option value="2">Desastres e Acidentes</option>
                                <option value="3">Economia e Negócios</option>
                                <option value="4">Ciência e Tecnologia</option>
                                <option value="5">Educação</option>
                                <option value="6">Saúde</option>
                                <option value="7">Política e Conflitos</option>
                                <option value="8">Religião</option>
                                <option value="9">Sociedade</option>
                                <option value="10">Música</option>
                                <option value="11">Crime, Direito e Justiça</option>
                                <option value="12">Esportes</option>
                                <option value="13">Geral</option>
                            </select>
                        </div>
                        <div class="clear-both"></div>
                        <div class="noticia-escrita">
                            <label for="noticia">Conteudo</label>
                            <textarea name="noticia" class="textarea-conteudo" cols="30" rows="10"></textarea>
                        </div>
                        <div class="btn-cadastrarnoticia">
                            <input class="ipt-submit" type="submit" value="Postar Notícia">
                        </div>
                    </div>
                </form>
            </section>
        </main>

        <footer>
            <?php include "./View/Modules/Includes/footer.html"; ?>
        </footer>
    </body>
</html>