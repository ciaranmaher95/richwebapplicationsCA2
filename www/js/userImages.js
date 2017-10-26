/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {

    var url = window.location.href;
    var memID = url.toString().split("=")[1];

    $.ajax({
        url: "http://landmarks.000webhostapp.com/userImages.php",
        data: {'memID': memID},
        dataType: 'json',
        type: 'POST',
        success: function (data)
        {
             var idarray = [];
             var appendarray = [];
            
            for (var i = 0; i < data.length; i++)
            {
                idarray.push(data[i].image);
                appendarray.push($('.image').length + i - 1);
               
               $('.image').append('<img id="userimages" src="data:image/jpeg;base64,' + data[i].image + ' " width="300" height="300"/>'+
                       '<a href="map.html?lat='+data[i].lat+'&lng='+data[i].lng+'&title='+data[i].title+'&desc='+data[i].description+'&index='+appendarray[i]+'" id="loc">View Location</a>'+
                      "<hr class='section-divider'>" );
//               $('.map').append('<a href="map.html?lat='+data[i].lat+'&lng='+data[i].lng+'&title='+data[i].title+'&desc='+data[i].description+'&index='+appendarray[i]+'" id="loc">View Location</a>');

            }
             window.localStorage.setItem('imageData',idarray);
             window.localStorage.setItem('index',appendarray);
             console.log(appendarray);
             
        },
        error: function ()
        {
            alert("error");
        }

    });
    
           
 });  