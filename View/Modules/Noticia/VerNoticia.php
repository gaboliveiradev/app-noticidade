<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NotiCidade - Ver Notícias</title>
        <?php include "./View/Modules/Includes/css.cfg.html"; ?>
    </head>

    <body>
        <header>
            <?php include "./View/Modules/Includes/header.html"; ?>
        </header>

        <main class="vernoticia">
            <?php foreach($model->rows as $item): ?>
                <section class="noticia">
                    <div class="header-noticia">
                        <div class="titulo-noticia">
                            <h1><?= $item['titulo'] ?></h1>
                            <a class="icon-acao" href="/noticia/deletar"><i class='bx bxs-trash-alt'></i></a>
                            <a class="icon-acao" href="/noticia/editar"><i class='bx bxs-edit-alt'></i></a>
                        </div>
                        <div class="manchete-noticia">
                            <p><?= $item['manchete'] ?></p>
                        </div>
                        <div class="info-noticia">
                            <p>Por <span class="noti">Noti</span><span class="cidade">Cidade</span></p>
                            <p class="timestamp"><?= $item['data_post'] ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="main-noticia">
                        <div class="noticia-imagem">
                            <img src="<?= $item['image_link'] ?>">
                        </div>
                        <div class="conteudo-noticia">
                            <p><?php echo $item['conteudo'] ?></p>
                        </div>
                    </div>
                </section>
                <br><br><br>
            <?php endforeach; ?>
        </main>
    </body>
</html>