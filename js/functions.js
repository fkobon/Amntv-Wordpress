
// remap jQuery to $
(function($){})(window.jQuery);


  ww = document.body.clientWidth;
//ajuster ww< pour determiner largeur faisant apparaitre le bitoniau
var adjustMenu = function() {
  if (ww < 1024) {
    $(".toggleMenu").css("display", "inline-block");
    if (!$(".toggleMenu").hasClass("active")) {
      $(".nav").hide();
    } else {
      $(".nav").show();
    }
    $(".nav li").unbind('mouseenter mouseleave');
    $(".nav li a.parent").unbind('click').bind('click', function(e) {
      // must be attached to anchor element to prevent bubbling
      e.preventDefault();
      $(this).parent("li").toggleClass("hover");
    });
  }
  else if (ww >= 1024) {
    $(".toggleMenu").css("display", "none");
    $(".nav").show();
    $(".nav li").removeClass("hover");
    $(".nav li a").unbind('click');
    $(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
      // must be attached to li so that mouseleave is not triggered when hover over submenu
      $(this).toggleClass('hover');
    });
  }
}

/* trigger when page is ready */
$(document).ready(function (){
$(".abx").hover(function(){
     $(this).children('.infossec').fadeIn(100);

    },function(){
      $(this).children('.infossec').fadeOut(100);
});
  $('ul#menu-navbar.nav li:first-child a').html('');
  $(".nav li a").each(function() {
      if ($(this).next().length > 0) {
        $(this).addClass("parent");
      };
    })
    $(".toggleMenu").click(function(e) {
      e.preventDefault();
      $(this).toggleClass("active");
      $(".nav").toggle();
    });
    adjustMenu();

  });
$(window).bind('resize orientationchange', function() {
  ww = document.body.clientWidth;
  adjustMenu();
});


/* optional triggers

$(window).load(function() {

});

$(window).resize(function() {

});

*/
