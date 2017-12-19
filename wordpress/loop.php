<!--SHOW DIFFERENT CONTENT ON DIFFERENT PAGES-->
<!--The page content -->
<?php 
  if(have_posts()){                                                
    while (have_posts()){                                               
    the_post();                                                             
    the_content();                                                         
    }
  }
?>
<!--The post content, only categories with same name as page title-->
<!--For tags use "tag"=.get_the_title.... instead-->
<?php $txt = "category_name=".get_the_title($post)."&posts_per_page=10"; ?> <!--String defines which post category-->
  <?php query_posts($txt); ?>                                               <!--Publish post content-->
  <?php while(have_posts()):the_post(); ?>                                 
    <h1><?php the_title(); ?></h1>                                          <!--Print post title-->
    <?php the_content(); ?>                                                 <!--Print post content-->
  <?php endwhile; ?>                                                      
