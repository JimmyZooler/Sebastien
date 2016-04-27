<?php
/*
Template Name: B&B Page
*/
?>

<?php get_header(); ?>

<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
			    <section class="white-box mystic-page">
                        
                                <h2 class="section-header catering-header"><img src="<?php echo get_template_directory_uri(); ?>/images/nexa_header_leaves_left.jpg" max-width="80%">The Mystic Dandelion<img src="<?php echo get_template_directory_uri(); ?>/images/nexa_header_leaves_right.jpg" max-width="80%"></h2>
                                <h3 class="sub-header"><?php the_field('mystic_sub_header')?></h3>
                                <div class="row mystic-section">
                                    <div class="columns medium-5 mystic-text">
                                        <p><?php the_field('mystic_section_1')?></p>
                                    </div>
                                    <div class="columns medium-7 mystic-image">
                                        <img src="<?php the_field('mystic_image_1')?>">
                                    </div>
                                </div>
                                <div class="row mystic-section">
                                    <div class="columns medium-5 mystic-text">
                                        <p><?php the_field('mystic_section_2')?></p>
                                    </div>
                                    <div class="columns medium-7 mystic-image">
                                        <img src="<?php the_field('mystic_image_2')?>">
                                    </div>
                                </div>
                                <div class="orange-bar text-center">
                                    <h2><?php the_field('mystic_orange_text')?></h2>
                                </div>
                                <div class="row mystic-rooms">
                                    <div class="columns medium-4 mystic-room">
                                        <h3>The Sorrel Suite</h3>
                                        <img src="<?php the_field('mystic_room_1')?>">
                                    </div>
                                    <div class="columns medium-4  mystic-room">
                                        <h3>The Burdoch Room</h3>
                                        <img src="<?php the_field('mystic_room_2')?>">
                                    </div>
                                    <div class="columns medium-4  mystic-room">
                                        <h3>The Milkweed Room</h3>
                                        <img src="<?php the_field('mystic_room_3')?>">
                                    </div>
                                </div>
                                
                               <div id="mystic-button" class="button-container">
                                    <a class="green-button" href="http://www.themysticdandelion.com/">Find out more information</a>
                                </div>
                                
                            </section>
											

                    </main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>


