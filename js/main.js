$(function () {
    var header = document.getElementById('header');
    var headroom = new Headroom(header);

    headroom.init();

    //Menu responsive
    //calculando el ancho de la pagina
      var ancho = $(window).width(),
        enlaces = $('#enlaces'),
        btnMenu = $('#btn-menu'),
        icono = $('#btn-menu .icono');

    if (ancho < 1024) {
        enlaces.hide();
        icono.addClass('fas fa-bars');
    }

    btnMenu.on('click', function (e) {
        icono.removeClass('fa-bars');
        icono.addClass('fa-times'); 
        enlaces.slideToggle();
    });

   $(window).on('resize',function(){
        if($(this).width()>1024){
            enlaces.show();
            icono.addClass('fa-times');
            icono.removeClass('fa-bars');
        }else{
            enlaces.hide();
            icono.addClass('fa-bars');
            icono.removeClass('fa-times');
        }
    }); 
});



