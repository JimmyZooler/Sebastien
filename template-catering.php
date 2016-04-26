<?php
/*
Template Name: Catering Page
*/
?>

<?php get_header(); ?>

<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
                        <section class="white-box lunch-page-section">
                        
                            <h2 class="section-header catering-header"><img src="<?php echo home_url(); ?>/wp-content/themes/sebastien_schwab/images/nexa_header_leaves_left.jpg" max-width="80%"><?php the_field('catering_title')?><img src="<?php echo home_url(); ?>/wp-content/themes/sebastien_schwab/images/nexa_header_leaves_right.jpg" max-width="80%"></h2>
                            <h3 class="sub-header"><?php the_field('catering_sub_header')?></h3>
                            
                            <div class="catering-content">
                                <div class="row catering-section">
                                    <div id="catering-1" class="columns medium-4 catering-image">
                                        <div class="catering-event">
                                            <img src="<?php echo home_url(); ?>/wp-content/themes/sebastien_schwab/images/corporate_square.jpg">
                                            <div class="overlay">
                                                <div class="button-container">
                                                    <h3>Private & Corporate Events</h3>
                                                    <a class="green-button" href="#">Sample Menu</a>
                                                </div>
                                            </div>
                                        </div>
                     
                                    </div>
                                    <div class="columns medium-8">
                                        <p><?php the_field('catering_section_1')?></p>
                                    </div>
                                    
                                </div>
                                <div class="row catering-section">
                                    <div id="catering-2" class="columns medium-4 catering-image">
                                        <div class="catering-event">
                                            <img src="<?php echo home_url(); ?>/wp-content/themes/sebastien_schwab/images/wedding_square.jpg">
                                            <div class="overlay">
                                                <div class="button-container">
                                                    <h3>Memorable Weddings</h3>
                                                    <a class="green-button" href="#">Sample Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns medium-8">
                                        <p><?php the_field('catering_section_2')?></p>
                                    </div>
                                </div>
                                <div class="row catering-section">
                                    <div id="catering-3" class="columns medium-4 catering-image">
                                        <div class="catering-event">
                                            <img src="<?php echo home_url(); ?>/wp-content/themes/sebastien_schwab/images/intimate_square.jpg">
                                            <div class="overlay">
                                                <div class="button-container">
                                                    <h3>Intimate Dinners</h3>
                                                    <a class="green-button" href="#">Sample Menu</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns medium-8">
                                        <p><?php the_field('catering_section_3')?></p>
                                    </div>
                                </div>
                            </div>
                            <div id="catering-button" class="button-container">
                                <a class="green-button" href="#contact_form_pop">Tell us about your Event</a>
                            </div>
                            
                        </section>
                    </main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>

