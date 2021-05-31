<?php
@$vonWo = $_GET["vonWo"];
@$wohin = $_GET["wohin"];
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="/M120_Fueger/m120_proj/public/css/template.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Billetautomat</h1>
        </header>
        <main>
            <form>
                <button type="ersteKlasse" name="ersteKlasse" value="1">1. Klasse</button>
                <button type="zweiteKlasse" name="zweiteKlasse" value="1">2. Klasse</button>
            </form>
            <?php echo '<p>' . $vonWo . '</p>' ?>
            <?php echo '<p>' . $wohin . '</p>' ?>
        </main>
    </body>
</html>