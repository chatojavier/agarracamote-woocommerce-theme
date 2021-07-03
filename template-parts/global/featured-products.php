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

<div class="products container mx-auto my-12 px-4 xl:px-0 py-8 relative">
	<h2 class="products-main-title main-title mb-8 text-xl text-center uppercase">
		<span class="main-title-inner">obras destacadas</span>
	</h2>
	<?php
	if ( $the_query->have_posts() ) {
		?>
		<div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-4">
			<?php
			while ( $the_query->have_posts() ) : $the_query->the_post();
				get_template_part( 'template-parts/global/product' );
			endwhile;
			?>
		</div>
		<?php
	}
	wp_reset_query()
	?>
	<a href="<?php echo get_permalink( 6 ) ?>">
        <div class="w-full flex justify-center">
            <div class="button-more button-rounded mt-8 inline-block">
                explora más obras
            </div>
        </div>
    </a>
	<!-- LISTAS PARA COLGAR Seal -->
	<?php
	global $post;
	$post_slug = $post->post_name;
	if($post_slug == "homepage") : ?>
	<div class="products-stamp absolute -top-4 right-0">
		<img src="<?php echo AWT_BUILD_IMG_URI . '/listas_para_colgar@1x.png' ?>" srcset="<?php echo AWT_BUILD_IMG_URI . '/listas_para_colgar@2x.png' ?>" alt="Listas para colgar" width="320">
	</div>
	<?php
	endif; ?>
</div>