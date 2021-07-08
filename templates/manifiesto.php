<?php
/* Template Name: Manifiesto
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package agarracamote
 */

get_header();

?>
<main id="main" class="site-main max-w-1280 m-auto mt-4 p-4" role="main">
	<?php echo ac_get_title_serif(); ?>
    
    <?php
    $image = get_field('manifiesto_imagen');
    if($image) :
    $image1x = wp_get_attachment_image_url( $image, 'large' );
    $image2x = wp_get_attachment_image_url( $image, 'full' );
    ?>
        <div class="manifiesto_wrapper max-w-1024 mx-auto">
            <img src="<?php echo $image1x; ?>" alt="Agarracamote Manifiesto" srcset="<?php echo $image2x; ?>">
        </div>
    <?php endif; ?>
</main>

<?php
get_footer();