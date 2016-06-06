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
    
    
    $hello = new Test("maxime");
    $hello = $hello->ttest(); 
    var_dump($hello);
    echo $hello;
    // On recherche les fichiers
    $Fichier = new Fichier("donnees");
    $Fichier = $Fichier->parcourirFichiers();
   
    // On en extrait les lignes de chaque fichier
    for($i=0;$i<count($Fichier);$i++){
        $Ligne = new Fichier("donnees");
        $Ligne = $Ligne->parcourirLignesFichier($Fichier[$i]);
        
        var_dump($Ligne);
        //Traitement pour chaque fichier
        for($i=0;$i<count($Ligne); $i++){

             $ligneTableau[0] = explode(" ", $Ligne[$i]);
            
            // Nouvelle annee
            if($ligneTableau[0][0] == "Annee"){
                var_dump($ligneTableau[0][0]);
                var_dump($ligneTableau[0][2]);
            }
            
        }
         
    }
    
    
   // var_dump($Ligne);
    
    
    

?>

    </body>
</html>
