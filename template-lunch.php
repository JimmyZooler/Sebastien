<?php
/*
Template Name: Lunch Page
*/
?>

<?php get_header(); ?>

        <div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
			    <section class="white-box lunch-page-section">
                        
                                <div class="row">
                                    <h2 class="section-header"><img src="http://localhost/sebastien/wordpress/wp-content/uploads/2016/04/nexa_header_leaves_left-1.jpg" max-width="80%"><?php the_field('lunch_page_header')?><img src="http://localhost/sebastien/wordpress/wp-content/uploads/2016/04/nexa_header_leaves_right-1.jpg" max-width="80%"></h2>
                                    <h3 class="sub-header"><?php the_field('lunch_page_header_2')?></h3>
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
                                <div class="row orange-bar text-center">
                                    <h5>Please advise you server of any food allergies.</h5>
                                    <div class="columns medium-offset-2 medium-4 text-center">
                                        <img src="http://localhost/sebastien/wordpress/wp-content/uploads/2016/04/gluten_free-1.jpg">
                                        <h5>Gluten-free options available.</h5>
                                    </div>
                                    <div class="columns medium-4 text-center">
                                        <img src="http://localhost/sebastien/wordpress/wp-content/uploads/2016/04/apple-1.jpg">
                                        <h5>Vegetarian/Vegan options available.</h5>
                                    </div>
                                    <div class="column"></div>
                                </div>
                                <div class="row hours-location text-center">
                                    <div class="columns medium-6">
                                        <h2 class="lunch-header ">Hours of Operation</h2>
                                        <h3 class="no-margin-bottom lunch-hours">11:00am - 4:00pm</h3>
                                        <h4>Closed Wednesdays</h4>
                                        <p></p>
                                        <h3 class="lunch-header  lunch-info">Reservations and Info</h3>
                                        <h3 class="no-margin-bottom lunch-hours">613.393.5802</h3>
                                        <h5>sebastienschwabcuisine@gmail.com</h5>
                                        <p class="lunch-hours">We ask that groups of 10 or more contact us in advance to reserver a table.</p>
                                        
                                    </div>
                                    <div class="columns medium-6 lunch-location">
                                        <h2 class="lunch-header">Location</h2>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2869.323005622836!2d-77.29101268449051!3d44.014719279110544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d635a34501720b%3A0x9ed9ec4acc8702dd!2s2274+Prince+Edward+County+Rd+1%2C+Prince+Edward%2C+ON+K0K+1G0!5e0!3m2!1sen!2sca!4v1461089580602" width="100%" height="300px" frameborder="0" style="border: 3px solid #f37021" allowfullscreen></iframe>
                                        <p class="lunch-hours">2274 County Rd.1 (P.O. Box 300)<br>Bloomfield, ON K0K 1G0</p>
                                    </div>
                                </div>
                                
                            </section>

                    </main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>


