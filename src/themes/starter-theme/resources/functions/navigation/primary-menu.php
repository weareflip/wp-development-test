<?php
/**
 * Starter for a custom Navigation Walker if needed.
 */
class Primary_Navigation extends Walker_Nav_Menu {
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$output .= sprintf( "\n<li><a class=\"navigation--primary-link\" href='%s'%s>%s</a></li>\n",
			$item->url,
			( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
			$item->title
		);
	}
}