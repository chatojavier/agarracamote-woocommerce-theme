<?php
/**
 * Artista single page
 *
 * @package Advance WooCommerce Theme
 */

get_header();

?>
<main id="main" class="site-main max-w-1280 m-auto mt-4 lg:p-4" role="main">
	<div class="page-title w-full border-b-1 border-solid">
        <span class="font-expanded font-bold">Artistas / <?php echo single_term_title() ?></span>
    </div>
    <?php get_template_part( '/template-parts/single-artista/bio' ); ?>
	<?php get_template_part( '/template-parts/front-page/featured' ); ?>
	<?php get_template_part( '/template-parts/front-page/products' ); ?>
</main>

<?php
get_footer();