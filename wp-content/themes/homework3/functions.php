<?php

function load_style () 
	{
	 wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	}

remove_filter( 'the_content', 'wpautop' ); 

?>
