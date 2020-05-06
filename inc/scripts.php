<?php

/**
 * Enqueue scripts and styles.
 */
function my_recipes_scripts() {

	// enqueue styles.
	wp_enqueue_style(
		'fontawesome',
		'//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'
	);

	wp_enqueue_style(
		'bootstrap',
		'//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
	);

	wp_enqueue_style(
		'swiperjs',
		'//unpkg.com/swiper/css/swiper.min.css'
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
		'//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js',
		array(),
		1,
		true
	);

	wp_enqueue_script(
		'swiperjs',
		'//unpkg.com/swiper/js/swiper.min.js',
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



/**
 * Enqueue scripts and styles for block editor.
 */
function my_recipes_blocks_editor_style() {
	wp_register_style(
		'my-recipes-blocks-editor-theme',
		get_template_directory_uri() . '/editor.css',
		array(),
		filemtime( get_template_directory() . '/editor.css' )
	);
	wp_enqueue_style( 'my-recipes-blocks-editor-theme' );
}

add_action( 'enqueue_block_editor_assets', 'my_recipes_blocks_editor_style' );

