$(document).ready(function() {   
    $('button').on('click',function(){
       miseAJourDonneesBdd(); 
	rechercheDonneesBdd();
    });
    getJson();
});
