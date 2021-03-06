<?php
/*
* Template Name: Especialidades
*/
?>

<?php get_header() ?>

  <?php while (have_posts()): the_post(); ?>


    <div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url()   ?>)">
      <div class="contenido-hero">
        <div class="texto-hero">
          <?php the_title( $before = '<h1>', $after = '</h1>', $echo = true ) ?>
        </div>
      </div>
    </div>

  <?php endwhile; ?>


  <div class="nuestras-especialidades contenedor">
    <h3 class="texto-rojo">Pizzas</h3>

    <div class="contenedor-grid">
      <?php
        $args = array(
          'post_type' => 'pizzas',
          'posts_per_page' => -1,
          'order_by' => 'title',
          'order' => 'ASC',
          'category_name' => 'pizzas'
        );
        $pizzas = new WP_Query($args);
      ?>

      <?php while($pizzas->have_posts()): $pizzas->the_post(); ?>

        <div class="columnas1-3">
          <?php the_post_thumbnail( $size = 'especialidades' ) ?>

          <div class="texto-especialidad">
            <h4><?php the_title(); ?> <span>$<?php the_field('precio') ?></span></h4>
            <?php the_content(); ?>
          </div>
        </div>

      <?php endwhile; wp_reset_postdata(); ?>

    </div>

    <div class="nuestras-especialidades contenedor">
      <h3 class="texto-rojo">Otros</h3>

      <div class="contenedor-grid">
        <?php
          $args = array(
            'post_type' => 'pizzas',
            'posts_per_page' => -1,
            'order_by' => 'title',
            'order' => 'ASC',
            'category_name' => 'otros'
          );
          $otros = new WP_Query($args);
        ?>

        <?php while($otros->have_posts()): $otros->the_post(); ?>

          <div class="columnas1-3">
            <?php the_post_thumbnail( $size = 'especialidades' ) ?>

            <div class="texto-especialidad">
              <h4><?php the_title(); ?> <span>$<?php the_field('precio') ?></span></h4>
              <?php the_content(); ?>
            </div>
          </div>

        <?php endwhile; wp_reset_postdata(); ?>

      </div>

<?php get_footer() ?>
