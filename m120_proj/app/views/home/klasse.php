<?php
@$vonWo = $_GET["vonWo"];
@$wohin = $_GET["wohin"];

$db = new Database;

$db->updatevowo($_GET["vonWo"], $_GET["wohin"]);

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
                <button class="buttonSubmit" type="submit" name="klasse" value="1" formaction="../Weg/test">1. Klasse</button>
                <button class="buttonSubmit" type="submit" name="klasse" value="2" formaction="../Weg/test">2. Klasse</button>
            </form>
        </main>
    </body>
</html>