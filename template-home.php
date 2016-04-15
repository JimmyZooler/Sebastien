<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
			
	<div id="content">
            
            <div class="hero-slider">
                <ul>
                    <li class="slider-image" style=" background-image: url('<?php the_field('slider_image_1')?>'); "></li>
                    <li class="slider-image" style=" background-image: url('<?php the_field('slider_image_2')?>'); "></li>
                    <li class="slider-image" style=" background-image: url('<?php the_field('slider_image_3')?>'); "></li>
                </ul>
            </div>
            
            <div id="inner-content" class="row">

                <main id="main" class="large-12 medium-12 columns" role="main">
                    <section class="three-locations">
                        <h3 id="main-header">One Great Chef - Three Locations</h3>
                        <div class="row">
                            <div class="columns medium-4">
                                <div class="location">
                                    <a href="#"><img src="http://localhost/sebastien/wordpress/wp-content/uploads/2016/04/layer-7.jpg" width="100%"><div class="orange-overlay"><h2 class="location-heading-1">Huff Estates</h2></div></a>
                                </div>
                            </div>
                            <div class="columns medium-4">
                                <div class="location">
                                    <a href="#"><img src="http://localhost/sebastien/wordpress/wp-content/uploads/2016/04/Your_event.jpg" width="100%"><div class="orange-overlay"><h2 class="location-heading-1">Your Event</h2></div></a>
                                </div>
                            </div>
                            <div class="columns medium-4">
                                <div class="location" >
                                    <a href="#"><img src="http://localhost/sebastien/wordpress/wp-content/uploads/2016/04/BandB.jpg" width="100%"><div class="orange-overlay"><h2 class="location-heading">The Mystic Dandelion</h2></div></a>
                                </div>
                            </div>
                        </div>
                    </section>
                </main> <!-- end #main -->

            </div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
