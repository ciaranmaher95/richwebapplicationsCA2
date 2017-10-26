/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




var url = 'http://landmarks.000webhostapp.com/getUserDetails.php';
$.getJSON(url, function (members) {

    for (var i = 0; i < members.length; i++)
    {


        $('.name').append("<p><a href='userprofile.html?memID="+members[i].memID+"' id='user'>" + members[i].username + "</a></p><br>");

//        $('.name').append("<form id='idform'><input type='hidden' name='memID' id='memID' value='" + members[i].memID + "'>\n\
//                                    <input type='submit' id='submit' name='submit' value='submit'><br></form>");
        $('.name').append("<hr class='section-divider'>");
        
          

     }

});

//    var $form = $('#idform');
//
//    $('.name').on('click','#submit',function (e) {
//
//        e.preventDefault();
//   
//        var id = {
//            id: document.forms['#memID']
//            
//        };
//        
//        alert(id.id); 
//        
//    });


//           
//            $.ajax({
//                url:"http://landmarks.000webhostapp.com/userImages.php",
//                data: $form.serialize(),
//                type: 'POST',
//                success: function(){
//                     alert('success');
//            
//                },
//                error:function(){
//                   alert('error');
//                 window.location = 'userprofile.html';
//                }
//               
//                
//            });

   

        