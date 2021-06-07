<?php
@$vonWo = $_GET["vonWo"];
@$wohin = $_GET["wohin"];
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
                <label for="erwachseneBillete">Anzahl <span>Erwachsene</span> Billete
                    <input type="number" id="erwachseneBillete" name="erwachseneBillete">
                    <button type="button" onclick="minusEr()" class="buttonMinus">-</button>
                    <button type="button" onclick="plusEr()" class="buttonPlus">+</button>
                </label>
                    <label for="kinderBillete">Anzahl <span>Kinder/Halbtax</span> Billete
                    <div class="numberEingabe">
                        <input type="number" id="kinderBillete" name="kinderBillete">
                        <div class="plusMinus">
                            <button type="button" onclick="minus()" class="buttonMinus">-</button>
                            <button type="button" onclick="plus()" class="buttonPlus">+</button>
                        </div>
                    </div>
                    </label>
                <button class="buttonSubmit" type="submit"  name="speichern" value="1">Weiter</button>
            </form>
           
            <?php echo '<p>' . $vonWo . '</p>' ?>
            <?php echo '<p>' . $wohin . '</p>' ?>
        </main>
        <script>
            function plusEr(){
                var atual = document.getElementById("erwachseneBillete").value;
                var novo = atual - (-1); 
                document.getElementById("erwachseneBillete").value = novo;
            }

                function minusEr(){
                var atual = document.getElementById("erwachseneBillete").value;
                if(atual > 0) { 
                    var novo = atual - 1;
                    document.getElementById("erwachseneBillete").value = novo;
                }
                }
            
                function plus(){
                var atual = document.getElementById("kinderBillete").value;
                var novo = atual - (-1);
                document.getElementById("kinderBillete").value = novo;
            }

                function minus(){
                var atual = document.getElementById("kinderBillete").value;
                if(atual > 0) { 
                    var novo = atual - 1;
                    document.getElementById("kinderBillete").value = novo;
                }
                }
        </script>
    </body>
</html>