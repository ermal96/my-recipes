<?php

/**
 * Enqueue scripts and styles.
 */
function my_recipes_scripts() {

	// enqueue styles.
	wp_enqueue_style(
		'fontawesome',
		get_template_directory_uri() . '/assets/library/fontawesome/css/all.min.css',
		array(),
		1
	);

	wp_enqueue_style(
		'bootstrap',
		get_template_directory_uri() . '/assets/library/bootstrap/css/bootstrap.min.css',
		array(),
		1
	);

	wp_enqueue_style(
		'swiperjs',
		get_template_directory_uri() . '/assets/library/swiperjs/css/swiper.min.css',
		array(),
		1
	);

	wp_enqueue_style(
		'my-recipes-style',
		get_stylesheet_uri(),
		array(),
		filemtime( get_template_directory() . '/style.css' )
	);

	// enqueue scripts.
	wp_enqueue_script(
		'bootstrap',
		get_template_directory_uri() . '/assets/library/bootstrap/js/bootstrap.min.js',
		array(),
		1,
		true
	);

	wp_enqueue_script(
		'swiperjs',
		get_template_directory_uri() . '/assets/library/swiperjs/js/swiper.min.js',
		array(),
		1,
		true
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



