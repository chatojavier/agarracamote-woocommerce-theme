<?php
/* Template Name: Contacto
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package agarracamote
 */

get_header();

?>
<main id="main" class="site-main max-w-1280 m-auto mt-4 p-4" role="main">
    <div class="page-title w-full border-b-1 border-solid">
        <span class="font-expanded font-bold"><a href="<?php echo get_permalink( 83 ) ?>" class="hover:text-red"><?php the_title(83); ?></a> / <?php echo single_term_title() ?></span>
    </div>
    <div class="contact_wrapper max-w-1024 mx-auto">
        <?php the_content(  ); ?>
    </div>
</main>

<?php
get_footer();