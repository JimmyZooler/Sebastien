<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
				
                        <div class="hero-slider">
                            <ul>
                                <li style=" background-image: url('<?php the_field('slider_image_1')?>') no-repeat center center; -webkit-background-size: cover; background-size: cover; width: 100%; height: 100vh; "></li>
                                <li style=" background-image: url('<?php the_field('slider_image_2')?>'); "></li>
                                <li style=" background-image: url('<?php the_field('slider_image_3')?>'); "></li>
                            </ul>
                        </div>							

                    </main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
