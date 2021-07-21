<?php

/**
 * Agency Content Template.
 */


// Load values and assign defaults.
$description = get_field('description') ?: 'Your description<br>here...';
$image_id = get_field('main_image');
$contact = get_field('contact') ?: 'Your contact<br>here...';
$image1x = wp_get_attachment_image_url( $image_id, 'shop_single_retina') ?: AWT_BUILD_IMG_URI . '/red-rectangle.jpg';
$image2x = wp_get_attachment_image_url( $image_id, 'full') ?: '';
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE) ?: 'No image found';
?>

 <div class="agency-content mt-10 w-full mb-16">
    <div class="agency__description relative mb-16">
        <div class="agency__description__text text-red text-4xl sm:text-5xl md:text-7xl lg:text-8xl font-gtsuper text-center">
            <span><?php echo $description ?></span>
            <span class="fill-current">
                <svg class="inline-block h-10 md:h-16 lg:h-20" xmlns="http://www.w3.org/2000/svg" width="70" viewBox="0 0 76 68">
                <g>
                    <path class="st0" d="M18.5,68.4C7.7,68.4-1.1,52.9-1.1,34S7.7-0.4,18.5-0.4c10.8,0,19.6,15.4,19.6,34.4S29.3,68.4,18.5,68.4
                        M18.5,1.4C8.7,1.4,0.7,16.1,0.7,34s8,32.6,17.8,32.6S36.3,51.9,36.3,34S28.3,1.4,18.5,1.4"/>
                    <path class="st0" d="M18.8,26.9c1,2.8,1.5,6.1,1.5,9.6c0,10-4.5,18.1-10.2,18.1c-5.6,0-10.2-8.1-10.2-18.1s4.5-18.1,10.2-18.1
                        c1.8,0,3.5,0.8,4.9,2.3l-4.9,15.9L18.8,26.9z"/>
                    <path class="st0" d="M56.8,26.9c1,2.8,1.5,6.1,1.5,9.6c0,10-4.5,18.1-10.2,18.1c-5.6,0-10.2-8.1-10.2-18.1s4.5-18.1,10.2-18.1
                        c1.8,0,3.5,0.8,4.9,2.3l-4.9,15.9L56.8,26.9z"/>
                    <path class="st0" d="M56.5,68.4c-10.8,0-19.6-15.4-19.6-34.4S45.7-0.4,56.5-0.4c10.8,0,19.6,15.4,19.6,34.4S67.3,68.4,56.5,68.4
                        M56.5,1.4c-9.8,0-17.8,14.6-17.8,32.6s8,32.6,17.8,32.6S74.3,51.9,74.3,34S66.3,1.4,56.5,1.4"/>
                </g>
                </svg>
            </span>
        </div>
    </div>
    <div class="agency-pic relative">
        <figure class="img_wrapper h-110 mb-16">
            <?php
            echo '<img src="' . $image1x . '" src="' . $image2x . '" alt="' . $image_alt . '" class="object-cover object-center w-full h-full">';
            ?>
        </figure>
        <img src="<?php echo AWT_BUILD_SVG_URI . '/decoration_cloud.svg' ?>" class="absolute -top-1/10 left-1/10 w-36 sm:w-44 md:w-52 lg:w-60">
    </div>
    <div class="agency__contact relative mb-16">
        <div class="agency__contact__text text-red text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-gtsuper text-center">
            <?php echo $contact ?>
        </div>
    </div>
</div>