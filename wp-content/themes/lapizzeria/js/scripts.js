$ = jQuery.noConflict();

$(document).ready(function(){

  // Ocultar y mostrar menu
  $('.mobile-menu a').on('click', function(event) {
    $('nav.menu-sitio').toggle('slow');

  });


  // Reaccionar a la dimensión de pantalla
  $(window).resize(function() {
    console.log($(document).width())
    if ($(window).width() >= 768 ){
      $('nav.menu-sitio').show();
    } else {
      $('nav.menu-sitio').hide();
    }
  });


  // Ajustar cajas segun tamaño de la imagen
  ajustarCajas();

})

function ajustarCajas(){
  var imagenes = $('.caja-imagen');
  if(imagenes.length > 0){
    var altura = imagenes[0].height();
    var cajas = $('div.contenido-caja');
    $(cajas).each(function(index, el) {
      $(el).css('height', altura +'px');
    });
  }
}
