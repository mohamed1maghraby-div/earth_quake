<?php 
/*
@pakeage quake-theme
-- Gallery Post Format
*/
?>
<div class="clearfix"></div>
<article id="post-<?php the_ID(); ?>" <?php post_class('quake-format-gallery'); ?>>
        <?php if( quake_get_attachment() ): ?>
    <div class="entry-content ">

            <div id="post-gallery-<?php the_ID(); ?>" class="carousel slide quake-carousel-thumb" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <?php 
            $attachments = quake_get_bs_slides(quake_get_attachment(7) );
            foreach($attachments as $attachment):
        ?>
                <div class="item<?php echo $attachment['class']; ?> background-image standard-featured" style="background-image: url( <?php echo $attachment['url']; ?>); background-size:cover;">
                    <div class="hide next-image-preview" data-image="<?php echo $attachment['next_img']; ?>"></div>
                    <div class="hide prev-image-preview" data-image="<?php echo $attachment['prev_img']; ?>"></div> 
                    <div class="entry-excerpt image-caption black_gradiant">
                    <p><?php echo $attachment['caption']; ?></p>
                    </div>
                </div>
        <?php  endforeach; ?>
    </div>
    <a class="left carousel-control" href="#post-gallery-<?php the_ID(); ?>" role="button" data-slide="prev">
        <div class="table">
        <div class="table-cell">
           <div class="preview-container">
               <span class="thumbnail-container background-image"></span>
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">previous</span>
           </div>
             </div>
        </div>
    </a>
    <a class="right carousel-control" href="#post-gallery-<?php the_ID(); ?>" role="button" data-slide="next">
        <div class="table">
        <div class="table-cell">
            <div class="preview-container" style="right:0px;">
                <span class="thumbnail-container"></span>
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
                </div>
            </div>
        </div>
    </a>
            </div>
            <?php endif; ?>
            <div class="the_content">
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title"><a href="'.esc_url( get_permalink() ).'" rel="bookmark">', '</a></h1>'); ?>
                    </header>
                <div class="entry-meta col-lg-12">
                <p><?php echo quake_posted_meta(); ?></p>
                </div> 
                <footer class="entry-footer">
                    <?php echo quake_posted_footer(); ?>
                </footer>
            </div>
    </div>

</article>
<div class="clearfix"></div>