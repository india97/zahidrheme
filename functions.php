<?php

/*
Theme Name: My Theme
Author: Hostinger
Author URI: http://www.hostinger.com/tutorials
Description: My first responsive HTML5 theme
Version: 1.0
License: GNU General Public License v3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/




/**menu***/

register_nav_menus(
    array('primary-menu'=> 'Header Menu')
   );
   
   register_nav_menus(
    array('mobile-menu'=> 'Mobile Menu')
   );
   
   add_theme_support('custom-header');
   
   add_theme_support('post-thumbnails');
   
   
   class Child_Wrap extends Walker_Nav_Menu
   {
       function start_lvl(&$output, $depth = 0, $args = array())
       {
           $indent = str_repeat("\t", $depth);
           $output .= "\n<div class=''>$indent<ul class=\"dropdown clearfix\">\n";
       }
   
       function end_lvl(&$output, $depth = 0, $args = array())
       {
           $indent = str_repeat("\t", $depth);
           $output .= "$indent</ul></div>\n";
       }
   }
   
   class Child_Wraps extends Walker_Nav_Menu
   {
       function start_lvl(&$output, $depth = 0, $args = array())
       {
           $output .= "\n$indent<ul class=\"dropdown clearfix\">\n";
       }
   
       function end_lvl(&$output, $depth = 0, $args = array())
       {
           $indent = str_repeat("\t", $depth);
           $output .= "$indent</ul>\n";
       }
   }


//custom post
add_theme_support('post-thumbnails');
add_post_type_support( 'testimonial', 'thumbnail' );

function create_posttype() {
 register_post_type( 'testimonial',
    array(
            'labels' => array(
                'name' => __( 'Testimonial' ),
                'position' => __( 'Testimonial' ),
                'singular_name' => __( 'testimonial' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'testimonial'),
            // add category in custom post type
            'taxonomies' => array( 'category'),
        )
    );
}

add_action( 'init', 'create_posttype' );


/*logo*/

function zahid_theme_setup(){

    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size ('home-featured', 680, 300, array('center','center'));
    add_image_size ('single-img', 580, 272, array('center','center'));
    add_theme_support('automatic-feed-links');

   register_nav_menus( array(
       'primary' => __('Primary Menu', 'zahidtheme')
    ));
};




