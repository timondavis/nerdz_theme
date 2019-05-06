<?php

const NERDZ_TEMPLATE_VAR__CHARACTER_STATS = 'cm_character_stats';

require_once( get_stylesheet_directory() . '/template-tags/template-tags.php' );

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
