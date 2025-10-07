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
            <div class='frase'>Hola, me llamo <?php echo nombre ?>, tengo  <?php echo edad ?> años y soy de <?php echo ciudad ?>.</div>
            <img src="./img/basilica-de-nuestra-senora.jpg" alt="foto Zaragoza" width="400"</img>
            <div class='hora'>La hora de hoy es  <?php echo hora ?> </div>

            <div class='fecha'>La fecha de hoy es  <?php echo fecha ?> </div>
        </main>
        <footer>
            <?php
            include 'footer.php';
            ?>
        </footer>

    </body>
</html>