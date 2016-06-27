<?php

/**
 * Classe Base de données contenant toutes les requetes SQL du site
 */
class BaseDonnees {

    protected $bdd="";
    
    public function __construct($hostname, $username,$password, $namebase){

	$this->hostname =$hostname;
	$this->username = $username;
	$this->password = $password;
	$this->namebase = $namebase;

        try{
	    $this->bdd = new PDO('mysql:host='.$this->hostname.';dbname='.$this->namebase.'', $this->username, $this->password);
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            }
        catch(Exception $e){die('Erreur : '.$e->getMessage());}
    }
    
	
	function rechercheDonneesDistinct($whatData) {
		$total = array();
		$q = "SELECT DISTINCT(" . $whatData .") FROM statistiques";
		$reponse = $this->bdd->query($q);
		while($donnees = $reponse->fetch()){
			$total[] = $donnees[$whatData];
		}
			return $total;
	}

	function rechercheDonnees($typeEntreprise, $whatData) {

		$total = array();
		$q = "SELECT * FROM statistiques WHERE (critere LIKE '%" . $whatData ."%' && typeEntreprise LIKE '%" . $typeEntreprise ."%')";
		$reponse = $this->bdd->query($q);
		while($donnees = $reponse->fetch()){
			$total[] = $donnees["total"];

		}
			return $total;
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /**
     * Fonction d'affichage des données de la bdd
     *
     */
    public function select(){
        $reponse =$this->bdd->query('SELECT * FROM statistiques');
        if($donnees = $reponse->fetch()){
            var_dump($donnees);
        }
        else{
            return "Erreur d'identification";
        }
    }
    
    /**
     * Fonction d'envoi de données statistiques dans la bdd
     * @param type $valeur
     * @param type $critere
     * @param type $secteur
     * @param type $tres_petite
     * @param type $petite
     * @param type $moyenne
     * @param type $grande
     */
    public function envoiDonnee($valeur,$critere,$secteur,$tres_petite,$petite,$moyenne,$grande,$total){
        $this->bdd->exec('INSERT INTO statistiques(annee,critere,typeEntreprise,tres_petite,petite,moyenne,grande,total) VALUES('.$valeur.',"'.$critere.'","'.$secteur.'",'.$tres_petite.','.$petite.','.$moyenne.','.$grande.','.$total.')');
    }
    
    /**
     * Supprime tout le contenu d'une table
     * @param type $table table à supprimer 
     */
    public function videTable($table){
        $this->bdd->exec('DELETE FROM '.$table.'');
    }
}
