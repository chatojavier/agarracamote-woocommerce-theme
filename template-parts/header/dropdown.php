<?php
/**
 * Header Navigation Dropdown.
 *
 * @package Advance WooCommerce Theme
 */

$list_terms = get_terms( array( 
    'taxonomy' => 'artista',
));

?>

    <div class="group relative | text-red | transition-all delay-75 ease-in-out">
        <div class="inline-flex items-center cursor-pointer" >
          <a href="<?php echo esc_url( $args['menu']->url ); ?>"><span class="mr-1"><?php echo esc_html( $args['menu']->title ); ?></span></a>
          <svg class="fill-current h-4 w-4 hidden lg:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" >
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
        </div>
        <ul class="hidden lg:block | h-0 group-hover:h-content opacity-0 group-hover:opacity-100 overflow-hidden | absolute left-0 top-full min-w-max py-3 px-2 | shadow bg-white border-l border-red text-sm | transition-all delay-75 ease-in-out z-10">
        <?php
            foreach ($list_terms as $term) {
                $term_name = $term->name;
                $term_link = get_term_link($term);
                echo '<li><a href="' . $term_link . '" class="block px-3 py-1 hover:bg-gray">' . $term_name . '</a></li>';
            }
        ?>
        </ul>
    </div>