//scroll animado a la posicion de un boton
$(function(){
  var suite = $(".titre-2").offset().top - $(".navbar").height();
   $(".lien4, .suite").click(function(e) {
    e.preventDefault();
    $('html,body').animate({scrollTop: suite}, 600);
   })
   $(".logo").click(function() {
    $("html, body").animate({ scrollTop : 0 },600);
   })
}); 