<?php
@$vonWo = $_GET["vonWo"];
@$wohin = $_GET["wohin"];
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
$db->updatevowo($_GET["vonWo"], $_GET["wohin"]);

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
            <form>
                <button type="submit" name="klasse" value="1" formaction="../Weg/test">1. Klasse</button>
                <button type="submit" name="klasse" value="2" formaction="../Weg/test">2. Klasse</button>
            </form>
            <?php echo '<p>' . $eingabe->getVonwo() . '</p>' ?>
            <?php echo '<p>' . $wohin . '</p>' ?>
            <?php
                  // Für jeden Eintrag im Hauptarray
                foreach ($test as $temp) {
                    // Einzelnes Auto ist in $auto verfügbar
                
                    echo '
                    <tr>
                    <td>'.$temp["wohin"].'</td>
                    </tr>';
                }
            ?>
        </main>
    </body>
</html>