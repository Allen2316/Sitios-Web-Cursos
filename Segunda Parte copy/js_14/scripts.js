
// Ajax

$(function(){
    'use strict';
    
    
    $(".nuestros-servicios div:first").show();
    $(".servicios nav a:first").addClass("activo");

    $(".servicios nav a").on("click", mostrarTabs);

    function mostrarTabs() {
        $(".servicios nav a").removeClass("activo");
        $(this).addClass("activo");
        var enlace = $(this).attr("href");
        $(".nuestros-servicios div").fadeOut();        
        $(enlace).fadeIn();
        return false;
    }

  /* var proximosViajes = ['Londres', 'Valencia', 'Madrid', 'Paris', 'Milan'];
    
    console.log(proximosViajes);
    
    
    $.each(proximosViajes, function(i, v) {
        if(i==0){
            $('aside').append('<h2>Próximos Viajes</h2>');
        }
        $('aside').append('<li>'+ v + '</li>'); 
    });
    
    
    var viajesPorFecha= {
        primero: 'Londres',
        segundo: 'Valencia',
        tercero: 'Madrid',
        cuarto: 'Paris',
        quinto: 'Milan'
    };
    console.log(viajesPorFecha);
    
    $.each(viajesPorFecha, function(i, v) {
       $('aside').append('<li>'+ i + ' - '+ v + '</li>'); 
    }); */
    
  
    
});