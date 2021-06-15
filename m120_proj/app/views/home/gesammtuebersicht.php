<?php

$edit = [];
$db = new Database;

$db->createDatabase();
$db->createTable();
$db->createTableActive();
//$db->insertValues();
//$db->insertValuesActive();

$eingabe = new Eingaben("ein", "swei");
$eingabe->getVonwo();
$eingabe->setVonwo("dreis");
//$db->updatevowo($_GET["gueltigkeit"], $_GET["wohin"]);

$helper = new DBHelper;
$request = $helper->validateRequest($_GET);

$orte = new Ortschaften(
    @$orte = $request['Ort']
);


$test = $db->allActive();

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
           <div class="dunkelMitBorder">
                <?php 
                    foreach($test AS $value) {
                        echo '<br> Wohin: ' . $value['wohin'];
                        echo '<br> Von Wo: ' . $value['vonwo'];
                        echo '<br> Klase: ' . $value['klasse'];
                        echo '<br> Weg: ' . $value['weg'];
                        echo '<br> Anzahl Kinder Billete: ' . $value['kinder'];
                        echo '<br> Anzahl Erwachsene Billete: ' . $value['erwachsene'];
                     }
                ?>
                <div class="buttonForm">
                    <button class="buttonSubmit">Kaufen</button>
                    <button class="buttonSubmit"><a href="../../public/">Neus Billet</a></button>
                </div>
           </div>
        </main>
    </body>
</html>