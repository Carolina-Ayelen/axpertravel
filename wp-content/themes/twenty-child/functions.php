<?php
/*Font awesome */

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
}

//WhatsApp button
add_action('wp_footer', function () { ?>
	<a id="whatsapp" target="_blank" href='http://wa.me/5491168313308?text=Hola,%20quisiera%20cotizar'><img src="https://axpertravel.com/wp-content/uploads/2021/07/whatsapp-icon.png"></a>
<?php });

