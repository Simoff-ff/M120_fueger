<?php

$edit = [];
$db = new Database;

$db->updategueltigkeit($_GET["gueltigkeit"]);

$ortschaften = $db->all();
$eingaben = $db->allActive();

foreach ($eingaben AS $eingabe){
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
                    foreach($eingaben AS $value) {
                        echo "<table style='width:100%'>
                                <tr>
                                    <th>Von: </th>
                                    <th>Bis: </th>
                                    <th>Klasse: </th>
                                    <th>Hinfahrt oder Retour: </th>
                                    <th>Anzahl Kinder Billete: </th>
                                    <th>Anzahl Erwachsene Billete:  </th>
                                    <th>Gültig bis:  </th>
                                    <th></th>
                                    <th>Gesamtpreis: </th>
                                </tr>
                                <tr>
                                    <td>" . $value['vonwo'] . "</td>
                                    <td>" . $value['wohin'] . "</td>
                                    <td>" . $value['klasse'] . "</td>
                                    <td>" . $value['weg'] . "</td>
                                    <td>" . $value['kinder'] . "</td>
                                    <td>" . $value['erwachsene'] . "</td>
                                    <td>" . $value['gueltigkeit'] . "</td>
                                    <td></td>
                                    <td>" . $result . "</td>
                                </tr>
                            </table>";
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