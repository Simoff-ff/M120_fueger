<?php

$edit = [];
$db = new Database;

$db->createDatabase();
$db->createTable();
$db->createTableActive();

$db->updategueltigkeit($_GET["gueltigkeit"]);

$helper = new DBHelper;
$request = $helper->validateRequest($_GET);

$orte = new Ortschaften(
    @$orte = $request['Ort']
);

$ortschaften = $db->all();

$test = $db->allActive();

foreach ($test AS $eingabe){
    $vonwo = $eingabe['vonwo'];
    $wohin = $eingabe['wohin'];
    $klasse = $eingabe['klasse'];
    $kinder = $eingabe['kinder'];
    $erwachsene = $eingabe['erwachsene'];
    $weg = $eingabe['weg'];
} 
$preisvonwo;
$preiswohin;
foreach($ortschaften AS $temp){
    if($temp['Ort'] == $vonwo){
        $preisvonwo = $temp['Preis'];
    }
    if($temp['Ort'] == $wohin){
        $preiswohin = $temp['Preis'];
    }    
}
$preis = $preisvonwo + $preiswohin;
$faktorklasse;
if ($klasse == 1){
    $faktorklasse = 10;
} else {
    $faktorklasse = 0;
}

$faktorhinfahrt;
if ($weg == "Retour"){
    $faktorhinfahrt = 2;
} else {
    $faktorhinfahrt = 1;
}

$resultkind = ($kinder * $preis / 5) + ($kinder * $faktorklasse);
$resulterwachsene = $erwachsene * $preis + ($erwachsene * $faktorklasse);

$result = ($resulterwachsene + $resultkind) * $faktorhinfahrt; 

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
                        
                        echo '<br> Von: ' . $value['vonwo'];
                        echo '<br> Bis: ' . $value['wohin'];
                        echo '<br> Klasse: ' . $value['klasse'];
                        echo '<br> Hinfahrt oder Retour: ' . $value['weg'];
                        echo '<br> Anzahl Kinder Billete: ' . $value['kinder'];
                        echo '<br> Anzahl Erwachsene Billete: ' . $value['erwachsene'];
                        echo '<br> Gültig bis: ' . $value['gueltigkeit'];
                        echo '<br> ';
                        echo '<br> Gesamtpreis: ' . $result;
                     }
                ?>
                <div class="buttonForm">
                    <button class="buttonSubmit">Kaufen</button>
                    <button class="buttonSubmit"><a href="../../public/">Neues Billet</a></button>
                </div>
           </div>
        </main>
    </body>
</html>