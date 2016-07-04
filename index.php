<?php
    require 'class/Autoloader.php';
    Autoloader::register();  
    include "rechercheDonnees.php";
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/contenu.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/libs/jquery-2.2.4.js"></script>
        <script src="js/libs/Chart.js"></script>
        <script src="js/statistique.js"></script>
        <script src="js/ajax.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body class="main">
        <h2>Graphiques de l'évolution du Chiffre d'affaire, du nombre d'entreprises et d'employés dans le secteur Mulhousien</h2>   
        <div class="centerPage" >
            <div  class="fond affichageJauges">
                <div class= "mainTitle" class="boutonCentrage">Mise a jour des données </div> 
                <button class="submitButton">Mise à jour des données</button>
                <span  id="status">Les données ont étés mises à jour à </span>   
                <span id="time" style="display:none"></span>
            </div>
            </br>

            <div  class="fond affichageJauges">
                <div class= "mainTitle">Nombre d'employés par année</div>
                <div class="graphtaille">
                    <canvas id="myChartEmploye"></canvas>
                </div>
            </div>
            </br>
            
            <div  class="fond affichageJauges">
                <div class= "mainTitle">Nombre d'entreprises par année</div>
                <div class="graphtaille">
                    <canvas id="myChartEntreprise"></canvas>
                </div>
            </div>
            </br>
            
            <div  class="fond affichageJauges">
                <div class= "mainTitle">Chiffre d'affaire des entreprises par année</div>
                <div class="graphtaille" id="graphe3">

                </div>
            </div>
        </div>
        </br>
        </br>
    </body>
</html>
