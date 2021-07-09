<?php
/* Template Name: Agency
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package agarracamote
 */

get_header();

?>
<main id="main" class="site-main max-w-1280 m-auto mt-4 p-4" role="main">
    <?php echo ac_get_title_serif(); ?>
    <div class="agency_wrapper">
        <?php get_template_part( 'template-parts/agency/content-agency' ); ?>
        <?php get_template_part( 'template-parts/agency/gallery-agency' ); ?>
    </div>
</main>

<?php
get_footer();