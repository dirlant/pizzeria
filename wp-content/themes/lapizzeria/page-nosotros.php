<?php get_header() ?>

  <?php while (have_posts()): the_post(); ?>


    <div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url()   ?>)">
      <div class="contenido-hero">
        <div class="texto-hero">
          <?php the_title( $before = '<h1>', $after = '</h1>', $echo = true ) ?>
        </div>
      </div>
    </div>



    <div class="principal contenedor">
      <main class="texto-centrado contenido-paginas">
        <?php the_content() ?>
      </main>
    </div>

    <h2>Este es el page-nosotros.php</h2>

  <?php endwhile; ?>

<?php get_footer() ?>
