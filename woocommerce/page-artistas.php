<?php
/**
 * Page Artistas
 *
 * @package Agarracamote WooCommerce Theme
 */

get_header();

?>
<main id="main" class="site-main max-w-1280 m-auto mt-4 p-4" role="main">
	<h1 class="page-title | w-full mb-8 | border-b-1 border-solid | text-lg font-expanded font-bold">
        <?php echo get_the_title() ?>
    </h1>
    <?php get_template_part( '/template-parts/artistas/artistas-carousel' ); ?>
	<?php get_template_part( '/template-parts/global/featured-products', null, array('posts_per_page' => 4) ); ?>
</main>

<?php
get_footer();