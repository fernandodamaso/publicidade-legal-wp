<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fdamaso
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- <link rel="icon" href="<?php bloginfo('template_url'); ?>/img/favicon.png" type="image/x-icon"/> -->
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.min.css">
</head>

<body <?php body_class(); ?>>
	<div class="overlay"></div>
	<?php include('menu-folha.php') ?>
	<header>
		<div class="layout">
			<!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">
				<img src="<?php bloginfo('template_url'); ?>/img/header-logo.png" alt="">
			</a>
			<nav class="menu">
				<div class="desktop">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</div>
				<a href="#" class="mobile modal-trigger" data-id="menu">
					<i class="fas fa-bars"></i>
				</a>
			</nav> -->
			<h1 class="titulo_principal">Publicidade Legal</h1>
			<!-- <h2 class="subtitulo">Subtitulo da Publicidade Legal</h2> -->
		</div>
	</header><!-- #masthead -->
