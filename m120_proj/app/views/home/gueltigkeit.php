<?php
$db = new Database;
$db->updatebillete($_GET["kinderBillete"], $_GET["erwachseneBillete"]);

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
                <div class="eingabeFelder">
                    <input type="date" name="gueltigkeit">
                </div>
                <div class="buttonForm">
                    <button class="buttonSubmit" type="submit" formaction="../Gesammtuebersicht/test">Weiter</button>
                </div>
            </form>
        </main>
    </body>
</html>