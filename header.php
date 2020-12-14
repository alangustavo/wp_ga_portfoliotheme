<?php
/**
 * Template File Doc Comment
 *
 * PHP version 8
 *
 * @category Template File
 * @package  Template_File
 * @author   Author <ala.gustavo@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://alangustavo.ga/
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio Alan Gustavo</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a href="#" class="navbar-brand d-flex align-items-center">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/img/foto.png" class=" rounded-circle" width="50px" height="50px" alt="Alan´s Photo">
					<strong>&nbsp;My Portfolio</strong>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top-menu" aria-controls="top-menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php
                    wp_nav_menu(array(
                    'menu'              => "my_main_menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                    'menu_class'        => "navbar-nav mr-auto", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                    'container'         => "div", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                    'container_class'   => "collapse navbar-collapse", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                    'container_id'      => "top-menu", // (string) The ID that is applied to the container.
                    'fallback_cb'       => "false", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
                    'depth'             => "0", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
                    'add_li_class'  => 'nav-item nav-link',
                    'walker'          => new WP_Bootstrap_Navwalker()
                ));
                ?>
				<form class="form-inline my-2 my-md-0">
					<input class="form-control" type="text" placeholder="Search" aria-label="Search">
				</form>
			</div>
		</nav>
	</header>