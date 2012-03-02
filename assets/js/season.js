$(function(){
  $("a.fancypop").fancybox();
  
  $('.look-slides').slides({
    preload: true,
    preloadImage: '/assets/img/slides/loading.gif',
    play: 5000,
    pause: 2500,
    hoverPause: true
  });
  
});