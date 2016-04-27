<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

    <div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
                        <section class="white-box about-page-section">
                            <h2 class="section-header"><img src="<?php echo get_template_directory_uri(); ?>/images/nexa_header_leaves_left.jpg" max-width="80%">Meet Chef Sebastien Schwab<img src="<?php echo get_template_directory_uri(); ?>/images/nexa_header_leaves_right.jpg" max-width="80%"></h2>
                            <h4 id="about-page-quote"><?php the_field('about_page_quote')?></h4>
                            <div class="row about-page-content">
                                <div class="columns small-12 medium-5 text-center">
                                    <img src="<?php the_field('about_page_image')?>" max-width="100%" >
                                </div>
                                <div class="columns small-12 medium-7 text-left">
                                    <p ><?php the_field('about_page_paragraph')?></p>
                                </div>                          
                            </div>
                            <div id="video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/BR1KrmECv_c" frameborder="0" allowfullscreen></iframe>  
                            </div>
                        </section>
                                
                    </main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
    </div> <!-- end #content -->

<?php get_footer(); ?>
