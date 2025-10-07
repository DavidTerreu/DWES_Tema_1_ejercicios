<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 1</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <?php
            include 'header.php';
            ?>
        </header>

        <main>
            <img src="./img/LANS_Link_Render.png" alt="foto Link" width="400"</img>
            <div class='frase'>Hola, me llamo <?php echo nombre ?>, tengo  <?php echo edad ?> años y soy de <?php echo ciudad ?>.</div>
        </main>
        <footer>
            <?php
            include 'footer.php';
            ?>
        </footer>

    </body>
</html>

<?php
