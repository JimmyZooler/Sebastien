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
				
                        							

                    </main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
