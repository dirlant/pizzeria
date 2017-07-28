<div class="wrap">
  <h1>Reservaciones</h1>

  <table class="wp-list-table widefat striped">
    <thead>
      <tr>
        <th class="manage-column">ID</th>
        <th class="manage-column">Nombre</th>
        <th class="manage-column">Fecha de Reserva</th>
        <th class="manage-column">Correo</th>
        <th class="manage-column">Telefono</th>
        <th class="manage-column">Mensaje</th>

      </tr>
    </thead>
    <tbody>
      <?php
        global $wpdb;
        $reservaciones  = $wpdb->prefix . 'reservaciones';
        $query = $wpdb->get_results("SELECT * FROM $reservaciones");
      ?>

      <pre><?php print_r($query) ?></pre>
    </tbody>

  </table>

</div>
