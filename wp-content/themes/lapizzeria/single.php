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

  <?php endwhile; ?>

  <div class="contenedor comentarios">

    <?php comment_form() ?>

  </div>

<?php get_footer() ?>
