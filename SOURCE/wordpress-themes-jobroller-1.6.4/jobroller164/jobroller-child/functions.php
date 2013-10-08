<?php

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_jobroller_child_taxonomies', 0 );

//create two taxonomies, genres and writers for the post type "book"
function create_jobroller_child_taxonomies() 
{

	register_taxonomy( 'job_cities',
				array('job_listing'),
				array('hierarchical' => true,                    
						'labels' => array(
								'name' => _x( 'Job Cities', 'taxonomy singular name'),
								'singular_name' => _x( 'Job Cities', 'taxonomy singular name'),
								'search_items' =>  __( 'Search Job Cities'),
								'all_items' => __( 'All Job Cities'),
								'edit_item' => __( 'Edit Job City'),
								'update_item' => __( 'Update Job City'),
								'add_new_item' => __( 'Add New City'),
								'new_item_name' => __( 'New City Name')
						),
						'query_var' => true,
						'show_ui'  => true,
				));		
		
	register_taxonomy_for_object_type('job_cities', 'job_listing' );
}

?>