<?php

@$vonWo = $_POST["vonWo"];
@$wohin = $_POST["wohin"];
@$speicher = $_GET["speichern"];

$homeController = new Home;
if($speichern == 1){
    $homeController->weiter();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="css/template.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Billetautomat</h1>
        </header>
        <main>
            <form>
                <div class="eingabeFelder">
                        <input type="text" id="vonWo" name="vonWo"  placeholder="Von wo startest du?">
                        <input type="text" id="wohin" name="wohin" placeholder="Wo ist dein Ziel?">
                </div>
                <div class="buttonForm">
                    <button class="buttonSubmit" type="submit" formaction="Klasse/test">Weiter</button>
                </div>
            </form>
            <?php echo '<p>' . $vonWo . '</p>' ?>
            <?php echo '<p>' . $wohin . '</p>' ?>
        </main>
    </body>
</html>