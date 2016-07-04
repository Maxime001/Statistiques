<?php

$donnees = new BaseDonnees();
$AllAnnee= $donnees->rechercheDonneesDistinct("annee");
$AllTypeEntreprise=$donnees->rechercheDonneesDistinct("typeEntreprise");


$file = new Json($nomFichierJSON);
$t = $file->ouvrirJSON();
$t->{'annees'}= $AllAnnee;
$file->ecrireJSON($t);


$critereDB = array("Chiffre","Nombre", "Effectif");
$critereJSON = array("chiffreAffaire", "NombreEntreprises", "NombreSalaries");

for($j = 0; $j < sizeOf($critereDB); $j++) {
	for($i = 0; $i < sizeOf($AllTypeEntreprise); $i++) {
            $res = $donnees->rechercheDonnees($AllTypeEntreprise[$i], $critereDB[$j]) ;
            $t->{'secteurActivites'}->{rtrim($AllTypeEntreprise[$i])}->{$critereJSON[$j]} = $res;
            $file->ecrireJSON($t);
	}

}