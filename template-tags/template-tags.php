<?php

function nerdz_character_stats_table() {

	global $post;
	$model = CmCharacterStatsService::get_from_post_data( $post );

	set_query_var( NERDZ_TEMPLATE_VAR__CHARACTER_STATS, $model );
	get_template_part( 'template-tags/character-stats-table' );
}

function nerdz_character_thumbnail() {

	get_template_part( 'template-tags/character-thumbnail' );
}