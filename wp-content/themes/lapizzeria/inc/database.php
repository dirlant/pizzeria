<?php

function lapizzeria_database(){

  global $wpdb; // WPDB para trabajar con las tablas en wordpress
  global $lapizzeria_dbversion;
  $lapizzeria_dbversion = '0.2';
  $charset_collate = $wpdb->get_charset_collate();

  $tabla = $wpdb->prefix . 'reservaciones'; // Se obtiene el prefijo de las tablas

  // Creamos la estructura de la BD
  $sql = "CREATE TABLE $tabla (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            nombre varchar(50) NOT NULL,
            fecha datetime NOT NULL,
            correo varchar(50) DEFAULT '' NOT NULL,
            telefono varchar(10) NOT NULL,
            mensaje text NOT NULL,
            PRIMARY KEY (id)
          ) $charset_collate; ";

  // Se requiere esta libreria dbDelta para ejecutar el Query
  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
  dbDelta($sql);

  //Agregando la version de la BD
  add_option( 'lapizzeria_dbversion', $lapizzeria_dbversion );

  // Actualizacion de BD en caso de estar desactualizado

  if ($lapizzeria_dbversion != get_option( 'lapizzeria_dbversion')) {

    $tabla = $wpdb->prefix . 'reservaciones'; // Se obtiene el prefijo de las tablas

    // Se actualiza la version de la BD
    $sql = "CREATE TABLE $tabla (
              id mediumint(9) NOT NULL AUTO_INCREMENT,
              nombre varchar(50) NOT NULL,
              fecha datetime NOT NULL,
              correo varchar(50) DEFAULT '' NOT NULL,
              telefono varchar(10) NOT NULL,
              mensaje text NOT NULL,
              telefono2 varchar(10) NOT NULL,
              PRIMARY KEY (id)
            ) $charset_collate; ";

    // Se requiere esta libreria dbDelta para ejecutar el Query
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    // Actualizando la version de la BD
    update_option( 'lapizzeria_dbversion', $lapizzeria_dbversion );

  }

}

add_action( 'after_setup_theme', 'lapizzeria_database');


?>
