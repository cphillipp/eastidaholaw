$(document).ready(function() {
  $(function(){
    $('#slides').slides({
      preload: true,
      preloadImage: '../images/loading.gif',
      play: 5000,
      pause: 2500,
      hoverPause: true,
      animationStart: function(current){
        $('.caption').animate({
          bottom:-35
        },100);
        if (window.console && console.log) {
          // example return of current slide number
          console.log('animationStart on slide: ', current);
        };
      },
      animationComplete: function(current){
        $('.caption').animate({
          bottom:0
        },200);
        if (window.console && console.log) {
          // example return of current slide number
          console.log('animationComplete on slide: ', current);
        };
      },
      slidesLoaded: function() {
        $('.caption').animate({
          bottom:0
        },200);
      }
    });
  });

  $(".firm-toggle .firm").click(function() {
    $(".firm-toggle li").removeClass("active");
    $(".right section").removeClass("active");
    $(this).addClass("active");
    $(".right .firm").addClass("active");
  });
  $(".firm-toggle .history").click(function() {
    $(".firm-toggle li").removeClass("active");
    $(".right section").removeClass("active");
    $(this).addClass("active");
    $(".right .history").addClass("active");
  });
  $(".firm-toggle .credo").click(function() {
    $(".firm-toggle li").removeClass("active");
    $(".right section").removeClass("active");
    $(this).addClass("active");
    $(".right .credo").addClass("active");
  });
  $(".firm-toggle .diversity").click(function() {
    $(".firm-toggle li").removeClass("active");
    $(".right section").removeClass("active");
    $(this).addClass("active");
    $(".right .diversity").addClass("active");
  });
  $(".firm-toggle .community").click(function() {
    $(".firm-toggle li").removeClass("active");
    $(".right section").removeClass("active");
    $(this).addClass("active");
    $(".right .community").addClass("active");
  });
  $(".firm-toggle .recognition").click(function() {
    $(".firm-toggle li").removeClass("active");
    $(".right section").removeClass("active");
    $(this).addClass("active");
    $(".right .recognition").addClass("active");
  });
});