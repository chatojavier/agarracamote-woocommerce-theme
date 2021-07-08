<?php
/**
 * Artista single page
 *
 * @package Advance WooCommerce Theme
 */

get_header();

?>
<main id="main" class="site-main max-w-1280 m-auto mt-4 p-4" role="main">
	<div class="page-title w-full border-b-1 border-solid">
        <span class="font-expanded font-bold"><a href="<?php echo get_permalink( 79 ) ?>" class="hover:text-red">Artistas</a> / <?php echo single_term_title() ?></span>
    </div>
    <?php get_template_part( '/template-parts/single-artista/bio' ); ?>
	<div class="term-products | mt-12">
        <?php echo ac_get_title_sans('Obras'); ?>
        <?php wc_get_template_part('loop/grid-products'); ?>
    </div>
</main>

<?php
get_footer();