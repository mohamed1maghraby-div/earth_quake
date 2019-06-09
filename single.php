<?php /*
@package quake-theme
*/
get_header(); ?>

<!--<div class="container-fluid">
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

                <div class="clearfix"></div>
            <div class="quake-posts-container">-->

            <?php if( have_posts() ): 

                while( have_posts() ): the_post();
                
                    quake_save_post_views( get_the_ID() );
                        
           get_template_part('template-parts/single' );
                
                    echo quake_post_navigation();
                
                    if( comments_open() ):
                    comments_template();
                
                endif;
                    endwhile;

                endif;
                
            ?> 
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