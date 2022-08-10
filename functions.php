<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/assets/css/main.css', false,'1.1','all');
   wp_enqueue_style( 'first');

   wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', false,'1.1','all');
   wp_enqueue_style( 'responsive');

   wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', false,'1.1','all');
   wp_enqueue_style( 'bootstrap');

   wp_register_style('stylemap', get_template_directory_uri() . '/assets/css/styles.css.map', false,'1.1','all');
   wp_enqueue_style( 'stylemap');

   wp_register_style('style', get_template_directory_uri() . '/assets/css/style.scss', false,'1.1','all');
   wp_enqueue_style( 'style');

   wp_register_style('lien', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css', false,'1.1','all');
   wp_enqueue_style( 'lien');
   
}
add_action('wp_enqueue_scripts', 'add_css');





function add_script ( )
{
   wp_register_script ( 'jquery' , get_template_directory_uri ( ) . '/assets/js/jquery-3.4.1.min.js' , array ( 'jquery' ) , 1.1 , true ) ;   
   wp_enqueue_script ( 'jquery' ) ; 

   wp_register_script ( 'bootstrap' , get_template_directory_uri ( ) . '/assets/js/bootstrap.js' , array ( 'jquery' ) , 1.1 , true ) ;   
   wp_enqueue_script ( 'bootstrap' ) ; 
}
add_action ( 'wp_enqueue_scripts' , 'add_script' ) ;

add_theme_support ( 'menus' ) ;