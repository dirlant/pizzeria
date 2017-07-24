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

    <div class="informacion-cajas contenedor">

      <pre><?php echo get_field('color1') ?></pre>

      <div class="cajas">
        <?php
         $id_imagen  = get_field('imagen');
         $imagen = wp_get_attachment_image_src( $id_imagen, $size = 'nosotros' )
        ?>

        <img src="<?php echo $imagen[0] ?>" class="caja-imagen">

        <div class="contenido-caja" style="background-color: <?php echo get_field('color1') ?>">
          <?php the_field('descripcion') ?>
        </div>
      </div>


      <div class="cajas">
        <div class="contenido-caja" style="background-color: <?php echo get_field('color1') ?>">
          <?php the_field('descripcion2') ?>
        </div>

        <?php
         $id_imagen  = get_field('imagen2');
         $imagen = wp_get_attachment_image_src( $id_imagen, $size = 'nosotros' )
        ?>

        <img src="<?php echo $imagen[0] ?>" class="caja-imagen">
      </div>


      <div class="cajas">
        <?php
         $id_imagen  = get_field('imagen3');
         $imagen = wp_get_attachment_image_src( $id_imagen, $size = 'nosotros' )
        ?>

        <img src="<?php echo $imagen[0] ?>" class="caja-imagen">

        <div class="contenido-caja" style="background-color: <?php echo get_field('color1') ?>">
          <?php the_field('descripcion3') ?>
        </div>
      </div>



    </div>

  <?php endwhile; ?>

<?php get_footer() ?>
