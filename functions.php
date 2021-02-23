<?php

function siposalex_theme_support(){
//Dynamic title
add_theme_support('title-tag');
}

add_action('after_setup_theme', 'siposalex_theme_support');


function siposalex_menus(){

	$locations = array(
		'primary' => "Desktop Menu",
		'mobile' => "Mobile Menu"
	);

	register_nav_menus($locations);	  
}

add_action('init', 'siposalex_menus');


function siposalex_register_style(){

$version = wp_get_theme()->get ('Version');

wp_enqueue_style('siposalex-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

//Injecting Own CSS
add_action('wp_enqueue_scripts' , 'siposalex_register_style');

// Removing Admin Bar (CSS)
add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

// Removing Admin Bar (JS)
add_filter( 'show_admin_bar', '__return_false' );


function siposalex_register_scripts(){

wp_enqueue_script('siposalex-scripts', get_template_directory_uri() . "/assets/javascript/main.js", array(), 1.0, 'true');

wp_enqueue_script('siposalex-jquery', get_template_directory_uri() . "/assets/javascript/jquery.min.js", array(), 1.0, 'true');

wp_enqueue_script('siposalex-smoothscroll', get_template_directory_uri() . "/assets/javascript/smoothscroll.js", array(), 1.0, 'true');
}


add_action('wp_enqueue_scripts' ,'siposalex_register_Scripts')

?>