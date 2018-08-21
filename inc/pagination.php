<?php
/**
 * Pagination layout.
 *
 * @package understrap
 */

/**
 * Custom Pagination with numbers
 * Credits to http://www.wpbeginner.com/wp-themes/how-to-add-numeric-pagination-in-your-wordpress-theme/
 */

if ( ! function_exists( 'understrap_pagination' ) ) :
	function understrap_pagination() {
		if ( is_singular() ) {
			return;
		}

		global $wp_query;

		/** Stop execution if there's only 1 page */
		if ( $wp_query->max_num_pages <= 1 ) {
			return;
		}

		$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
		$max   = intval( $wp_query->max_num_pages );

		/**    Add current page to the array */
		if ( $paged >= 1 ) {
			$links[] = $paged;
		}

		/**    Add the pages around the current page to the array */
		if ( $paged >= 3 ) {
			$links[] = $paged - 1;
			$links[] = $paged - 2;
		}

		if ( ( $paged + 2 ) <= $max ) {
			$links[] = $paged + 2;
			$links[] = $paged + 1;
		}

		echo '<nav aria-label="Page navigation"><ul class="nav-links d-flex flex-wrap">' . "\n";

		/**    Link to first page, plus ellipses if necessary */
		if ( ! in_array( 1, $links ) ) {
			$class = 1 == $paged ? ' class="active page-item"' : ' class="page-item"';

			printf( '<li %s><a class="page-nav-link" href="%s">%s</a></li>' . "\n",
				$class, esc_url( get_pagenum_link( 1 ) ), '1' );


			if ( ! in_array( 2, $links ) ) {
				echo '<li class="page-item"></li>';
			}
		}

		sort( $links );
		foreach ( (array) $links as $link ) {
			$class = $paged == $link ? ' class="active page-item"' : ' class="page-item"';
			printf( '<li %s><a href="%s" class="page-nav-link">%s</a></li>' . "\n", $class,
				esc_url( get_pagenum_link( $link ) ), $link );
		}

		if ( ! in_array( $max, $links ) ) {
			if ( ! in_array( $max - 1, $links ) ) {
				echo '<li class="page-item"></li>' . "\n";
			}

			$class = $paged == $max ? ' class="active "' : ' class="page-item"';
			printf( '<li %s><a class="page-nav-link" href="%s" aria-label="Next"><span aria-hidden="true">%s</a></li>' . "\n",
				$class . '', esc_url( get_pagenum_link( esc_html( $max ) ) ), esc_html( $max ) );
		}

		echo '</ul></nav>' . "\n";
	}

endif;
