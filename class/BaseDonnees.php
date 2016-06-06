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
     * Fonction d'identification
     * @param type $nom recherche de l'identifiant entré dans la page de login dans la base de donnée
     * @return string retourne le mot de passe encrypté en sha256
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
    

    public function envoiDonnee($valeur,$critere,$secteur,$tres_petite,$petite,$moyenne,$grande){
        $this->bdd->exec('INSERT INTO statistiques(annee,critere,typeEntreprise,tres_petite,petite,moyenne,grande) VALUES('.$valeur.',"'.$critere.'","'.$secteur.'",'.$tres_petite.','.$petite.','.$moyenne.','.$grande.')');
    }
}