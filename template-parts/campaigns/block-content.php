<?php

/**
 * Campaign Content Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'campaign_content-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'campaign_content';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$description = get_field('description') ?: 'Your description here...';
$image_id = get_field('image');
$image1x = wp_get_attachment_image_url( $image_id, 'shop_single');
$image2x = wp_get_attachment_image_url( $image_id, 'shop_single_retina');
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
$title = get_the_title() ?: 'Nombre de Campaña';
?>

 <div class="campaign-content grid grid-cols-2 gap-12 mt-10 max-w-1024 mx-auto w-full mb-16">
    <div class="campaign-info">
        <div class="campaign-title flex justify-between py-2 border-b-1 border-solid">
            <span class="campaign-name font-expanded font-bold text-lg"><?php echo $title ?></span>
        </div>
        <div class="campaign-description mt-6 space-y-6">
            <?php echo $description ?>
        </div>
    </div>
    <div class="campaign-pic relative">
        <figure class="img_wrapper square-parent">
            <?php
            if(get_field('image', $term)) {
                echo '<img src="' . $image1x . '" src="' . $image2x . '" alt="' . $image_alt . '" class="square-child">';
            } else {
                echo '<img src="' . wc_placeholder_img_src('shop_single') . '" alt="No image found" class="square-child">';
            }
            ?>
        </figure>
        <img src="<?php echo AWT_BUILD_SVG_URI . '/decoration_001.svg' ?>" class="absolute -top-2 -right-2 w-28">
    </div>
</div>