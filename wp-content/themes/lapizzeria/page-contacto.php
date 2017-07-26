<?php get_header() ?>

  <?php while (have_posts()): the_post(); ?>


    <div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url()   ?>)">
      <div class="contenido-hero">
        <div class="texto-hero">
          <?php the_title( $before = '<h1>', $after = '</h1>', $echo = true ) ?>
        </div>
      </div>
    </div>



    <div class="principal contenedor contacto">
      <main class="texto-centrado contenido-paginas">


        <form class="reserva-contacto" method="post">
          <h2>Realiza una reservación</h2>

          <div class="campo">
            <input type="text" name="nombre" placeholder="Nombre">
          </div>
          <div class="campo">
            <input type="datetime-local" name="fecha" placeholder="Fecha">
          </div>
          <div class="campo">
            <input type="email" name="correo" placeholder="Correo">
          </div>
          <div class="campo">
            <input type="telf" name="telefono" placeholder="Telefono">
          </div>
          <div class="campo">
            <textarea name="mensaje" rows="8" cols="80" placeholder="Mensaje"></textarea>
          </div>

          <input type="submit" name="enviar" class="button">
        </form>
      </main>
    </div>

  <?php endwhile; ?>

<?php get_footer() ?>
