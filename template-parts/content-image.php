<?php 
/*
@pakeage quake-theme
-- Image Post Format
*/
?>
<div class="clearfix"></div> 
<article id="post-<?php the_ID(); ?>" <?php post_class('quake-format-image'); ?>>
      
    <header class="entry-header img_post img_gradiant col-lg-12" style="background: url(<?php echo quake_get_attachment(); ?>); height:340px;   background-size: cover;  padding-left: 0; padding-right: 0;">
        <?php the_title('<h1 class="entry-title entrytitlem"><a href="'.esc_url( get_permalink() ).'" rel="bookmark">', '</a></h1>'); ?>
            <div class="clearfix"></div>
       <div class="entry-meta entrymetamargin">
         <?php echo quake_posted_meta(); ?>
        </div> 
            <div class="clearfix"></div>
        <div class="entry-excerpt col-lg-12 black_gradiant">
        <?php the_excerpt(); ?>
        </div>
    </header>
            
    <footer class="entry-footer">
        <?php echo quake_posted_footer(); ?>
    </footer>        
        
</article>
<div class="clearfix"></div> 