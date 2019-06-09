<?php /*
@package quake-theme
*/
get_header(); ?>

<div class="container-fluid">
    <div class="row">
    <div class="page_1">
        <div class="page_1_conatiner"><h1>WORDPRESS_LAST</h1></div>
        </div>
    </div>
    </div>
<div class="container-fluid">
    <div class="row">
    <div class="main_page">
        <div class="main_page_color">
        <div class="main_page_contant col-lg-9">
             <header class="archive-header text-center">
                    <?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
                </header>
                            <?php if(is_paged() ): ?>
                <div class="load_more load_more_top">
                    <div class="button-container container-load-previous">
                <a class="btn-quake-load quake-load-more" data-prev="1" data-archive="<?php echo quake_grab_current_uri(); ?>" data-page="<?php echo quake_check_paged(1); ?>"  data-url="<?php echo admin_url('admin-ajax.php'); ?>">
                    <span class="quake-icon fa fa-refresh"></span>
                    <span class="text">Load previous</span></a>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="clearfix"></div>
            <div class="quake-posts-container">

            <?php if( have_posts() ):
                echo'<div class="page-limit" data-page="'. $_SERVER["REQUEST_URI"] .'">';
                
                while( have_posts() ): the_post();
                    get_template_part('template-parts/content', get_post_format() );
                    endwhile;
                echo '</div>';
               /* else:
                    get_template_part('template-parts/content','none');*/
                endif;
            ?> 
            </div>
                <div class="clearfix"></div>
                <div class="load_more load_more_buttom">
                   <div class="button-container">
                        <a class="btn-quake-load quake-load-more" data-page="<?php echo quake_check_paged(1); ?>" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
                            <span class="quake-icon fa fa-refresh"></span>
                            <span class="text">Load More</span></a>
                        </div> 
                </div>
                <div class="clearfix"></div>
       </div>
            <div class="main_page_sidebar col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div class="quake_query_button">
					<button class="quake_query_button_main" >show / hide sidebar</button>
				</div>
                <div class="quake-sidebar">
                    <?php get_sidebar(); ?>
                </div>
            </div>
            
        </div>
    </div>
    </div>
<?php get_footer(); ?>