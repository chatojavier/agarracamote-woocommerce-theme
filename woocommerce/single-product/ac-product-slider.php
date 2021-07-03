<?php
/**
 * Template-part: General - Breadcrumbs.
 *
 * To be used inside the WordPress loop.
 *
 * @package
 */


global $product;
$gallery_image_ids = $product->get_gallery_image_ids();
$featured_image_id = $product->get_image_id();
?>

<!-- product Slider -->
<div class="product-slider relative flex-shrink-0" style="width: 600px">
	<?php if( count($gallery_image_ids) > 0 ): ?>
	<!-- Main Slider -->
	<div class="product-slider__carousel swiper-container bg-red" style="height: 600px">
		<div class="swiper-wrapper">
		<?php foreach($gallery_image_ids as $image_id):
		$image1x	= wp_get_attachment_image_src($image_id, 'shop_single');
		$image2x	= wp_get_attachment_image_src($image_id, 'shop_single_retina');
		$imageZoom	= wp_get_attachment_image_src($image_id, '1536x1536');
		?>
			<!-- Slide -->
			<div class="swiper-slide product-slider__carousel__product flex cursor-zoomin" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/src/img/Dual Ring-1s-80px.gif'); background-position: center; background-repeat: no-repeat; background-size: 40px" data-background="<?php echo $imageZoom[0]; ?>" onmousemove="zoomer(event)">
				<img width="<?php echo $image1x[1]; ?>" height="<?php echo $image1x[2]; ?>" data-src="<?php echo $image1x[0]; ?>" data-srcset="<?php echo $image2x[0]; ?> 2x" class="swiper-lazy object-cover hover:opacity-0 transition-opacity duration-500">
			</div>
		<?php endforeach; ?>
		</div>
			
	</div>
	<!-- If gallery is empty -->
	<?php elseif ( count($gallery_image_ids) <= 0):
		if($featured_image_id) :
			$image1x	= wp_get_attachment_image_src( $featured_image_id, 'shop_single' );
			$image2x	= wp_get_attachment_image_src( $featured_image_id, 'shop_single_retina' );
			$imageZoom	= wp_get_attachment_image_src( $featured_image_id, '1536x1536' );
			?>
			<!-- Featured Image -->
			<div class="swiper-slide product-slider__carousel__product flex cursor-zoomin bg-red" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/src/img/Dual Ring-1s-80px.gif'); background-position: center; background-repeat: no-repeat; background-size: 40px" data-background="<?php echo $imageZoom[0]; ?>" onmousemove="zoomer(event)">
				<img width="<?php echo $image1x[1]; ?>" height="<?php echo $image1x[2]; ?>" src="<?php echo $image1x[0]; ?>" srcset="<?php echo $image2x[0]; ?> 2x" class="object-cover hover:opacity-0 transition-opacity duration-500">
			</div>
		<?php else :
			$imageNull	= wc_placeholder_img_src('shop_single');
			?>
			<div class="swiper-slide product-slider__carousel__product flex bg-red" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/src/img/Dual Ring-1s-80px.gif'); background-position: center; background-repeat: no-repeat; background-size: 40px">
				<img src="<?php echo $imageNull; ?>" class="object-cover">
			</div>
		<?php endif; ?>

	<?php endif; ?>
	<!-- Thumbnail Slider -->
	<?php if(count($gallery_image_ids) > 1) : ?>
	<div thumbsSlider="" class="thumb-slider__carousel swiper-container mt-2">
		<div class="swiper-wrapper <?php echo count($gallery_image_ids) < 5 ? 'justify-center' : ''; ?>">
		<?php foreach($gallery_image_ids as $image_id):
		$image2x = wp_get_attachment_image_src($image_id, 'shop_thumbnail_retina');
		?>
			<!-- Slide -->
			<div class="swiper-slide thumb-slider__carousel__item bg-cover opacity-40 hover:opacity-100">
			<img width="<?php echo $image2x[1]; ?>" height="<?php echo $image2x[2]; ?>" src="<?php echo $image2x[0]; ?>">
			</div>
		<?php endforeach; ?>
		</div>
	</div>
	<!-- Add Arrows -->
	<?php if(count($gallery_image_ids) > 5) : ?>
	<div class="swiper-navigation">
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
	</div>
	<?php endif; ?>
	<?php endif; ?>
</div>
