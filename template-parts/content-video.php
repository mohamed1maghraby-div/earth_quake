<?php 
/*
@pakeage quake-theme
-- Video Post Format
*/
?>
<div class="clearfix"></div> 
<article id="post-<?php the_ID(); ?>" <?php post_class('quake-format-video'); ?>>
    
     <header class="entry-header">
         <div class="embed-responsive embed-responsive-16by9">
                <?php echo quake_get_emdedded_media( array('video', 'iframe') ); ?>
         </div>
            <?php the_title('<h1 class="entry-title"><a href="'.esc_url( get_permalink() ).'" rel="bookmark">', '</a></h1>'); ?>
         <div class="entry-meta">
                <?php echo quake_posted_meta(); ?>
            </div>  
        </header>
    
        <?php if( quake_get_attachment() ): ?>
    
    <a class="standard-featured-link" href="<?php the_permalink(); ?>">
        <div class="">
                <img class="img-responsive" src="<?php echo quake_get_attachment(); ?>" />
            </div>
    </a>
        <?php endif; ?>
    
        <div class="col-lg-8 the_content">
            <div class="entry-excerpt">
                <?php the_excerpt(); ?>
            </div>
            <footer class="entry-footer">
                <?php echo quake_posted_footer(); ?>
            </footer>
            <div class="button-container">
                <a href="<?php the_permalink(); ?>"><?php _e('Read More'); ?></a>
            </div>  
        </div>
</article>
<div class="clearfix"></div> 