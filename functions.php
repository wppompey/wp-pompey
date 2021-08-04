<?php // (C) Copyright Bobbing Wide 2018

function wp_pompey_enqueue_scripts( ) {
	$parent_style = 'parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
			get_stylesheet_directory_uri() . '/style.css',
			array( $parent_style )
			);
	
}

function wp_pompey_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Site info', 'wp-pompey' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Add widgets here to appear in the site info sidebar.', 'wp-pompey' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

function wp_pompey_after_setup_theme() {
	add_theme_support( 'block-templates');
}

add_action( 'wp_enqueue_scripts', 'wp_pompey_enqueue_scripts' );


add_action( 'widgets_init', 'wp_pompey_widgets_init', 11 );

add_action( 'after_setup_theme', 'wp_pompey_after_setup_theme');


