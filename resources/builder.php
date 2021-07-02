<?php
function build($page, $header, $footer)
{
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Rubens Seite</title>
        <link rel="stylesheet" href="./src/style.css">
    </head>

    <body>
    <header>
        <?php require_once './resources/header/' . $header; ?>
    </header>
    <main>
        <?php require_once './resources/body/' . $page; ?>
    </main>
    <footer>
        <?php require_once './resources/footer/' . $footer; ?>
    </footer>
    </body>

    </html>

    <?php
}

?>