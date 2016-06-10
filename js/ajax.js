function miseAJourDonneesBdd(){
     $.ajax({
        url : 'traitementDonnees.php',
        type : 'GET',
 success:function(){                
         $('#status').text("Les données ont étés mises à jour");
        }
    });
}