<?php
/*
Template Name: Lunch Page
*/
?>

<?php get_header(); ?>

        <div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
			    <section class="white-box about-page-section">
                        
                                <div class="row">
                                    <h2 class="section-header"><img src="http://localhost/sebastien/wordpress/wp-content/uploads/2016/04/nexa_header_leaves_left-1.jpg" max-width="80%"><?php the_field('lunch_page_header')?><img src="http://localhost/sebastien/wordpress/wp-content/uploads/2016/04/nexa_header_leaves_right-1.jpg" max-width="80%"></h2>
                                    <h3 id="about-page-quote"><?php the_field('lunch_page_header_2')?></h3>
                                    <div id="lunch-image">
                                        <div class="overlay"></div>
                                        <h4><?php the_field('lunch_image_text')?></h4>
                                    </div>
                                </div>
                                <div class="row lunch-menu">
                                    <div class="columns small-12 medium-6">
                                        <?php the_field('lunch_item_1')?>
                                        <?php the_field('lunch_item_2')?>
                                        <?php the_field('lunch_item_3')?>
                                    </div>
                                    <div class="columns small-12 medium-6">
                                        <?php the_field('lunch_item_4')?>
                                        <?php the_field('lunch_item_5')?>
                                        <?php the_field('lunch_item_6')?>
                                    </div>
                                </div>
                                
                            </section>

                    </main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>


