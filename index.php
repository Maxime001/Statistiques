<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
    </head> 

    <body>

   <?php
    session_start();
    require 'class/Autoloader.php';
    Autoloader::register();  
    
    // On recherche les fichiers
    $Fichier = new Fichier("donnees");
    $Fichier = $Fichier->parcourirFichiers();
   
    // On en extrait les lignes de chaque fichier
    for($i=0;$i<count($Fichier);$i++){
        $Ligne = new Fichier("donnees");
        $Ligne = $Ligne->parcourirLignesFichier($Fichier[$i]);
        
        //Traitement pour chaque fichier
        
        
    }
    
    
    var_dump($Ligne);
    
    
    

?>

    </body>
</html>
