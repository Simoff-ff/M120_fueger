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
                <div class="tableRow">
                <?php 
                    foreach($eingaben AS $value) {
                        echo "<table>
                                <tr>
                                    <th>Von: </th>
                                    <td>" . $value['vonwo'] . "</td>
                                </tr>
                                <tr>
                                    <th>Bis: </th>
                                    <td>" . $value['wohin'] . "</td>
                                </tr>
                                <tr>
                                    <th>Klasse: </th>
                                    <td>" . $value['klasse'] . "</td>
                                </tr>
                                <tr>
                                    <th>Hinfahrt oder Retour: </th>
                                    <td>" . $value['weg'] . "</td>
                                </tr>
                                <tr>
                                    <th>Anzahl Kinder Billete: </th>
                                    <td>" . $value['kinder'] . "</td>
                                </tr>
                                <tr>
                                    <th>Anzahl Erwachsene Billete:  </th>
                                    <td>" . $value['erwachsene'] . "</td>
                                </tr>
                                <tr>
                                    <th>Gültig bis:  </th>
                                    <td>" . $value['gueltigkeit'] . "</td>
                                </tr>
                                <tr>
                                    <th><span>Gesamtpreis: </span></th>
                                    <td><span>" . $result . "</span></td>
                                </tr>
                            </table>";
                     }
                ?>
                </div>
                <div class="buttonForm">
                    <button class="buttonSubmit">Kaufen</button>
                    <button class="buttonSubmit"><a href="../../public/">Neues Billet</a></button>
                </div>
           </div>
        </main>
    </body>
</html>