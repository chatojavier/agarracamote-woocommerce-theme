<?php
/**
 * Template-part: Artistas Carousel.
 *
 * To be used inside the WordPress loop.
 *
 * @package
 */

$terms = get_terms( array(
  'taxonomy'   => 'artista', // Swap in your custom taxonomy name
  'hide_empty' => true, 
));
?>

<style>
  .swiper-container {
    width: 100%;
    height: 500px;
  }

  .swiper-button-prev {
    left: 12px;
    color: #fff;
  }

  .swiper-button-next {
    right: 12px;
    color: #fff;
  }
</style>

<!-- Swiper -->
  <div class="swiper-block w-full relative">
    <div class="swiper-container artistas-carousel">
      <div class="swiper-wrapper">
        <?php foreach( $terms as $term ) {
          $img_id = get_field('image', $term);
          $name = $term->name;
          $url = get_term_link($term);
          ?>
          <div class="swiper-slide relative">
            <a href="<?php echo esc_url( $url ); ?>">  
                  <?php 
                  if ($img_id) {
                    echo wp_get_attachment_image($img_id, "large", "", array( "class" => "block w-full h-full object-cover" ));
                  } else {
                    echo '<img src="' . AWT_BUILD_IMG_URI . '/red-rectangle.jpg' . '" alt="No image found" class="block w-full h-full object-cover">';
                  }
                   ?>
              <div class="artist-info absolute top-0 bg-gradient-to-t from-red to-transparent w-full h-full opacity-0 hover:opacity-100 transition-opacity duration-300 ease-in-out cursor-pointer">
              </div>
              <div class="artist-content absolute bottom-8 text-white text-center w-full px-4">
                <span class="font-bold font-expanded lowercase"><?php echo $name ?></span>
              </div>
            </a>
          </div>
          <?php
        } ?>
      </div>
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>