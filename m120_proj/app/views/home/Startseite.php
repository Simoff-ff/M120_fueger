<?php

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
                <div class="selections">
                    <div class="firstSelection">
                        <label for="vonWo">Von möchtest du <span>starten </span>?</label>
                        <select name="vonWo" id="vonWo" required>
                            <option value="Frauenfeld">Frauenfeld</option>
                            <option value="Zuerich">Zuerich</option>
                            <option value="St.Gallen">St.Gallen</option>
                        </select>
                    </div>
                    <div class="firstSelection">
                        <label for="vonWo">Wo ist dein <span> Ziel </span> ?</label>
                        <select name="wohin" id="wohin" required>
                            <option value="Frauenfeld">Frauenfeld</option>
                            <option value="Zuerich">Zuerich</option>
                            <option value="St.Gallen">St.Gallen</option>
                        </select>
                    </div>
                </div>
                <div class="buttonForm">
                    <button class="buttonSubmit" type="submit" formaction="Klasse/test">Weiter</button>
                </div>
            </form>
        </main>
    </body>
</html>