<?php
/**
 * Footer template
 *
 * @package agarracamote WooCommerce Theme
 */

$menu_class = new agarracamote_Woocommerce_Theme_Menus();
$footer_menu_id = $menu_class->get_menu_id( 'awt-footer-menu' );
$footer_menus = wp_get_nav_menu_items( $footer_menu_id );
?>


<footer class="absolute bottom-0">
	<div class="footer py-3 px-6 text-red">
		<div class="mx-auto md:flex justify-between">
			<div class="footer-text flex-none md:flex items-center justify-between">
				<p class="font-bold font-expanded text-xs">© Agarracamote <?php echo date("Y"); ?>. Todos los derechos reservados.</p>
				<ul>
					<?php


					if ( ! empty( $footer_menus ) && is_array( $footer_menus ) ) {
						foreach ( $footer_menus as $footer_menu ) {
							printf(
								'<li><a class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-blue-400 mr-10" href="%1$s">%2$s</a></li>',
								esc_url( $footer_menu->url ),
								esc_html( $footer_menu->title )
							);
						}

					}

					?>
				</ul>
			</div>
			<ul class="credit-cards flex align-center fill-current">
				<li>
					<svg xmlns="http://www.w3.org/2000/svg" width="50" viewBox="0 0 38 38">
					<title>Visa</title><path d="M33,8a4,4,0,0,1,4,4V26a4,4,0,0,1-4,4H5a4,4,0,0,1-4-4V12A4,4,0,0,1,5,8H33m0-1H5a5,5,0,0,0-5,5V26a5,5,0,0,0,5,5H33a5,5,0,0,0,5-5V12a5,5,0,0,0-5-5Z"/><path d="M15.76,15.56l-2.87,6.89H11L9.61,17a.75.75,0,0,0-.42-.61,7.69,7.69,0,0,0-1.74-.59l0-.2h3a.84.84,0,0,1,.82.71l.74,4,1.84-4.69Zm7.33,4.64c0-1.81-2.5-1.91-2.48-2.73,0-.24.24-.51.75-.57a3.32,3.32,0,0,1,1.75.3l.31-1.46a4.93,4.93,0,0,0-1.66-.3c-1.75,0-3,.93-3,2.28,0,1,.88,1.54,1.55,1.87s.92.56.92.86c0,.46-.55.66-1.06.67a3.66,3.66,0,0,1-1.82-.43L18,22.2a5.41,5.41,0,0,0,2,.36c1.86,0,3.07-.92,3.08-2.36m4.62,2.25h1.63l-1.42-6.89H26.41a.82.82,0,0,0-.76.51L23,22.45h1.86l.36-1h2.27Zm-2-2.44.94-2.58L27.2,20Zm-7.44-4.45-1.46,6.89H15.06l1.46-6.89Z"/>
					</svg>
				</li>
				<li class="ml-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="50" viewBox="0 0 38 38">
						<title>Mastercard</title><path d="M33,8a4,4,0,0,1,4,4V26a4,4,0,0,1-4,4H5a4,4,0,0,1-4-4V12A4,4,0,0,1,5,8H33m0-1H5a5,5,0,0,0-5,5V26a5,5,0,0,0,5,5H33a5,5,0,0,0,5-5V12a5,5,0,0,0-5-5Z"/><path d="M18.11,15.08a4.75,4.75,0,1,0,0,7.84,5.93,5.93,0,0,1,0-7.84Z"/><circle cx="22.56" cy="19" r="4.75"/>
						</svg>
				</li>
				<li class="ml-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="50" viewBox="0 0 38 38">
							<title>Discover</title><path d="M33,8a4,4,0,0,1,4,4V26a4,4,0,0,1-4,4H5a4,4,0,0,1-4-4V12A4,4,0,0,1,5,8H33m0-1H5a5,5,0,0,0-5,5V26a5,5,0,0,0,5,5H33a5,5,0,0,0,5-5V12a5,5,0,0,0-5-5Z"/><path d="M20.19,16.76A2.24,2.24,0,1,0,22.49,19,2.28,2.28,0,0,0,20.19,16.76ZM8.42,21.12H9.2V16.87H8.42ZM7,17.39A2.23,2.23,0,0,0,6.31,17a3,3,0,0,0-.84-.13H3.75v4.25H5.38A2.89,2.89,0,0,0,6.19,21a2.5,2.5,0,0,0,.74-.39,2,2,0,0,0,.55-.67A1.87,1.87,0,0,0,7.7,19a2.25,2.25,0,0,0-.19-.94A2,2,0,0,0,7,17.39Zm-.28,2.27a1.27,1.27,0,0,1-.38.45,1.91,1.91,0,0,1-.56.25,3.1,3.1,0,0,1-.69.08H4.53V17.56h.71a2.3,2.3,0,0,1,.66.08,1.48,1.48,0,0,1,.52.25,1.12,1.12,0,0,1,.34.45,1.62,1.62,0,0,1,.12.66A1.34,1.34,0,0,1,6.74,19.66Zm5.61-.76a2,2,0,0,0-.5-.21l-.5-.17a1.5,1.5,0,0,1-.38-.19.38.38,0,0,1-.16-.33.41.41,0,0,1,.07-.25.44.44,0,0,1,.16-.17.6.6,0,0,1,.23-.1,1.09,1.09,0,0,1,.26,0,1.22,1.22,0,0,1,.43.08.66.66,0,0,1,.33.26l.57-.59a1.46,1.46,0,0,0-.58-.33,2.19,2.19,0,0,0-.67-.11,2.33,2.33,0,0,0-.59.08,1.46,1.46,0,0,0-.52.24,1.25,1.25,0,0,0-.36.4,1,1,0,0,0-.14.57,1.07,1.07,0,0,0,.15.6,1.22,1.22,0,0,0,.39.36,2.29,2.29,0,0,0,.5.22l.5.16a1.27,1.27,0,0,1,.38.22.5.5,0,0,1,.08.61.49.49,0,0,1-.17.18.8.8,0,0,1-.25.11.84.84,0,0,1-.27,0,1.07,1.07,0,0,1-.87-.45l-.58.56a1.57,1.57,0,0,0,.64.44,2.38,2.38,0,0,0,.79.13,2.43,2.43,0,0,0,.61-.08,1.73,1.73,0,0,0,.51-.25,1.47,1.47,0,0,0,.35-.43,1.38,1.38,0,0,0,.13-.59,1,1,0,0,0-.16-.61A1.22,1.22,0,0,0,12.35,18.9ZM28,19.29h2V18.6H28v-1h2.12v-.69h-2.9v4.25h3v-.68H28Zm5.13-.05a1.17,1.17,0,0,0,.75-.37,1.2,1.2,0,0,0,.26-.78A1.14,1.14,0,0,0,34,17.5a1.09,1.09,0,0,0-.36-.38,1.69,1.69,0,0,0-.52-.19,3.08,3.08,0,0,0-.61-.06H31v4.25h.78v-1.8h.57l1,1.8h.94Zm-.42-.58h-.94V17.52h.67l.31,0a1.15,1.15,0,0,1,.28.07.46.46,0,0,1,.21.18.45.45,0,0,1,.08.3.51.51,0,0,1-.08.32.52.52,0,0,1-.23.18A.94.94,0,0,1,32.67,18.66ZM16.29,20.42a1.07,1.07,0,0,1-.51.13,1.52,1.52,0,0,1-.62-.12,1.43,1.43,0,0,1-.47-.33,1.69,1.69,0,0,1-.31-.5,1.81,1.81,0,0,1-.1-.63,1.45,1.45,0,0,1,.41-1.08,1.27,1.27,0,0,1,.47-.32,1.52,1.52,0,0,1,.62-.12,1.42,1.42,0,0,1,.45.08,1.33,1.33,0,0,1,.46.34l.61-.43a1.81,1.81,0,0,0-.71-.52,2.18,2.18,0,0,0-.82-.16,2.75,2.75,0,0,0-.93.16,2.21,2.21,0,0,0-.73.46,2.12,2.12,0,0,0-.48.71,2.52,2.52,0,0,0-.17.93,2.37,2.37,0,0,0,.17.9,2.08,2.08,0,0,0,.48.7,2,2,0,0,0,.73.45,2.52,2.52,0,0,0,.93.16,2.34,2.34,0,0,0,.91-.18,1.79,1.79,0,0,0,.72-.57L16.76,20A1.4,1.4,0,0,1,16.29,20.42Zm8.35-.33-1.19-3.22h-.89l1.71,4.25H25l1.76-4.25h-.84Z"/>
						</svg>
				</li>
				<li class="ml-2">
					<svg xmlns="http://www.w3.org/2000/svg" width="50" viewBox="0 0 38 38">
					<title>Amex</title><path d="M33,8a4,4,0,0,1,4,4V26a4,4,0,0,1-4,4H5a4,4,0,0,1-4-4V12A4,4,0,0,1,5,8H33m0-1H5a5,5,0,0,0-5,5V26a5,5,0,0,0,5,5H33a5,5,0,0,0,5-5V12a5,5,0,0,0-5-5Z"/><path d="M18.66,16.5H18l-1.49,3.19L15,16.5H13v4.23L11.08,16.5H9.18L7,21.5H8.49l.45-1.11h2.34l.48,1.11h2.49V17.89l1.67,3.61h1.21l1.53-3.31V21.5H20v-5H18.66ZM9.41,19.25l.67-1.66.71,1.66Z"/><path d="M31,16.5H29.24L27.82,18,26.43,16.5H20.92v5h5.4l1.48-1.58,1.44,1.58H31L28.69,19ZM25,21v-.65H22.21v-.79H25V18.43H22.21v-.79H25v-.75L26.93,19Z"/>
					</svg>
				</li>
			</ul>
		</div>
	</div>

</footer>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
