<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
    
    // Load What-Input files in footer
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/what-input.min.js', array(), '', true );
    
    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/vendor/foundation-sites/dist/foundation.min.js', array( jquery ), '6.0', true );
    
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( jquery ), '', true );
    
    // Adding Unslider script file in the footer
    wp_enqueue_script( 'unslider-js', get_template_directory_uri() . '/assets/js/unslider.js', array( jquery ), '', true );
    
    // Adding Unslider CSS
    wp_enqueue_style( 'unslider-css', get_template_directory_uri() . '/assets/css/dist/css/unslider.css', array(), '', 'all' );
    
    // Adding Unslider-dots CSS
    wp_enqueue_style( 'unslider-dots-css', get_template_directory_uri() . '/assets/css/dist/css/unslider-dots.css', array(), '', 'all' );
    
     // Register Motion-UI
    wp_enqueue_style( 'motion-ui-css', get_template_directory_uri() . '/vendor/motion-ui/dist/motion-ui.min.css', array(), '', 'all' );
	
	// Select which grid system you want to use (Foundation Grid by default)
    wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/vendor/foundation-sites/dist/foundation.min.css', array(), '', 'all' );
//    wp_enqueue_style( 'foundation--flex-css', get_template_directory_uri() . '/vendor/foundation-sites/dist/foundation-flex.min.css', array(), '', 'all' );
    
    // Link to Google Fonts 
    wp_enqueue_style('sebastien-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,500');
    
    // Register Font Awesome Icons
    wp_enqueue_style('font-awesome-icons', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css');
    
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);