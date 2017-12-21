### 1. Create style.css in main folder
### 2. Add to style.css
```
/*
Theme Name: Start WordPress
Author: Name of author
Description: Page converted to WP-theme
Version: 0.0.1
Tags: notags
*/
```

### 3. Stylesheet i header.php (or index.php)
`<link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/main.css" rel="stylesheet">`

### 4. Define header
```
<?php wp_head();?>
</head>
```

### 5. Define footer
```
</footer>
<?php wp_footer(); ?>
</body>
```

### 6. Define titlename (gets title from wordpress admin)
`<title><?php echo get_bloginfo( 'name' ); ?></title>`


##### Description, ie "Transport service in Copenhagen"
`<?php echo get_bloginfo( 'description' ); ?>`

### 7.
##### The famous loop now manipulated to show different posts on multiple pages
```
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php the_content(); ?>
  </div>
  <?php endwhile; ?>
  <div class="navigation">
    <div class="next-posts"><?php next_posts_link(); ?></div>
    <div class="prev-posts"><?php previous_posts_link(); ?></div>
  </div>
  <?php else : ?>
  <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <h1>Not Found</h1>
  </div>
  <?php endif; ?>
```
