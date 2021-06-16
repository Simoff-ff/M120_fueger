<?php

$db = new Database;

$db->updateweg($_GET["weg"]);
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
                <div class="row">
                    <div class="firstSelection">
                        <label for="erwachseneBillete">Anzahl <span>Erwachsene</span> Billete </label>
                        <div class="numberEingabe">
                            <input type="number" id="erwachseneBillete" name="erwachseneBillete">
                            <div class="plusMinus">
                                <button type="button" onclick="minusEr()" class="buttonMinus">-</button>
                                <button type="button" onclick="plusEr()" class="buttonPlus">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="firstSelection">
                        <label for="kinderBillete">Anzahl <span>Kinder/Halbtax</span> Billete</label>
                        <div class="numberEingabe">
                            <input type="number" id="kinderBillete" name="kinderBillete">
                            <div class="plusMinus">
                                <button type="button" onclick="minus()" class="buttonMinus">-</button>
                                <button type="button" onclick="plus()" class="buttonPlus">+</button>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="buttonForm">
                        <button class="buttonSubmit" type="submit" formaction="../Gueltigkeit/test">Weiter</button>
                    </div>
            </form>
           
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