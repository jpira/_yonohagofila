<!DOCTYPE>
<html lang="es">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <title>Extranet | <?php echo $sf_response->getTitle() ?></title>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <header>
            <section id="notificaciones">
                <?php include_partial('parciales/notificaciones') ?>
            </section>
        </header>
        <section id="contenido">
            <?php echo $sf_content ?>
        </section>
        <footer>
            <?php include_partial('parciales/legales') ?>
        </footer>
    </body>
</html>