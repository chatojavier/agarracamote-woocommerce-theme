<?php
/**
 * Template-part: featured.
 *
 * To be used inside the WordPress loop.
 *
 * @package
 */

// Current page.
$query_args = [
	'post_type'      => 'product',
	'posts_per_page' => $args['posts_per_page'],
	'paged'          => 1,
	'orderby'        => 'rand',
	'post_status'    => 'publish',
	'tax_query' => array(
		array(
		'taxonomy' => 'product_cat',
		'field' => 'term_id',
		'terms' => 27 // category: destacados
		)
	)
];

$the_query = new WP_Query( $query_args );
?>

<div class="featured-products products mx-auto my-12 md:py-4 lg:py-8 relative">
	<h2 class="products-main-title main-title mb-8 text-xl text-center uppercase">
		<span class="main-title-inner">obras destacadas</span>
	</h2>
	<?php
	if ( $the_query->have_posts() ) {
		?>
		<div class="featured-products__grid relative grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
			<?php
			while ( $the_query->have_posts() ) : $the_query->the_post();
				get_template_part( 'template-parts/global/product' );
			endwhile;
			wp_reset_query()
			?>
			<!-- LISTAS PARA COLGAR Seal -->
			<?php
			global $post;
			$post_slug = $post->post_name;
			if($post_slug == "homepage") : ?>
			<div class="products-stamp hidden md:block absolute -top-16 lg:-top-20 right-0 z-50 w-48 lg:w-64">
				<img src="<?php echo AWT_BUILD_IMG_URI . '/listas_para_colgar@1x.png' ?>" srcset="<?php echo AWT_BUILD_IMG_URI . '/listas_para_colgar@2x.png' ?>" alt="Listas para colgar" width="250">
			</div>
			<?php
			endif; ?> <!-- END LISTAS PARA COLGAR Seal -->
		</div>
		<?php
	}
	?>
	<a href="<?php echo get_permalink( 6 ) ?>">
        <div class="w-full flex justify-center">
            <div class="button-more button-rounded mt-8 inline-block text-center">
                explora más obras
            </div>
        </div>
    </a>
	
</div>