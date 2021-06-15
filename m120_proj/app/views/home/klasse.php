<?php
@$vonWo = $_GET["vonWo"];
@$wohin = $_GET["wohin"];
$edit = [];
$db = new Database;

$db->createDatabase();
$db->createTable();
$db->createTableActive();

$db->updatevowo($_GET["vonWo"], $_GET["wohin"]);

$helper = new DBHelper;
$request = $helper->validateRequest($_GET);

$orte = new Ortschaften(
    @$orte = $request['Ort']
);


$test = $db->allActive();
@$test = $db->all();
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
            <?php echo '<p>' . $eingabe->getVonwo() . '</p>' ?>
            <?php echo '<p>' . $wohin . '</p>' ?>
            <?php
                  // Für jeden Eintrag im Hauptarray
                foreach ($test as $temp) {
                
                    echo '
                    <tr>
                    <td>'.$temp["wohin"].'</td>
                    </tr>';
                }
            ?>
        </main>
    </body>
</html>