<?php 
/*
@pakeage quake-theme
-- Link Post Format
*/
?>
<div class="clearfix"></div> 
<article id="post-<?php the_ID(); ?>" <?php post_class('quake-format-link'); ?>>
    
    <header class="entry-header">
        <?php 
        $link = quake_grab_url();
        the_title('<h1 class="entry-title"><a href=" ' . $link . ' " target="_blank">', '<div class="link-icon"><span class="glyphicon glyphicon-link"></span></div></a></h1>'); 
        ?>
            <div class="entry-meta">
                <?php echo quake_posted_meta(); ?>
            </div>     
    </header>
      
</article>
<div class="clearfix"></div> 