<?php
    require 'class/Autoloader.php';
    Autoloader::register();  
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/jquery-2.2.4.js"></script>
        <script src="js/Chart.js"></script>
        <script src="js/statistique.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="js/ajax.js"></script>
        <script src="js/main.js"></script>
    </head>
    
    <body>
        <button>Mise à jour des données</button>
        <div id="status"></div>
        <div class="graphtaille">
            <canvas id="myChart"></canvas>
        </div>
        <div class="graphtaille">
            <canvas id="myChartLine"></canvas>
        </div>
        <script>

        </script>

    </body>
</html>