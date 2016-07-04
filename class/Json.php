<?php

/**
 * Classe contenant les fonctions de lecture et d'écriture de fichiers json
 */
class Json {

    /**
     * 
     * @param type $nomFichier nom du fichier json
     */
    public function __construct($nomFichier){
       $this->nomFichier = $nomFichier;
    }

    /**
     * Lis le contenu d'un fichier json
     * @return type retourne le contenu du fichier json ouvert
     */
    function ouvrirJSON() {
        $json = file_get_contents($this->nomFichier);
        if ($json === false) { 
                echo "<p>Probleme avec le fichier</p>" . $this->nomFichier;
                return;
        } 
        $obj = json_decode($json);
        return $obj;
    }
    
    /**
     * Ecrit dans un fichier json 
     * @param type $donnees données à écrire
     */
    function ecrireJSON($donnees) {
        $donneeEncodee = json_encode($donnees, JSON_PRETTY_PRINT);
        $addJson = fopen($this->nomFichier,'r+')
        or die("Erreur d'ouverture du fichier Json");
        fputs($addJson,$donneeEncodee);
    }
}