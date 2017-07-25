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
      <div class="contenedor-grid">
        <main class="columnas2-3 contenido-paginas">
          <?php while (have_posts()): the_post(); ?>

            <article class="entrada-blog">
              <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail( $size = 'espacialidades' )?>
              </a>
              <header class="informacion-entrada clear">
                <div class="fecha">
                  <time>
                    <?php echo the_time( $d = 'd' ) ?>
                    <span> <?php the_time( $d = 'M' ) ?></span>
                  </time>

                </div>
                <div class="titulo-entrada">
                  <h2><?php the_title() ?></h2>
                  <p class="autor">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <?php the_author() ?>
                  </p>

                </div>

              </header>
              <div class="contenido-entrada">
                <?php the_excerpt() ?>
                <a href="<?php the_permalink() ?>" class="button rojo"> Leer mas</a>

              </div>
            </article>

          <?php endwhile; ?>
        </main>
        <main class="columnas1-3">
          <?php get_sidebar( 'blog_sidebar' ) ?>
        </main>

      </div>
    </div>

<?php get_footer() ?>
