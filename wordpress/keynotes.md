# Create widget in footer
### functions.php
```
function ny_widget() { 
    register_sidebar( array(
        'name'          => 'Footer widget 1',
        'id'            => 'footer-widget-1',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
    ) ); 
}
add_action( 'widgets_init', 'ny_widget' );
```
### footer.php
```
if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
    <div id="footer-widget-1" role="complementary">
    <?php dynamic_sidebar( 'footer-widget-1' ); ?>
    </div>     
<?php endif; ?>
```
