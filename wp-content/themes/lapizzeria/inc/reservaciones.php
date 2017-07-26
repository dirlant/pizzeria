<?php

function lapizzeria_guardar(){
  if (isset($_POST['enviar'])):
    echo 'Hola!!';
  endif;
}

add_action( 'init', 'lapizzeria_guardar' );

?>
