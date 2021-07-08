<?php
/**
 * Template-part: featured artists.
 *
 * To be used inside the WordPress loop.
 *
 * @package
 */

?>
<div class="artists mx-auto my-5 md:my-10 lg:my-14 md:py-4 lg:py-8 relative">
	<h2 class="artists-main-title main-title mb-8 text-xl text-center uppercase">
		<span class="main-title-inner">Nuestros Artistas</span>
	</h2>
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4">
        <?php
        get_template_part( 'template-parts/front-page/artist' )
        ?>
    </div>
    <a href="<?php echo get_home_url() . '/artistas' ?>">
        <div class="w-full flex justify-center">
            <div class="button-more button-rounded mt-8 inline-block text-center">
                conoce a todos nuestros artistas
            </div>
        </div>
    </a>
    <div class="artists-stamp hidden md:block absolute -top-4 right-0 w-28 text-red fill-current">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 110"><path d="M.16,54A53.9,53.9,0,0,1,54.57,0a53.87,53.87,0,0,1,54.27,54c0,31.64-24.22,54-54.27,54C24.25,108,.16,85.64.16,54m8.73,2.91a64.3,64.3,0,0,1,3.18-19.72A15.26,15.26,0,0,1,6.51,32,51.64,51.64,0,0,0,1.75,50.82c.66,2.52,3,4.9,7.14,7.28ZM1.75,54.13A55.52,55.52,0,0,0,4.92,72.8c1.33,2.78,4.37,5.56,9.27,8.21A55.47,55.47,0,0,1,9,59.83c-3.58-2-6-4-7.28-6Zm39.71,51.23c-9.13-3.57-19.72-10.59-26.08-22.24A31.83,31.83,0,0,1,6.65,77.3a51,51,0,0,0,34.81,28.06M12.6,35.73A62.87,62.87,0,0,1,23.19,17.07,10.11,10.11,0,0,1,20,14,49.39,49.39,0,0,0,7.31,30.44C8.1,32.29,9.82,34,12.6,35.73M10.48,58.9a62.41,62.41,0,0,0,13.11,5V60.22a115.88,115.88,0,0,1,1.46-17.87A62.76,62.76,0,0,1,13.4,38a66.76,66.76,0,0,0-2.92,18.93ZM28.75,86.7a59.37,59.37,0,0,1-5-21.31,68.6,68.6,0,0,1-13.1-4.77,51.16,51.16,0,0,0,5.82,21.44A77.43,77.43,0,0,0,28.75,86.7M25.31,41A91,91,0,0,1,31.8,20.77a35.51,35.51,0,0,1-7.42-3,63.19,63.19,0,0,0-10.45,18.8A52.52,52.52,0,0,0,25.31,41M45.7,105.36A37.5,37.5,0,0,1,29.55,88.29a84.85,84.85,0,0,1-12-4.11,49.65,49.65,0,0,0,28.2,21.18M24.12,16A47.9,47.9,0,0,1,40.27,3.43c0-.13,0-.13-.13-.26A51.78,51.78,0,0,0,21.21,13.1,7.53,7.53,0,0,0,24.12,16m1.06,48.32A120.65,120.65,0,0,0,42.65,67.5V62.87c0-6,.13-11.78.4-17.34a93.18,93.18,0,0,1-16.42-2.78,100.11,100.11,0,0,0-1.58,17.74,36.73,36.73,0,0,0,.13,3.84m7.28-44.75A44.83,44.83,0,0,1,43.05,5.15a5.37,5.37,0,0,1-1.72-.92A50.92,50.92,0,0,0,25.18,16.67a43,43,0,0,0,7.28,2.91M44.77,89.74a189.42,189.42,0,0,1-2.12-20.91,122.08,122.08,0,0,1-17.34-3c.53,8.87,2.52,15.89,5.3,21.32a99.16,99.16,0,0,0,14.16,2.64M43.05,44.2q.6-11.72,2-21a75.44,75.44,0,0,1-11.78-2A86.86,86.86,0,0,0,26.9,41.42,98.46,98.46,0,0,0,43.05,44.2m7.68,62C48.21,103.38,46.49,98,45,91.07A94.74,94.74,0,0,1,31.4,88.82C37.09,99.27,45,104.44,50.73,106.16M45.3,21.83A70.31,70.31,0,0,1,49,6.48a22.91,22.91,0,0,1-4.64-.8c-4,3.18-7.54,8-10.59,14.17a74.67,74.67,0,0,0,11.52,2M41.86,2.64l-.13.13Zm2.38,1.59a27.43,27.43,0,0,1,3.31-2.12,27.11,27.11,0,0,0-4.63,1.45Zm.4,41.43c-.27,5.83-.4,11.65-.4,17.61v4.37a94.76,94.76,0,0,0,10.33.52,90.7,90.7,0,0,0,10.19-.52c.13-1.46.13-2.92.13-4.37,0-6-.13-11.78-.53-17.61a81.83,81.83,0,0,1-9.79.53,85.52,85.52,0,0,1-9.93-.53m-.4,23.43a137.88,137.88,0,0,0,2.25,20.79c2.65.26,5.3.39,8.08.39s5.29-.13,8.07-.39a138.68,138.68,0,0,0,2.12-20.79c-3.57.27-6.88.4-10.19.4s-6.76-.13-10.33-.4m2.52-45.8c-.93,6.35-1.73,13.37-2.12,21.05a84.71,84.71,0,0,0,9.93.53,84,84,0,0,0,9.79-.53q-.6-11.52-2-21.05c-2.65.26-5.3.4-7.81.4a76.44,76.44,0,0,1-7.81-.4m2.78-18a21.64,21.64,0,0,1,2-3.58A24,24,0,0,0,45.7,4.62a29,29,0,0,0,3.84.67m12.84,86c-2.65.13-5.3.27-7.81.27s-5.3-.14-7.81-.27c1.72,9,4.5,15.36,7.81,15.36s5.82-6.36,7.81-15.36M50.33,6.61A96.76,96.76,0,0,0,46.89,22a75.81,75.81,0,0,0,7.68.39A73.23,73.23,0,0,0,62.11,22c-.92-6.36-2-11.65-3.44-15.36-1.59.13-3.05.26-4.1.26-1.2,0-2.65-.13-4.24-.26m.53-1.19a34.07,34.07,0,0,0,3.71.13,32.77,32.77,0,0,0,3.57-.13C57,2.64,55.76,1.18,54.57,1.18s-2.52,1.46-3.71,4.24m8.74-.13a31.21,31.21,0,0,0,3.7-.67,21.88,21.88,0,0,0-5.82-2.91A22,22,0,0,1,59.6,5.29M58.27,106.16c5.69-1.72,13.9-6.89,19.33-17.34A91.77,91.77,0,0,1,64,91.07c-1.19,6.88-3.17,12.31-5.69,15.09M63.7,21.83a74.67,74.67,0,0,0,11.52-2c-3-6.22-6.62-11-10.59-14.17a19.91,19.91,0,0,1-4.5.8A72,72,0,0,1,63.7,21.83m1.06-17.6,1.46-.67a33.35,33.35,0,0,0-4.77-1.45,27.43,27.43,0,0,1,3.31,2.12M63.44,105.36A49.84,49.84,0,0,0,91.5,84.18a84.85,84.85,0,0,1-12,4.11,38.82,38.82,0,0,1-16,17.07M66,44.2a102.56,102.56,0,0,0,16.28-2.78,86.39,86.39,0,0,0-6.35-20.25,74.55,74.55,0,0,1-11.92,2q1.4,9.33,2,21M64.23,89.74A99.16,99.16,0,0,0,78.39,87.1c2.78-5.43,4.77-12.45,5.3-21.32a122.34,122.34,0,0,1-17.34,3,125.39,125.39,0,0,1-2.12,20.91M76.67,19.58a45.94,45.94,0,0,0,7.15-2.91A50.92,50.92,0,0,0,67.67,4.23,5.37,5.37,0,0,1,66,5.15,47,47,0,0,1,76.67,19.58M66.35,67.5a120.65,120.65,0,0,0,17.47-3.17A36.73,36.73,0,0,0,84,60.49,113.93,113.93,0,0,0,82.5,42.75a99.71,99.71,0,0,1-16.42,2.78c.14,5.56.27,11.38.27,17.34Zm.92-64.73-.13-.13Zm.27,102.59A51,51,0,0,0,102.35,77.3a33,33,0,0,1-8.6,5.82c-6.49,11.65-17.08,18.67-26.21,22.24M85,16a8.72,8.72,0,0,0,2.92-2.91A52.46,52.46,0,0,0,68.86,3.17c0,.13,0,.13-.13.26A48.22,48.22,0,0,1,85,16M83.69,41a54.17,54.17,0,0,0,11.52-4.5,66.46,66.46,0,0,0-10.46-18.8,34.06,34.06,0,0,1-7.55,3A84.26,84.26,0,0,1,83.69,41M80.25,86.7a84.38,84.38,0,0,0,12.44-4.64,51,51,0,0,0,5.69-21.44,64.09,64.09,0,0,1-13,4.77A62.1,62.1,0,0,1,80.25,86.7m5.16-22.77a62.41,62.41,0,0,0,13.11-5v-2A66.76,66.76,0,0,0,95.6,38,56.23,56.23,0,0,1,84,42.35a101.9,101.9,0,0,1,1.59,17.87,35.38,35.38,0,0,1-.13,3.71m11.12-28.2a14.26,14.26,0,0,0,5.29-5.29A51.53,51.53,0,0,0,89,14a10.11,10.11,0,0,1-3.17,3.05A66.15,66.15,0,0,1,96.53,35.73m10.86,18.14a22.74,22.74,0,0,1-7.42,6A55.47,55.47,0,0,1,94.81,81c4.9-2.65,7.94-5.43,9.4-8.21a55.28,55.28,0,0,0,3.18-18.67ZM100.1,58.1c4.11-2.38,6.49-4.76,7.15-7.28A51.64,51.64,0,0,0,102.49,32a15.26,15.26,0,0,1-5.56,5.16,60.6,60.6,0,0,1,3.17,19.72Z" transform="translate(-0.16 0.01)"/></svg>
    </div>
</div>