<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 1</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        $nombre = "David";
        $edad = 40;
        $ciudad = "Zaragoza"; ?>
        <header>
            <?php
            include 'header.php';
            ?>
        </header>

        <main>
            <div class='frase'>Hola, me llamo <?php echo $nombre ?>, tengo  <?php echo $edad ?> años y soy de <?php echo $ciudad ?>.</div>

            <div class='hora'>La hora de hoy es  <?php echo date("H:i:s"); ?> </div>

            <div class='fecha'>La fecha de hoy es  <?php echo date("d-m-Y") ; ?> </div>
        </main>
        <footer>
            <?php
            include 'footer.php';
            ?>
        </footer>

    </body>
</html>