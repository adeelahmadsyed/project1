<?php

/*
 * Plugin Name: Adeel
*/

add_filter("woocommerce_checkout_fields", "newFunc");

function newFunc ($fields) {
	echo "<pre>";
	print_r($fields);
	echo "</pre>";

}
