#Post-loop by category
<?php query_posts( 'category_name=CATEGORY-HERE&posts_per_page=10' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <h1><?php the_title(); ?></h1>
  <?php the_content(); ?>
<?php endwhile; ?>
