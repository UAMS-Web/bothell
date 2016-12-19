<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
    //wp_enqueue_script( 'underscore', get_stylesheet_directory_uri() . '/assets/js/underscore.js', array(), '1.0.0', true );
    //wp_enqueue_script( 'site-dev', get_stylesheet_directory_uri() . '/assets/js/site.dev.js', array('backbone'), '1.0.0', true );
    //wp_enqueue_script( 'uams', get_stylesheet_directory_uri() . '/assets/js/uams.js', array('backbone'), '1.0.0', true );
    //wp_enqueue_script( 'uams-init', get_stylesheet_directory_uri() . '/assets/js/uams.init.js', array('backbone'), '1.0.0', true );
    wp_enqueue_script( 'uams-alert', get_stylesheet_directory_uri() . '/assets/js/uams.alert.js', array('backbone'), '1.0.0', true );
    wp_enqueue_style( 'uams-alert-style', get_stylesheet_directory_uri() . '/assets/css/uams.alert.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );
