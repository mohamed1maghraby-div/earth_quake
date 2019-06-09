<?php 
/*
@pakeage quake-theme
-- Standard Post Format
*/
?>
<div class="clearfix"></div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <div class="entry-content">
        <?php if( quake_get_attachment() ): ?>
        <a class="standard-featured-link" href="<?php the_permalink(); ?>">
        <div class="col-lg-4 img_post roto">
            <img class="img-responsive" src="<?php echo quake_get_attachment(); ?>" />
            </div>
        </a>
		<?php else: ?>
		<a class="standard-featured-link" href="<?php the_permalink(); ?>">
        <div class="col-lg-4 img_post roto">
            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/standered-image.png" />
            </div>
        </a>
        <?php endif; ?>
        <div class="col-lg-8 the_content">
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title standradleftpost"><a href="'.esc_url( get_permalink() ).'" rel="bookmark">', '</a></h1>'); ?>
            </header>

            <div class="entry-excerpt">
            <?php the_excerpt(); ?>
            </div>

            <footer class="entry-footer">
                <?php echo quake_posted_footer(); ?>
            </footer>

            <div class="button-container">
                <a href="<?php the_permalink(); ?>"><?php _e('Read More'); ?></a>
            </div>

            <div class="entry-meta">
                <?php echo quake_posted_meta(); ?>
            </div>   
        </div>
    </div>

</article>
<div class="clearfix"></div>