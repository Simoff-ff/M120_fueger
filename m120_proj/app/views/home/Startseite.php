<?php
$vonWo = $_GET["vonWo"];
$wohin = $_GET["wohin"];
?>

<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>
        <header>
            <h1>Billetautomat</h1>
        </header>
        <main>
            <form>
                <label for="vonWo">Von wo startest du?
                    <input type="text" id="vonWo" name="vonWo">
                </label>
                <label for="wohin">Wo ist dein Zeil?
                    <input type="text" id="wohin" name="wohin">
                </label>
                <button type="submit"  name="speichern" value="1">Weiter</button>
            </form>
            <?php echo '<p>' . $vonWo . '</p>' ?>
            <?php echo '<p>' . $wohin . '</p>' ?>
        </main>
    </body>
</html>