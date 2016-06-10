<?php

/**
 * Classe Base de données contenant toutes les requetes SQL du site
 */
class BaseDonnees {

    protected $bdd="";
    
    public function __construct(){
        try{
            $this->bdd = new PDO('mysql:host=localhost;dbname=statistiques;charset=utf8', "root", "");
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            }
        catch(Exception $e){die('Erreur : '.$e->getMessage());}
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