<?php /*

@package quake-theme

*/
if( ! is_active_sidebar('quake-sidebar') ){
    return;
}
?>
<aside id="secondary" class="widget_area" rol="complementary">
    <?php dynamic_sidebar( 'quake-sidebar' ); ?>
</aside>