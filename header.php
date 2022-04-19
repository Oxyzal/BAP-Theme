<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medilink
 */
function styleandscript() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'styleandscript');

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://kit.fontawesome.com/0961a08f8a.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'medilink' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- Attention ! les url correspondent au site en local -->

		<nav class="navbar">
        <img class="logo" src="wp-content/uploads/2022/04/logo.png" alt="logo">
        <ul class="navbar_menu">
            <li class="links"><a href="#">Home</a></li>
            <li class="links"><a href="#">Notre Équipe</a></li>
            <li class="links"><a href="#">Évents</a></li>
            <li class="links"><a href="#">Solutions</a></li>
            <li class="links"><a href="#">Contact</a></li>
            <img class="loop" src="wp-content/uploads/2022/04/loop.png" alt="loop">
            <img class="lang" src="wp-content/uploads/2022/04/translate2.png" alt="translate">
        </ul>
		
    </nav>
	</header><!-- #masthead -->
