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
        
        
        
        
        
    }