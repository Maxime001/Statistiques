<?php
     require 'class/Autoloader.php';
     Autoloader::register();  

     // Fonction de détection de fichier - Retourne le nombre de fichier et leurs nom dans $Fichier
     $Fichier = new Fichier("donnees");
     $Fichier = $Fichier->parcourirFichiers();

     // On decoupe chaque fichier par ligne, on fait le tri puis envoi en base de données
     $TriFinal = new Fichier("donnees");
     for($i=0;$i<=count($Fichier)-1;$i++){
         $Ligne = new Fichier("donnees");
         $Ligne = $Ligne->parcourirLignesFichier($Fichier[$i]);
         $TriFinal->tri($Ligne);
     }