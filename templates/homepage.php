<?php
/* Template Name: Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package agarracamote
 */

get_header();
?> 

<main id="main" class="site-main max-w-1280 m-auto mt-4 p-4" role="main">
	<?php get_template_part( '/template-parts/front-page/jumbotron' ); ?>
	<?php get_template_part( '/template-parts/front-page/products' ); ?>
</main>
<?php
get_footer();