<?php 
/* remove wordpress admin bar*/
add_action( 'get_header', 'remove_admin_bar');
function remove_admin_bar(){
	remove_action( 'wp_head', '_admin_bar_bump_cb');
}

/* add custom post types*/
add_action( 'init', 'create_products_post_type');
function create_products_post_type(){
	register_post_type( 'products', array( 
		'labels' => array('name' => __('Products'), 'singular_name' => __('Product')),
		'public' => true,
		'has_archive', true,
		'show_ui' => true,
		'capability_type' => 'post'
	) );
}

add_action( 'init', 'create_client_post_type');
function create_client_post_type(){
	register_post_type( 'client', array( 
		'labels' => array('name' => __('Clients'), 'singular_name' => __('Client')),
		'public' => true,
		'has_archive', true,
		'show_ui' => true
	) );

}

add_action( 'init', 'create_orders_post_type');
function create_orders_post_type(){

	register_post_type( 'orders', array( 
		'labels' => array('name' => __('Orders'), 'singular_name' => __('Order')),
		'public' => true,
		'has_archive', true,
		'show_ui' => true
	) );
}

add_action( 'save_post', 'save_orders');
function save_orders($post_id){

	if( get_post_type($post_id) != 'products' || wp_is_post_revision( $post_id ) ) return;

	if($_POST){

		$idProduct    = get_post_meta( $post_id, 'id_product', true );
		$idClient     = get_post_meta( $post_id, 'id_client', true );
		$productTitle = get_the_title( $post_id );
		
		wp_insert_post( array(
			'post_title' => $productTitle,
			'post_type' => 'orders',
			'post_status' => 'publish',
			'meta_value' => array('id_client', $idclient, 'id_product' => $idProduct )
		) );

	
	}


 
}
?>