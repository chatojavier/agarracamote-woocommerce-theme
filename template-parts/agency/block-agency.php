<?php

/**
 * Agency Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'agency-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'agency';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$description = get_field('description') ?: 'Your description<br>here...';
$image_id = get_field('main_image');
$contact = get_field('contact') ?: 'Your contact<br>here...';
$image1x = wp_get_attachment_image_url( $image_id, 'shop_single') ?: AWT_BUILD_IMG_URI . '/red-rectangle.jpg';
$image2x = wp_get_attachment_image_url( $image_id, 'shop_single_retina') ?: '';
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE) ?: 'No image found';
?>

 <div class="agency-content mt-10 w-full mb-16">
    <div class="agency__description relative mb-16">
        <div class="agency__description__text font-gtsuper text-7xl text-center text-red w-full">
            <?php echo $description ?>
        </div>
        <!-- <img src="<?php echo AWT_BUILD_SVG_URI . '/decoration_eyes.svg' ?>" class="absolute -bottom-4 right-24 w-20"> -->
    </div>
    <div class="agency-pic relative">
        <figure class="img_wrapper mx-12 h-110 mb-16">
            <?php
            echo '<img src="' . $image1x . '" src="' . $image2x . '" alt="' . $image_alt . '" class="object-cover object-center w-full h-full">';
            ?>
        </figure>
        <img src="<?php echo AWT_BUILD_SVG_URI . '/decoration_cloud.svg' ?>" class="absolute -top-16 left-24 w-60">
    </div>
    <div class="agency__contact relative mb-16">
        <div class="agency__contact__text font-gtsuper text-6xl text-center text-red w-full">
            <?php echo $contact ?>
        </div>
    </div>
</div>
<?php

//get the current page
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

//custom loop using WP_Query
$args = array(  
    'post_type'      => 'campaigns',
    'post_status'    => 'publish',
    'orderby'        => 'title', 
    'order'          => 'ASC',
    'posts_per_page' => -1,
    // 'paged'          => $paged
);

$loop = new WP_Query( $args );
?>

<div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-4">

<?php
while ( $loop->have_posts() ) : $loop->the_post();
    get_template_part( 'template-parts/agency/campaign-card' );
endwhile; ?>

</div>


<!--<div class="pagenav | flex justify-between">
    <div class="alignleft"><?php previous_posts_link('Previous', $loop->max_num_pages) ?></div>
    <div class="alignright"><?php next_posts_link('Next', $loop->max_num_pages) ?></div>
</div> -->

<?php
//reset the following that was set above prior to loop
wp_reset_postdata(); ?>