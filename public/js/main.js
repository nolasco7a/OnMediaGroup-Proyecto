/* Inicializar counter up, Counter Animado 
$('.counter').counterUp({
    delay: 50,
    time: 1500
})*/



$(document).ready(function() {
   /* $('.containerCarousel').carousel({
        num: 5,
        maxWidth: 450,
        maxHeight: 300,
        distance: 50,
        scale: 0.6,
        animationTime: 1000,
        showTime: 4000
    });*/
    $('#container2').carousel({
        num: 5,
        maxWidth: 600,
        maxHeight: 315,
        distance: 150,
        animationTime: 1000,
        showTime: 5000,
        autoPlay:true
    });
    $('#container3').carousel({
        num: 5,
        maxWidth: 210,
        maxHeight:150,
        distance:100,
        showTime: 5000,
        autoPlay:true
    });

    $('#container4').carousel({
        num: 5,
        maxWidth: 600,
        maxHeight: 315,
        distance: 150,
        animationTime: 1000,
        showTime: 5000,
        autoPlay:true
    });

    $('#container5').carousel({
        num: 5,
        maxWidth: 210,
        maxHeight:150,
        distance:100,
        showTime: 5000,
        autoPlay:true
    });

    $('#container6').carousel({
        num: 5,
        maxWidth: 350,
        maxHeight:390,
        distance:200,
        showTime: 5000,
        autoPlay:true
    });

    $('#container7').carousel({
        num: 5,
        maxWidth: 210,
        maxHeight:250,
        distance:100,
        showTime: 5000,
        autoPlay:true
    });


    
});