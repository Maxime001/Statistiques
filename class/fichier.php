<?php

    class Fichier{

       
        /**
         * 
         * @param type $nomDossier nom du dossier contenant les fichiers statistiques
         */
        public function __construct($nomDossier){
            $this->nomDossier = $nomDossier;
        }
        
        
        
        /**
         * Fonction permettant de connaitre le nom et la quantité de fichiers à traiter
         * @return array liste des fichiers avec leurs extension.
         */
        public function parcourirFichiers(){
            $nbFichier = 0;
            $fichier = array();
            if($dossier = opendir('./'.$this->nomDossier.'')){
                while(false !== ($fichier_s = readdir($dossier))){
                    if(strlen($fichier_s)>4){
                        array_push($fichier,$fichier_s);
                        $nbFichier++;
                    }
                }
                closedir($dossier);
                return $fichier;
            }
            else{
                echo 'Le dossier n\' a pas pu �tre ouvert';
            }
        }

        /**
         * Fonction qui parcours les lignes d'un fichier
         * @return array retourne un tableau contenant toutes les lignes du fichier
         */
        public function parcourirLignesFichier($Fichier){
            $lectureFichier = fopen("$this->nomDossier/".$Fichier,"r");

            if($lectureFichier){
                $ligne = array();
                while(!feof($lectureFichier)){
                    $buffer = fgets($lectureFichier);
                    array_push($ligne,$buffer);

                }
                fclose($lectureFichier);
            }
            return $ligne;

        }
        
        /**
         * Fonction permettant le tri des données stockées dans les fichiers du dossier donnees et les enregistre en bdd
         * @param type $Ligne array contenant les lignes d'un fichier
         */
        public function tri($Ligne){
            $annee = "";
            $secteur = "";
            $chiffre = "";
            $salaries = "";
            $effectif = "";
        // Boucle sur chaque ligne d'un fichier 
        for($i=0;$i<count($Ligne); $i++){
            // Division entre les mots de chaque ligne
             $ligneTableau[0] = explode(" ", $Ligne[$i]);
            // Detection Annee
            if($ligneTableau[0][0] == "Annee"){    
                $annee = intval(str_replace(";","",$ligneTableau[0][2]));   
            }
            // Detection secteur
            if($ligneTableau[0][0] == "Secteur"){
                $secteur = str_replace(";","",$ligneTableau[0][2]);
            }
            // Detection CA
            if($ligneTableau[0][0] == "Chiffre"){
                if(!isset($ligneTableau[0][3])){
                    $ligneTableau[0][3] = "string;0;0;0;0";
                }
                $chiffre = explode(";", $ligneTableau[0][3]);
                $chiffre = array_splice($chiffre, 1);
                for($j=0;$j<4;$j++){
                    $chiffre[$j] = intval($chiffre[$j]);
                }
            }   
            // Detection nombre salaries
            if($ligneTableau[0][0] == "Nombre"){
                if(!isset($ligneTableau[0][3])){
                    $ligneTableau[0][3] = "string;0;0;0;0";
                }
                $salaries = explode(";", $ligneTableau[0][3]);
                $salaries = array_splice($salaries, 1);
                
                for($j=0;$j<4;$j++){
                    $salaries[$j] = intval($salaries[$j]);
                }
            }
            // Détection des effectifs
            if($ligneTableau[0][0] == "Effectif"){
                 if(!isset($ligneTableau[0][7])){
                    $ligneTableau[0][7] = "string;0;0;0;0";
                }
                $effectif = explode(";", $ligneTableau[0][7]);
                $effectif = array_splice($effectif, 1);
                $effectif = str_replace("\n","",$effectif);
                $effectif = str_replace("\r","",$effectif);
                
                for($j=0;$j<4;$j++){
                    $effectif[$j] = intval($effectif[$j]);
                }
            }
            // Quand toutes les données sont détectées, envoi en base de donnéee
            if($annee != "" and $secteur != "" and $chiffre != "" and $salaries !="" and $effectif != "" ){
                $bdd = new BaseDonnees();
                $bdd->envoiDonnee($annee,"Chiffre d\'affaire HT",$secteur,$chiffre[0],$chiffre[1],$chiffre[2],$chiffre[3]);
                $bdd->envoiDonnee($annee,"Nombre d'entreprise",$secteur,$salaries[0],$salaries[1],$salaries[2],$salaries[3]);
                $bdd->envoiDonnee($annee,"Effectif salariés temps plein",$secteur,$effectif[0],$effectif[1],$effectif[2],$effectif[3]);
               
                $annee = "";
                $secteur = "";
                $chiffre = "";
                $salaries = "";
                $effectif = "";
            }
        }
        }
        
        
        
        
    }