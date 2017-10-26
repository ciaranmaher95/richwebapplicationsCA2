/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function filter(element) {
        var value = $(element).val();

        $("p").each(function() {
            if ($(this).text().search(value) > -1) {
                $(this).show();
                $('hr').show();
                
            }
            else {
                $(this).hide();
                $('hr').hide();
               
            }
        });
    }