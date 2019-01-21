var msnry = new Masonry( '#container', {
	"itemSelector": ".item"
});


$(document).ready(function () {

  if ($(window).width() >= 640) {
  
      $('.item').hover(

      function () {
          $('.item').stop().fadeTo('fast', 0.3);
          $(this).stop().fadeTo('fast', 1);
      },
      function () {
          $('.item').stop().fadeTo('fast', 1);
      });          
  
    }
  
});