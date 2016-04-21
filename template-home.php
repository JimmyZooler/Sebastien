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
                    <section class="home-page-section white-box">
                        <h3 id="main-header">One Great Chef - Three Locations</h3>
                        <div class="row">
                            <div class="locations columns medium-4">
                                <div class="location">
                                    <a class="location-link" href="#"><img src="<?php echo home_url(); ?>/wp-content/themes/sebastien_schwab/images/layer-7.jpg" ><div class="orange-overlay"><h2 class="location-heading-1">Huff Estates</h2></div></a>
                                </div>
                            </div>
                            <div class="columns medium-4">
                                <div class="location">
                                    <a class="location-link" href="#"><img src="<?php echo home_url(); ?>/wp-content/themes/sebastien_schwab/images/Your_event.jpg" ><div class="orange-overlay"><h2 class="location-heading-1">Your Event</h2></div></a>
                                </div>
                            </div>
                            <div class="columns medium-4">
                                <div class="location" >
                                    <a class="location-link" href="#"><img src="<?php echo home_url(); ?>/wp-content/themes/sebastien_schwab/images/BandB.jpg" ><div class="orange-overlay"><h2 class="location-heading">The Mystic Dandelion</h2></div></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="chef-quote" class="white-box">
                        <p ><?php the_field('chef_quote')?></p>
                        <p id="chef-name">- Chef Sebastien</p>
                    </section>
                </main> <!-- end #main -->

            </div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
