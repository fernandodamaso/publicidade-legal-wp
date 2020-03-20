<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fdamaso
 */

?>

<a href="<?php echo esc_url( get_permalink() ); ?>">
	<?php the_title(); ?>
	<img src="<?php the_field('foto_do_servico'); ?>" alt="">
</a>