<?php
    require 'class/Autoloader.php';
    Autoloader::register();  
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/contenu.css"/>
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/libs/jquery-2.2.4.js"></script>
        <script src="js/libs/Chart.js"></script>
        <script src="js/statistique.js"></script>
        <script src="js/ajax.js"></script>
        <script src="js/main.js"></script>
    </head>
    

    <body class="main">
        <h1>TITRE DES GRAPHIQUES</h1>
       
        <div class="centerPage" >
            <div  class="fond affichageJauges">
                <div class= "mainTitle">Mise a jour des données </div> 
                <button>Mise à jour des données</button>
                <div id="status"></div>   
            </div>
            </br>
            
            <div  class="fond affichageJauges">
                <div class= "mainTitle">Graphique 1 </div> 
                <div class="graphtaille">
                    <canvas id="myChartEmploye"></canvas>
                </div>
            </div>
            </br>
            
            <div  class="fond affichageJauges">
                <div class= "mainTitle">Graphique 2 </div> 
                <div class="graphtaille">
                    <canvas id="myChartEntreprise"></canvas>
                </div>
            </div>
            </br>
            
            <div  class="fond affichageJauges">
                <div class= "mainTitle">Graphique 3 </div> 
                <div class="graphtaille">
                   <canvas id="myChartCA"></canvas>
                </div>
            </div>
        </div>
        </br>
        </br>



    </body>
</html>