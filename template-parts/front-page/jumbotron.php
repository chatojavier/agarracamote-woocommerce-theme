<?php
/**
 * Template-part: Jumbotron.
 *
 * To be used inside the WordPress loop.
 *
 * @package
 */
?>
<?php if( get_field('jumbotron', 28)) :
    $text_jumbo = get_field('jumbotron', 28)?>
<div class="jumbotron h-96 flex justify-center items-center flex-col">
    <div class="jumbotron-title text-red text-8xl font-gtsuper text-center">
        <span><?php echo $text_jumbo['title'] ?></span>
        <span class="fill-current">
            <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="70" viewBox="0 0 76 68">
            <g>
                <path class="st0" d="M18.5,68.4C7.7,68.4-1.1,52.9-1.1,34S7.7-0.4,18.5-0.4c10.8,0,19.6,15.4,19.6,34.4S29.3,68.4,18.5,68.4
                    M18.5,1.4C8.7,1.4,0.7,16.1,0.7,34s8,32.6,17.8,32.6S36.3,51.9,36.3,34S28.3,1.4,18.5,1.4"/>
                <path class="st0" d="M18.8,26.9c1,2.8,1.5,6.1,1.5,9.6c0,10-4.5,18.1-10.2,18.1c-5.6,0-10.2-8.1-10.2-18.1s4.5-18.1,10.2-18.1
                    c1.8,0,3.5,0.8,4.9,2.3l-4.9,15.9L18.8,26.9z"/>
                <path class="st0" d="M56.8,26.9c1,2.8,1.5,6.1,1.5,9.6c0,10-4.5,18.1-10.2,18.1c-5.6,0-10.2-8.1-10.2-18.1s4.5-18.1,10.2-18.1
                    c1.8,0,3.5,0.8,4.9,2.3l-4.9,15.9L56.8,26.9z"/>
                <path class="st0" d="M56.5,68.4c-10.8,0-19.6-15.4-19.6-34.4S45.7-0.4,56.5-0.4c10.8,0,19.6,15.4,19.6,34.4S67.3,68.4,56.5,68.4
                    M56.5,1.4c-9.8,0-17.8,14.6-17.8,32.6s8,32.6,17.8,32.6S74.3,51.9,74.3,34S66.3,1.4,56.5,1.4"/>
            </g>
            </svg>
        </span>
    </div>
    <div class="jumbotron-text text-red text-center font-expanded mt-10">
        <p><?php echo $text_jumbo['text'] ?></p>
    </div>
</div>
<?php endif; ?>