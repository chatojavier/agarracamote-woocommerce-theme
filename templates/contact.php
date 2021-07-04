<?php
/* Template Name: Contacto
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package agarracamote
 */

get_header();

?>
<main id="main" class="site-main max-w-1280 m-auto mt-4 lg:p-4" role="main">
	<?php echo ac_get_title_serif(); ?>
    <div class="contact_wrapper max-w-1024 mx-auto">
        <?php the_content(  ); ?>
    </div>
</main>

<?php
get_footer();