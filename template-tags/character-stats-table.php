<?php

$query_var = NERDZ_TEMPLATE_VAR__CHARACTER_STATS;
$character_stats = get_query_var( $query_var );

?>

<table class="character-stats-table">
	<thead>
		<tr>
			<th colspan="<?php echo count( $character_stats->get_keys() ) ?>"><h4>Character Stats</h4></th>
		</tr>
		<tr>
			<?php foreach( $character_stats->get_keys() as $key ): ?>
				<th><h6><?php echo esc_html( ucfirst($key) ) ?></h6></th>
			<?php endforeach; ?>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php foreach( $character_stats->get_keys() as $key ): ?>
			<td><?php echo esc_html( $character_stats->{$key} ) ?></td>
			<?php endforeach; ?>
		</tr>
	</tbody>
</table>
