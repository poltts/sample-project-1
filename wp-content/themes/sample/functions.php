<?php 
add_action( 'get_header', 'remove_admin_bar');
function remove_admin_bar(){
	remove_action( 'wp_head', '_admin_bar_bump_cb');
}
?>