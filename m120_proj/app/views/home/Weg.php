<?php
<<<<<<< HEAD
@$klasse = $_GET["ersteklasse"];


$db = new Database;

$db->updateklasse($_GET["klasse"]);
=======

>>>>>>> ed9b6d6e7878e3bed0084ccddaa816e08e32aafc
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
                <button class="buttonSubmit" type="ersteKlasse" name="hinfahrt" value="hinfahrt">Hinfahrt</button>
                <button class="buttonSubmit" type="zweiteKlasse" name="retour" value="retour">Mit Retour</button>
            </form>
        </main>
    </body>
</html>