<?php

const NERDZ_TEMPLATE_VAR__CHARACTER_STATS = 'cm_character_stats';

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function nerdz_character_stats_row() {

	global $post;
	$model = CmCharacterStatsService::get_from_post_data( $post );

	set_query_var( NERDZ_TEMPLATE_VAR__CHARACTER_STATS, $model );
	get_template_part( 'template-parts/character-stats-row' );
}

