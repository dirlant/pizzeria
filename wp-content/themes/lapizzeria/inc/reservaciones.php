<?php

function lapizzeria_guardar(){
  if (isset($_POST['enviar'])):
    $nombre= sanitize_text_field( $_POST['nombre']);
    $nombre= sanitize_text_field( $_POST['fecha']);
    $nombre= sanitize_text_field( $_POST['correo']);
    $nombre= sanitize_text_field( $_POST['telefono']);
    $nombre= sanitize_text_field( $_POST['mensaje']);
    echo $nombre;
  endif;
}

add_action( 'init', 'lapizzeria_guardar' );

?>
