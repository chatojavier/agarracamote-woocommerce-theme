<?php
// Taxonomy Loop
/** 
 *  Get the Custom Taxonomy
 *  For a list of other parameters to pass in see link below
 *  @link https://developer.wordpress.org/reference/classes/wp_term_query/__construct/
 *  For a list of get_term return values see link below
 *  @link https://codex.wordpress.org/Function_Reference/get_term
 * 
 */ 
$terms = get_terms( array(
'taxonomy'   => 'artista', // Swap in your custom taxonomy name
'hide_empty' => true, 
));
shuffle($terms);

// Loop through all terms with a foreach loop
$i = 0;
foreach( $terms as $term ) {
    $i = $i +1;
    $img_id = get_field('image', $term);
    $name = $term->name;
    $url = get_term_link($term);
    ?>
    <div class="artist relative">
        <a href="<?php echo esc_url( $url ); ?>">  
            <div class="square-parent">
                <?php echo wp_get_attachment_image($img_id, "medium_large", "", array( "class" => "square-child" )); ?>
		    </div>
			<div class="artist-info absolute top-0 bg-gradient-to-t from-red to-transparent text-white w-full h-full flex justify-center items-end text-center opacity-0 hover:opacity-100 transition-opacity duration-300 ease-in-out cursor-pointer">
				<div class="artist-content mb-16">
					<span class="text-lg text-center font-bold font-expanded lowercase"><?php echo $name ?></span>
				</div>
			</div>
		</a>
	</div>
    <?php
    if($i >= 3) break;
}