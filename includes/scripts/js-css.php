<?php

/**
 * Enqueue scripts and styles.
 */
function my_recipes_scripts() {

	// enqueue styles.
	wp_enqueue_style(
		'opensans',
		'//fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap',
		array(),
		1
	);

	wp_enqueue_style(
		'ptsans',
		'//fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap',
		array(),
		1
	);


	wp_enqueue_style(
		'my-recipes-style',
		get_stylesheet_uri(),
		array(),
		filemtime( get_template_directory() . '/style.css' )
	);

	wp_enqueue_style(
		'fontawesome',
		get_template_directory_uri() . '/assets/fonts/fontawesome/css/all.min.css',
		array(),
		1
	);


	wp_enqueue_style( 'dashicons' );
	wp_enqueue_script(
		'my-recipes-scripts',
		get_template_directory_uri() . '/scripts.min.js',
		array(
			'jquery',
			'customize-preview',
		),
		filemtime( get_template_directory() . '/scripts.min.js' ),
		true
	);
	wp_localize_script(
		'my-recipes-scripts',
		'MrAjax',
		array(
			'ajaxurl'  => admin_url( 'admin-ajax.php' ),
			'security' => wp_create_nonce( 'mr-special-string-for-ajax' ),
		)
	);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'my_recipes_scripts' );



