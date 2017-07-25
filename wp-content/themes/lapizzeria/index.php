<?php get_header() ?>

  <?php

    $pagina_blog =  get_option( 'page_for_posts', $default = true );
    $img = get_post_thumbnail_id( $pagina_blog );
    $img = wp_get_attachment_image_src( $img, $size = 'full', $icon = false )

  ?>

  <div class="hero" style="background-image: url(<?php echo $img[0];   ?>)">
    <div class="contenido-hero">
      <div class="texto-hero">
        <?php get_the_title( $post = $pagina_blog ) ?>
        <?php the_title( $before = '<h1>', $after = '</h1>', $echo = true ) ?>
      </div>
    </div>
  </div>



    <div class="principal contenedor">
      <main class="texto-centrado contenido-paginas">
        <?php while (have_posts()): the_post(); ?>

          <article class="entrada-blog">
            <?php the_title(); ?>
          </article>

        <?php endwhile; ?>
      </main>
    </div>





<?php get_footer() ?>
