<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>

<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
			    <section class="white-box mystic-page">
                        
                                <h2 class="section-header catering-header"><img src="http://localhost/sebastien/wordpress/wp-content/uploads/2016/04/nexa_header_leaves_left-1.jpg" max-width="80%">We’d Love to Hear from You<img src="http://localhost/sebastien/wordpress/wp-content/uploads/2016/04/nexa_header_leaves_right-1.jpg" max-width="80%"></h2>
                                <h3 class="sub-header"><?php the_field('contact_sub_header')?></h3>
                                <div class="row">
                                    <div class="column medium-offset-3 medium-6">
                                        <div class="contact-form-container text-left">
                                            <?php the_field('contact_form')?>
                                        </div>
                                    </div>
                                    <div class="column"></div>
                                </div>
											

                    </main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
