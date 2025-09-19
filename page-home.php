<?php
/**
 * The template for displaying all pages
 * Template name: Main Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecovista
 */

get_header();
?>

	<main id="primary" class="site-main">

		<main class="main">

            <?= the_content() ?>

		</main>

	</main><!-- #main -->

<?php
get_footer();
