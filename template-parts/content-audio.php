<?php 
/*
@pakeage quake-theme
-- Audio Post Format
*/
?>
<div class="clearfix"></div>
<article id="post-<?php the_ID(); ?>" <?php post_class('quake-format-audio'); ?>>
    
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title"><a href="'.esc_url( get_permalink() ).'" rel="bookmark">', '</a></h1>'); ?>
        </header>
    
    <div class="entry-meta">
        <?php echo quake_posted_meta(); ?>
       </div> 
    
    <div class="entry-content">
       <?php echo quake_get_emdedded_media( array('audio', 'iframe') ); ?>
        </div>
        

    <footer class="entry-footer">
        <?php echo quake_posted_footer(); ?>
        </footer>

</article>
<div class="clearfix"></div> 