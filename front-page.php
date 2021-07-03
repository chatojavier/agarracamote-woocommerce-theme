<?php
/**
 * Front Page
 *
 * @package Advance WooCommerce Theme
 */

get_header();

?>
<main id="main" class="site-main max-w-1280 m-auto mt-4 lg:p-4" role="main">
	<?php get_template_part( '/template-parts/front-page/jumbotron' ); ?>
	<?php get_template_part( '/template-parts/global/featured-products', null, array('posts_per_page' => 8) ); ?>
	<?php get_template_part( '/template-parts/front-page/featured-artists' ); ?>
</main>
<?php
get_footer();
