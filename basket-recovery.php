<?php
/*
Plugin Name: Basket Recovery
Plugin URI: http://www.basketrecovery.net/wordpress
Description: Send automated reminder emails to customers that abandon their shopping carts. <a href='http://www.basketrecovery.net/customer.php'>Set up an account</a>, or get <a href='http://www.basketrecovery.net/wordpress'>more information</a> 
Version: 1.05
Author: BasketRecovery.net
Author URI: http://www.basketrecovery.net
License: GPL2
*/


function basket_recovery_add_tracking_code() {
    echo '<script src="https://web156.secure-secure.co.uk/basketrecovery.net/embed.js"></script>';
}
add_action('wp_footer', 'basket_recovery_add_tracking_code', 100);
?>
