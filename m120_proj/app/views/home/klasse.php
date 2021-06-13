<?php
@$vonWo = $_GET["vonWo"];
@$wohin = $_GET["wohin"];
$edit = [];
$db = new Database;

$db->createDatabase();
$db->createTable();
$db->createTableActive();
$db->insertValues();
$db->insertValuesActive();

$helper = new DBHelper;
$request = $helper->validateRequest($_GET);

$orte = new Ortschaften(
    @$orte = $request['Ort']
);

<<<<<<< Updated upstream
@$test = $db->all();
=======
$test = $db->allActive();
>>>>>>> Stashed changes
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
                    <button class="buttonSubmit" type="ersteKlasse" name="ersteKlasse" value="1">1. Klasse</button>
                    <button class="buttonSubmit" type="zweiteKlasse" name="zweiteKlasse" value="2">2. Klasse</button>
                </div>    
            </form>
            <?php echo '<p>' . @$test["Ort"] . '</p>' ?>
            <?php echo '<p>' . $vonWo . '</p>' ?>
            <?php echo '<p>' . $wohin . '</p>' ?>
            <?php
                  // Für jeden Eintrag im Hauptarray
                foreach ($test as $temp) {
                    // Einzelnes Auto ist in $auto verfügbar
                
                    echo '
                    <tr>
                    <td>'.$temp["Ort"].'</td>
                    </tr>';
                }
            ?>
        </main>
    </body>
</html>