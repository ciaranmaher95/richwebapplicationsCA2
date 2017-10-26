
var $form = $('#loginform');
$form.submit( function(e) {
e.preventDefault();

    $.ajax({
        url:"http://landmarks.000webhostapp.com/validation.php",
        data: $form.serialize(),
        type: 'POST',
        success: function(data)
        {
            
            var memID = data[1];
            window.localStorage.setItem("memID", memID);
           
           if(memID !== null)
           {
              
               window.location = "form.html";
                
           }
           else
           {
              
               
           }
              
           
        },
     error: function()
     {
          alert("Incorrect Username or Password"); 
          window.location = "login.html";
         
     }
    });
      
        
      
});


