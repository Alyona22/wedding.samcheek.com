<?php
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
	wp_enqueue_style( 'style.css', get_stylesheet_uri() );
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,500,500i|Montserrat|Marck+Script|Ubuntu&display=swap&subset=cyrillic,cyrillic-ext');
	wp_enqueue_script( 'jquery.main.js', get_template_directory_uri() . '/js/jquery.main.js');
}

add_theme_support('custom-logo');
add_theme_support( 'title-tag' );

add_action( 'after_setup_theme', 'theme_register_nav_menu' );

function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}