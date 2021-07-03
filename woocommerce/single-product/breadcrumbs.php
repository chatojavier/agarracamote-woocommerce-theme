<?php
/**
 * Template-part: General - Breadcrumbs.
 *
 * To be used inside the WordPress loop.
 *
 * @package
 */

$artist = get_taxonomy('artista');
$artist_name = $artist->labels->name;
$artist_url = get_site_url() . '/' . $artist->rewrite['slug'];

$term = wp_get_post_terms($post->ID, 'artista')[0];
$term_name = $term->name;
$term_url  = get_term_link( $term );

$post_name = get_the_title();
$post_url = get_permalink();

?>

<div class="page-title w-full mb-10 border-b-1 border-solid">
    <?php if ($term) : ?>
    <span class="font-expanded font-bold"><a href="<?php echo $artist_url ?>" class="hover:text-red"><?php echo $artist_name ?></a> / <a href="<?php echo $term_url ?>" class="hover:text-red"><?php echo $term_name ?></a> / <?php echo $post_name ?></span>
    <?php else : ?>
    <span class="font-expanded font-bold"><?php echo $post_name ?></span>
    <?php endif; ?>
</div>