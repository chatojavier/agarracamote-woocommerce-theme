<?php

/**
 * Agency Content Template.
 */


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

<div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

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