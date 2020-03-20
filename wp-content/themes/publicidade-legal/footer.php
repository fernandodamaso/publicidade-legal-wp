<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package template
 */

?>

<footer id="colophon" class="site-footer">
	<div class="layout">
		<?php dynamic_sidebar( 'footer1' ); ?>
		<?php dynamic_sidebar( 'footer2' ); ?>
		<?php dynamic_sidebar( 'footer3' ); ?>
		<?php dynamic_sidebar( 'footer4' ); ?>
	</div>  <!-- end of layout  --> 
	<?php
	if( have_rows('social_media', 'option') ):
		echo '<ul class="social">';
		while ( have_rows('social_media', 'option') ) : the_row();
			$socialchannel = get_sub_field('social_channel', 'option');
			$socialurl = get_sub_field('social_url', 'option');
			echo '<li class="nav-item">';
			echo '<a class="nav-link" rel="nofollow noopener noreferrer" href="' . $socialurl . '" target="_blank">';
			echo '<i class="fab fa-' . $socialchannel . '" aria-hidden="true"></i>';
			echo '<span class="sr-only hidden">' . ucfirst($socialchannel) . '</span>';
			echo '</a></li>';
		endwhile;
		echo '</ul>';
	endif;
	?>
</footer><!-- #colophon -->

<div class="modal-box" id="menu">
	<a href="#" class="fechar"></a>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">
		<img src="<?php bloginfo('template_url'); ?>/img/header-logo.png" alt="">
	</a>
	<?php
	wp_nav_menu( array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'primary-menu',
	) );
	?>
</div>

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/OwlCarousel-2-2.3.4/dist/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

</body>
</html>
