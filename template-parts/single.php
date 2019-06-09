<?php 
/*
@pakeage quake-theme
-- Single Post Template
*/
$options=get_option('theme_options');
?>
                <div class="container-fluid">
    <div class="row">
    <div class="page_1" style="background: url(<?php if( quake_get_attachment() ): ?><?php echo quake_get_attachment(); ?><?php else: echo $options['page1_background_source']; endif; ?>) repeat fixed; background-size: cover;">
    <div class="page_1_conatiner"><?php if($options['show_name_of_the_post_in_page1'] == 1){ the_title('<h1 class="entry-title">', '</h1>');}else{echo '<h1 class="entry-title">' .$options['Show_Title_of_blog'].'</h1>';} ?></div>
        </div>
    </div>
    </div>
<div class="container-fluid">
    <div class="row">
    <div class="main_page">
        <div class="main_page_color">
        <div class="main_page_contant col-lg-9">
                <div class="clearfix"></div>
            <div class="quake-posts-container">
            <article id="post-<?php the_ID(); ?>" <?php post_class('quake_single_page'); ?>>
                 <header class="entry-header">
                     <?php if($options['show_name_of_the_post_in_single_page'] == 1){ 
    the_title('<h1 class="entry-title">', '</h1>');}else{} ?>
                     <div class="entry-meta" style="float:none;">
                        <?php echo quake_posted_meta(); ?>
                     </div>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <footer class="entry-footer">
                    <?php echo quake_posted_footer(); ?>
                </footer>
            </article>