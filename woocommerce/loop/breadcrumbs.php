<?php
/**
 * Template-part: Loop - Breadcrumbs.
 *
 * To be used inside the WordPress loop.
 *
 * @package
 */

$home = 'Inicio';

woocommerce_breadcrumb(array(
    'wrap_before' => '<div class="page-breadcrumbs | w-full mb-10 | border-b-1 border-solid | font-expanded font-bold">',
    'wrap_after'  => '</div>',
    'home'        => _x( $home, 'breadcrumb', 'woocommerce' ),
)); ?>
