<?php
/**
 * Template-part: biography.
 *
 * To be used inside the WordPress loop.
 *
 * @package
 */

 // get the current taxonomy term
$term = get_queried_object();

?>


 <div class="artist-bio grid grid-cols-2 gap-12 mt-10 max-w-1024 mx-auto w-full">
    <?php $image = get_field('image', $term); ?>
    <div class="artist-pic square-parent">
        <?php
        if(get_field('image', $term)) {
            echo wp_get_attachment_image( $image, array("shop_single"), "", array( "class" => "square-child" ) );
        } else {
            echo '<img src="' . AWT_BUILD_IMG_URI . '/red-rectangle.jpg' . '" alt="No image found" class="square-child">';
        }
        ?>
    </div>
    <div class="artist-info">
        <?php
        $instagram = get_field('instagram', $term);
        $description = $term->description;
        $title = $term->name;;
        ?>
        <div class="artist-title flex justify-between py-2 border-b-1 border-solid">
            <div class="artist-name font-expanded font-bold text-lg"><?php echo $title ?></div>
            <?php if($instagram) : ?>
            <div class="artist-instagram text-red fill-current w-6">
                <a href="<?php echo $instagram ?>">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 21 21">
                    <g>
                        <path class="st0" d="M10.4,20.7c-1.1,0-2.1,0-3.2,0c-0.9,0-1.8,0-2.7-0.3c-1.5-0.4-2.7-1.2-3.5-2.5c-0.4-0.7-0.6-1.5-0.7-2.3
                            c-0.1-1.2-0.1-2.5-0.1-3.7c0-1.4,0-2.7,0-4.1c0-0.9,0-1.8,0.2-2.6c0.3-1.6,1-2.9,2.4-3.8c0.8-0.5,1.7-0.8,2.6-0.9
                            c1.1-0.1,2.2-0.1,3.2-0.1c1.6,0,3.1,0,4.7,0c0.9,0,1.8,0,2.7,0.2c1.6,0.3,2.9,1.2,3.8,2.6c0.4,0.8,0.7,1.7,0.7,2.6
                            c0.1,1.4,0.1,2.8,0.1,4.1c0,1.3,0,2.5,0,3.8c0,0.9,0,1.8-0.2,2.6c-0.5,2.1-1.8,3.5-4,4.1c-0.8,0.2-1.5,0.3-2.3,0.3
                            C12.9,20.7,11.7,20.7,10.4,20.7C10.4,20.7,10.4,20.7,10.4,20.7 M10.4,18.9C10.4,18.9,10.4,18.9,10.4,18.9c1.1,0,2.1,0,3.2,0
                            c0.7,0,1.5,0,2.2-0.2c1.5-0.3,2.4-1.2,2.8-2.7c0.2-0.8,0.2-1.7,0.2-2.5c0-1.7,0-3.3,0-5c0-1,0-2-0.1-3c-0.2-1.7-1.3-2.7-2.9-3.1
                            c-0.8-0.2-1.6-0.2-2.4-0.2c-1.4,0-2.9,0-4.3,0c-1.2,0-2.3,0-3.5,0.1C4.9,2.4,4.3,2.6,3.7,2.9C2.9,3.5,2.4,4.3,2.3,5.3
                            C2.1,6,2.1,6.8,2.1,7.5c0,2.2,0,4.3,0,6.5c0,0.6,0,1.3,0.2,1.9c0.3,1.3,1,2.2,2.2,2.6c0.6,0.2,1.3,0.3,2,0.3
                            C7.8,18.9,9.1,18.9,10.4,18.9"/>
                        <path class="st0" d="M15.7,10.5c0,2.9-2.3,5.2-5.2,5.2c-2.9,0-5.3-2.3-5.3-5.2c0-2.9,2.3-5.2,5.2-5.2C13.3,5.3,15.7,7.6,15.7,10.5
                            M10.4,13.9c1.9,0,3.4-1.5,3.4-3.5c0-1.8-1.6-3.3-3.4-3.3C8.5,7.1,7,8.7,7,10.6C7,12.4,8.6,13.9,10.4,13.9"/>
                        <path class="st0" d="M14.6,5.1c0-0.7,0.6-1.2,1.2-1.2c0.7,0,1.2,0.6,1.2,1.2c0,0.7-0.5,1.2-1.2,1.2C15.2,6.3,14.6,5.8,14.6,5.1"/>
                    </g>
                </svg>
                </a>
            </div>
            <?php endif; ?>
        </div>
        <div class="artist-description mt-6">
            <?php echo $description ?>
        </div>
    </div>
</div>