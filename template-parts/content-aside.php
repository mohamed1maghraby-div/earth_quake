<?php 
/*
@pakeage quake-theme
-- Aside Post Format
*/
?>
<div class="clearfix"></div>
<article id="post-<?php the_ID(); ?>" <?php post_class('quake-format-aside'); ?>>
    <div class="aside-container">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-2 text-center">
                <?php if( quake_get_attachment() ): ?>
                <div class="img_post ">
                    <img class="img-responsive aside-featured" src="<?php echo quake_get_attachment(); ?>" />
                    </div>
                <?php endif; ?>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-10">
                    <header class="entry-header">
                         <div class="entry-meta">
                             <?php echo quake_posted_meta(); ?>
                         </div>
                    </header>
                    
                    <div class="clearfix"></div>
                    
                    <div class="entry-content">
                        <div class="entry-excerpt">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
        </div>
        <div class="the_content">
            <footer class="entry-footer">
                <div class="row">
                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
                            <?php echo quake_posted_footer(); ?>
                        </div>
                    </div>
            </footer>
        </div>
    </div>
</article>
<div class="clearfix"></div>