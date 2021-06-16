<?php
$db = new Database;

$db->updateklasse($_GET["klasse"]);
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
                <div class="buttonForm">
                    <button class="buttonSubmit" type="ersteKlasse" name="weg" value="Hinfahrt" formaction="../AnzahlBillete/test">Hinfahrt</button>
                    <button class="buttonSubmit" type="zweiteKlasse" name="weg" value="Retour" formaction="../AnzahlBillete/test">Mit Retour</button>
                </div>
            </form>
        </main>
    </body>
</html>