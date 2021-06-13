<?php
@$vonWo = $_GET["vonWo"];
@$wohin = $_GET["wohin"];
$edit = [];
$db = new Database;

$db->createDatabase();
$db->createTable();
$db->createTableActive();
<<<<<<< HEAD
//$db->insertValues();
//$db->insertValuesActive();

$eingabe = new Eingaben("ein", "swei");
$eingabe->getVonwo();
$eingabe->setVonwo("dreis");
$db->updatevowo($_GET["vonWo"], $_GET["wohin"]);
=======
$db->insertValues();
$db->insertValuesActive();
>>>>>>> ed9b6d6e7878e3bed0084ccddaa816e08e32aafc

$helper = new DBHelper;
$request = $helper->validateRequest($_GET);

$orte = new Ortschaften(
    @$orte = $request['Ort']
);

<<<<<<< HEAD
$test = $db->allActive();
=======
<<<<<<< Updated upstream
@$test = $db->all();
=======
$test = $db->allActive();
>>>>>>> Stashed changes
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
<<<<<<< HEAD
                <button type="submit" name="klasse" value="1" formaction="../Weg/test">1. Klasse</button>
                <button type="submit" name="klasse" value="2" formaction="../Weg/test">2. Klasse</button>
            </form>
            <?php echo '<p>' . $eingabe->getVonwo() . '</p>' ?>
=======
                <div class="eingabeFelder">
                    <button class="buttonSubmit" type="ersteKlasse" name="ersteKlasse" value="1">1. Klasse</button>
                    <button class="buttonSubmit" type="zweiteKlasse" name="zweiteKlasse" value="2">2. Klasse</button>
                </div>    
            </form>
            <?php echo '<p>' . @$test["Ort"] . '</p>' ?>
            <?php echo '<p>' . $vonWo . '</p>' ?>
>>>>>>> ed9b6d6e7878e3bed0084ccddaa816e08e32aafc
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