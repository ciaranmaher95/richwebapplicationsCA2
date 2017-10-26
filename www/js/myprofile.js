/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

    var memID = window.localStorage.getItem('memID');

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
               
              //  $('.title').append(data[i].title+"<span id='titlespan'></span>");
              //  $('.desc').append(data[i].description+"<span id='descspan'></span>");
               $('.image').append('<img src="data:image/jpeg;base64,' + data[i].image + ' " width="300" height="300" style="margin-left: 15px;"/>'+
                       '<a href="map.html?lat='+data[i].lat+'&lng='+data[i].lng+'&title='+data[i].title+'&desc='+data[i].description+'&index='+appendarray[i]+'" id="loc">View Location</a>'+
                       "<hr class='section-divider'>");
                //$('.location').append('<br>Lat: ' + data[i].lat + '<br>lng: ' + data[i].lng);
//               $('.map').append('<a href="map.html?lat='+data[i].lat+'&lng='+data[i].lng+'&title='+data[i].title+'&desc='+data[i].description+'&index='+appendarray[i]+'" id="loc">View Location</a><span id="mapspan"></span>');
            }
            
             window.localStorage.setItem('imageData',idarray);
             window.localStorage.setItem('index',appendarray);

        },
        error: function ()
        {
            alert("error");
        }

    });






});
      