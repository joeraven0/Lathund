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

### 7. The famous loop now manipulated to show different posts on multiple pages
```
  <!--START - SHOW DIFFERENT CONTENT ON DIFFERENT PAGES CODE-->
<!--The page content -->
<?php 
  if(have_posts()){                                                
    while (have_posts()){                                               
    the_post();                                                             
    the_content();                                                         
    }
  }
?>
<!--The post content, only categories (slug) with same name as page slug name-->
<!--For tags use "tag"=.get_the_title.... instead-->
<?php $txt = "category_name=".$post->post_name; ?>     <!--String defines which post category-->
  <?php query_posts($txt); ?>                                               <!--Publish post content-->
  <?php while(have_posts()):the_post(); ?>                                 
    <h1><?php the_title(); ?></h1>                                          <!--Print post title-->
    <?php the_content(); ?>                                                 <!--Print post content-->
  <?php endwhile; ?>                                
<!--END-->
</div>
```
### 8. The nav menu created by pages
`<?php wp_list_pages( '&title_li=' ); ?>`
