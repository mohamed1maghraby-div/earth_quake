<?php /*
@package quake-theme
*/
get_header();  $options=get_option('theme_options');  $show_html=get_option('quake_html');?>
<div class="container-fluid">
    <div class="row">
    <div class="page_1">
        <div class="page_1_conatiner"><h1><?php echo $options['Show_Title_of_blog']; ?></h1></div>
        </div>
    </div>
    </div>
<div class="container-fluid">
    <div class="row">
    <div class="main_page">
        <div class="main_page_color">
        <div class="main_page_contant <?php if($options['404_sidebar'] == '1'){ echo 'col-lg-9'; }else{ echo 'col-lg-12';} ?> ">
            <div class="quake-posts-container">
                    <div class="page_404">
                        <h1><?php echo $options['404_h1']; ?></h1>
                        <h3><?php echo $options['404_h3']; ?></h3>
                        <p><?php echo $options['404_p']; ?></p>
                    </div>
                </div>
            </div>
            <?php if($options['404_sidebar'] == '1'){ ?>
            <div class="main_page_sidebar col-lg-3">
                <div class="quake-sidebar">
                    <?php get_sidebar(); ?>
                </div>
            </div>
            <?php } ?>
    </div>
    </div>
<?php get_footer(); ?>