$(function () {
    var header = document.getElementById('header');
    var headroom = new Headroom(header);

    headroom.init();

    //Menu responsive
    //calculando el ancho de la pagina
    /*  var ancho = $(window).width(),
        enlaces = $('#enlaces'),
        btnMenu = $('#btn-menu'),
        icono = $('#btn-menu .icono');

    if (ancho < 992) {
        enlaces.hide();
        icono.addClass('fas fa-bars');
    }

    btnMenu.on('click', function (e) {
        enlaces.slideToggle();
        icono.toggleClass('fa-bars');
        icono.toggleClass('fa-times'); 
    });

   $(window).on('resize',function(){
        if($(this).width()<992){
            enlaces.show();
            icono.addClass('fa-times');
            icono.removeClass('fa-bars');
        }else{
            enlaces.hide();
            icono.addClass('fa-bars');
            icono.addClass('fa-times');
        }
    }); */
});



