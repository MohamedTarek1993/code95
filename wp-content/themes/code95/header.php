<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package code95
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open();
	global $base;
	$banner_link_header =  get_field('link_banner_header');
	$banner_image_header =  get_field('image_banner_header');
	?>
	<div class="header_banner">
		<a href="<?php echo $banner_link_header  ?>">
			<img src="  <?php echo $banner_image_header['url']; ?>" alt=" <?php echo $banner_image_header['alt']; ?>" />
		</a>
	</div>
	<nav class="navbar nav-home navbar-expand-lg">
		<div class="container">
			<?php
			if (has_custom_logo()) {
				the_custom_logo();
			}
			?>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown-home" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown-home">
				<?php echo get_menu('main-menu', 'navbar-nav') ?>
			</div>


		</div>
	</nav>