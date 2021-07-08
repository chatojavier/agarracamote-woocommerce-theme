<?php
/**
 * Single Page Campaigns
 *
 * @package Agarracamote WooCommerce Theme
 */

get_header();

?>
<main id="main" class="site-main max-w-1280 m-auto mt-4 p-4" role="main">
    <div class="page-title w-full border-b-1 border-solid">
        <span class="font-expanded font-bold"><a href="<?php echo get_permalink(83) ?>" class="hover:text-red"><?php echo get_the_title(83); ?></a> / <?php the_title(); ?></span>
    </div>
    
    <?php the_content(  ); ?>
</main>

<?php
get_footer();