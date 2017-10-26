

var $form = $('#form');
$form.submit( function(e) {

e.preventDefault(); 

    $.ajax({
        url:"http://landmarks.000webhostapp.com/addmembers.php",
        data: $form.serialize(),
        type: 'POST',
        error: function()
        {
            window.location ='login.html'; 
        }
        
      });

});



 

   
