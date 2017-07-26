<?php

function lapizzeria_database(){
  global $wpdb;
  global $lapizzeria_dbversion;
  $lapizzeria_dbversion = '0.1';

  $tabla = $wpdb->prefix . 'reservaciones';
  $charset_collate = $wpdb->get_charset_collate();

  $sql = "CREATE TABLE  $tabla (
                        id mediumint(9) NOT NULL AUTO_INCREMENT,
                        nombre varchar(50) NOT NULL,
                        fecha datetime NOT NULL,
                        correo varchar(50) DEFAULT '' NOT NULL,
                        telefono varchar(10) NOT NULL,
                        mensaje text NOT NULL,
                        PRIMARY KEY (id)
          ) $charset_collate; ";

  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

  dbdelta($sql);

  add_option( 'lapizzeria_version', $value = $lapizzeria_dbversion );

}

add_action( 'after_setup_theme', 'lapizzeria_database');

?>
