<?php
/**
 * The template part for displaying results in search pages (for cm-character entities)
 *
 * @package nerdz
 * @subpackage nerdz
 * @since nerdz 0.0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

    <div class="entry-body" >
	    <?php twentysixteen_post_thumbnail(); ?>
	    <?php nerdz_character_stats_table() ?>
    </div>

	<footer class="entry-footer">
		<?php
		edit_post_link(
			sprintf(
			/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
		?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

