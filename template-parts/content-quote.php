<?php 
/*
@pakeage quake-theme
-- Quote Post Format
*/
?>
<div class="clearfix"></div>
<article id="post-<?php the_ID(); ?>" <?php post_class('quake-format-quote'); ?>>
    
    <header class="entry-header">
        <div class="row">
            <div class="col-sm-10 col-md-8 sol-sm-offset-1 col-md-offset-2">
                <h1 class="quote-content"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo get_the_content(); ?></a></h1>
                    <?php the_title('<h2 class="quote-author">~', '~</h2>'); ?>
                </div>
            </div>
    </header>
     <footer class="entry-footer">
        <?php echo quake_posted_footer(); ?>
       </footer>

</article>
<div class="clearfix"></div>