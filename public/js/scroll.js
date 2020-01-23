$(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 350) {
      $('#menu').addClass('menu_fixed animated fadeInDown shadow-1 bg-light navbar-light py-0 mt-0').removeClass(' py-4 navbar-dark');
      
    } else {
      $('#menu').removeClass('menu_fixed animated fadeInDown shadow-1 bg-light navbar-light py-0 ').addClass(' py-0 navbar-dark');
     
    }
  });