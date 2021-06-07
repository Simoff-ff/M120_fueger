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
                <button type="ersteKlasse" name="hinfahrt" value="hinfahrt">Hinfahrt</button>
                <button type="zweiteKlasse" name="retour" value="retour">Mit Retour</button>
            </form>
        </main>
    </body>
</html>