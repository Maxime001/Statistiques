<?php

/**
 * Classe 
 */
class Json {

    
    public function __construct($nomFichier){
       $this->nomFichier = $nomFichier;
    }

	function ouvrirJSON() {
		$json = file_get_contents($this->nomFichier);
		if ($json === false) { 
	 		echo "<p>Probleme avec le fichier</p>" . $this->nomFichier;
		} else {
			$obj = json_decode($json);
		}
		return $obj;
	}

	function ecrireJSON($donnees) {
		$donnees = json_encode($donnees, JSON_PRETTY_PRINT);
		$addJson = fopen($this->nomFichier,'r+')
		or die("Erreur d'ouverture du fichier Json");
	//	ftruncate($addJson,0);
		fputs($addJson,$donnees);
	}

}




