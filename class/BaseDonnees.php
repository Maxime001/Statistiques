<?php

/**
 * Classe Base de données contenant toutes les requetes SQL du site
 */
class BaseDonnees {

    protected $bdd="";
    
    /**
     * 
     * @param type $hostname
     * @param type $username
     * @param type $password
     * @param type $namebase
     */
    public function __construct(){
        include("config.php");

        
        try{
	    $this->bdd = new PDO('mysql:host='.$hostname.';dbname='.$namebase.'', $username, $password);
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            }
        catch(Exception $e){die('Erreur : '.$e->getMessage());}
    }
    
    /**
     * Recherche de donnée unique dans la base de donnée
     * @param type $whatData donnée à chercher
     * @return type donnée trouvée 
     */
    function rechercheDonneesDistinct($whatData) {
            $total = array();
            $q = "SELECT DISTINCT(" . $whatData .") FROM statistiques";
            $reponse = $this->bdd->query($q);
            while($donnees = $reponse->fetch()){
                    $total[] = $donnees[$whatData];
            }
                    return $total;
    }

    /**
     * Recherche de données
     * @param type $typeEntreprise type d'entreprise à sélectionner 
     * @param type $whatData type de données à sélectionner 
     * @return type array colonne total de la base de donnée
     */
    function rechercheDonnees($typeEntreprise, $whatData) {
        $total = array();
        $q = "SELECT * FROM statistiques WHERE (critere LIKE '%" . $whatData ."%' && typeEntreprise LIKE '%" . $typeEntreprise ."%')";
        $reponse = $this->bdd->query($q);
        while($donnees = $reponse->fetch()){
            $total[] = $donnees["total"];

        }
            return $total;
    }

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
