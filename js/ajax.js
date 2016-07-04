function miseAJourDonneesBdd(){
    $.ajax({
        url : 'traitementDonnees.php',
        type : 'GET',
        success:function(){
                var laDate = new Date();
                var h = laDate.getHours() + ":" + laDate.getMinutes() + ":" + laDate.getSeconds();
                $('#status').fadeIn('slow');
                $('#time').text(h).fadeIn('slow');
                setTimeout(function(){ 
                    $('#status').fadeOut('slow');  
                    $('#time').fadeOut('slow');
                },3000);
           }
    });
}

function rechercheDonneesBdd() {
    $.ajax({
        url : 'rechercheDonnees.php',
        type : 'GET',
	success:function() {
	}
    });

}
