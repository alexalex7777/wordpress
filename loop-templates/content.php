<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<div <?php post_class('item'); ?> id="post-<?php the_ID(); ?>">

	<?php if ( has_post_thumbnail()) { ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
		<?php the_post_thumbnail(); ?>
	</a>
	<?php } ?>

</div><!-- #post-## -->
