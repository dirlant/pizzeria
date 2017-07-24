<?php get_header() ?>

  <?php while (have_posts()): ?>

    <?php the_post(); ?>
    <?php the_post_thumbnail() ?>
    <?php the_title( $before = '<h1>', $after = '</h1>', $echo = true ) ?>

    <div class="principal contenedor">
      <main>
        <?php the_content() ?>
      </main>
    </div>

  <?php endwhile; ?>

<?php get_footer() ?>
