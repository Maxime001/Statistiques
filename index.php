<?php
    require 'class/Autoloader.php';
    Autoloader::register();  
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/libs/jquery-2.2.4.js"></script>
        <script src="js/libs/Chart.js"></script>
        <script src="js/statistique.js"></script>
        <script src="js/ajax.js"></script>
        <script src="js/main.js"></script>
    </head>
    
    <body>
        <button>Mise à jour des données</button>
        <div id="status"></div>
        <div class="graphtaille">
            <canvas id="myChartEmploye"></canvas>
        </div>
        <div class="graphtaille">
            <canvas id="myChartEntreprise"></canvas>
        </div>
        <div class="graphtaille">
            <canvas id="myChartCA"></canvas>
        </div>
        <script>

        </script>

    </body>
</html>