<!doctype html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <script type="text/javascript">

       
        </script>
    </head> 

    <body>

   <?php
    session_start();
    require 'class/Autoloader.php';
    Autoloader::register();  
    
    $Fichier = new Fichier("donnees");
    $Fichier = $Fichier->parcourirFichiers();
   
    $Ligne = new Fichier("donnees");
    $Ligne = $Ligne->parcourirLignesFichier($Fichier[0]);
    
    $Ligne2 = new Fichier("donnees");
    $Ligne2 = $Ligne2->parcourirLignesFichier($Fichier[1]);
    
    $Ligne3 = new Fichier("donnees");
    $Ligne3 = $Ligne3->parcourirLignesFichier($Fichier[2]);
    
    $TriFinal = new Fichier("donnees");
    $TriFinal->tri($Ligne);
    $TriFinal->tri($Ligne2);
    $TriFinal->tri($Ligne3);
         
    


    
    

?>

    </body>
</html>
