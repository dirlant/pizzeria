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
  <div class="contenedor">
    <h3 class="texto-centrado"> Comentarios </h3>
    <ul class="lista-comentarios">
      <?php
        $comentarios =  get_comments( array(
          'post_id' => $post->ID,
          'status' => 'approve'
        ));

        wp_list_comments( $args = array(
          'per_page' => 10,
          'reverse_top_level' => false,
        ), $comentarios);
      ?>
    </ul>

  </div>

<?php get_footer() ?>
