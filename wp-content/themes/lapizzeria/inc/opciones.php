<?php

function lapizzeria_ajustes(){
  add_menu_page( 'La Pizzeria', 'Configuracion', 'administrator', 'lapizzeria_ajustes', $function = 'lapizzeria_opciones', $icon_url = '', $position = 20 );
  add_submenu_page( 'lapizzeria_ajustes', 'Reservaciones', 'Reservsaciones', 'administrator', 'lapizzeria_reservaciones', $function = 'lapizzeria_reservaciones' );
}

add_action( 'admin_menu', 'lapizzeria_ajustes');

function lapizzeria_opciones(){

}

function lapizzeria_reservaciones(){

}
?>
