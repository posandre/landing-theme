<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package landing_theme
 */

$header_classes = array('landing-theme__header');

if (!empty(landing_theme_get_acf_field('anchor_navigation_items')))
	$header_classes[] = 'landing-theme__header--with-anchor-menu';

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="landing-theme">
	<header class="<?php echo implode(' ', $header_classes); ?>">
        <?php if (is_page_template('page-templates/landing-page.php'))
	        get_template_part( 'template-parts/landing-page/section', 'anchor-menu' ); ?>
    </header>