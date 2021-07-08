<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Agarracamote WooCommerce Theme
 */

get_header(); ?>


<main id="main" class="site-main max-w-1280 m-auto mt-4 p-4" role="main">

    <div class="error-404 not-found">

            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'storefront' ); ?></h1>
            </header><!-- .page-header -->

            <p><?php esc_html_e( 'Nothing was found at this location. Try searching, or check out the links below.', 'storefront' ); ?></p>

            <?php
            echo '<section aria-label="' . esc_html__( 'Search', 'agarracamote' ) . '">';

            the_widget( 'WC_Widget_Product_Search' );

            echo '</section>';

            echo '<div class="fourohfour-columns-2">';

                echo '<section class="col-1" aria-label="' . esc_html__( 'Featured Products', 'agarracamote' ) . '">';

                    get_template_part( 'template-parts/global/featured-products', "", array('posts_per_page' => 8) );

                echo '</section>';

                echo '<nav class="col-2" aria-label="' . esc_html__( 'Product Categories', 'agarracamote' ) . '">';

                    echo '<h2>' . esc_html__( 'Product Categories', 'agarracamote' ) . '</h2>';

                    the_widget(
                        'WC_Widget_Product_Categories',
                        array(
                            'count' => 1,
                        )
                    );

                echo '</nav>';

            echo '</div>';

            echo '<section aria-label="' . esc_html__( 'Popular Products', 'agarracamote' ) . '">';

                echo '<h2>' . esc_html__( 'Popular Products', 'agarracamote' ) . '</h2>';

                $shortcode_content = storefront_do_shortcode(
                    'best_selling_products',
                    array(
                        'per_page' => 4,
                        'columns'  => 4,
                    )
                );

                echo $shortcode_content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

            echo '</section>';
            ?>

    </div><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
