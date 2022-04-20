<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NotiCidade - Deletar Notícias</title>
        <?php include "./View/Modules/Includes/css.cfg.html" ?>
    </head>

    <body>
        <header>
            <?php include "./View/Modules/Includes/header.html" ?>
        </header>

        <main class="deletarnoticia">
            <section class="box-deletar">
                <form action="/deletando" method="POST">
                    <div class="header-deletar">
                        <h2>Deletar Notícia</h2>
                        <p>Selecione abaixo o título da notícia referente a qual deseja excluir. Lembre-se de selecionar duas vezes para realizar a confirmação da exclusão.</p>
                    </div>
                    <div class="main-forms-deletar">
                        <div class="noticia-deletar">
                            <label for="titulo-deletar">Selecione a notícia que deseja deletar</label>
                            <select name="titulo-deletar">
                                <?php foreach($model->rows as $item): ?>
                                    <option value="<?= $item['id'] ?>"><?= $item['titulo'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="noticia-deletar-confirmar">
                            <label for="titulo-deletar-confirmar">Selecione novamente para confirmar</label>
                            <select name="titulo-deletar-confirmar">
                                <?php foreach($model->rows as $item): ?>
                                    <option value="<?= $item['id'] ?>"><?= $item['titulo'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="btn-deletar-forms">
                            <input class="btn-deletar" type="submit" value="Deletar Notícia">
                        </div>
                    </div>
                </form>
            </section>
        </main>

        
    </body>
</html>