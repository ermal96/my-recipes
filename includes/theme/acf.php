<?php

/**
 * Define path and URL to the ACF plugin.
 */
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/includes/library/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/includes/library/acf/' );

/**
 * Customize the url setting to fix incorrect asset URLs.
 */
function my_acf_settings_url( $url ) {
	return MY_ACF_URL;
}
add_filter( 'acf/settings/url', 'my_acf_settings_url' );


/**
 * Include the ACF plugin.
 */
require_once MY_ACF_PATH . 'acf.php';


/**
 * Hide the ACF admin menu item.
 */
function my_acf_settings_show_admin( $show_admin ) {
	return false;
}
add_filter( 'acf/settings/show_admin', 'my_acf_settings_show_admin' );




if ( function_exists( 'acf_add_local_field_group' ) ) :

	acf_add_local_field_group(
		array(
			'key'                   => 'group_5eb511b3940fa',
			'title'                 => 'Collection Data',
			'fields'                => array(
				array(
					'key'               => 'field_5eb511c74bf1e',
					'label'             => 'Collection Color',
					'name'              => 'collection_color',
					'type'              => 'color_picker',
					'instructions'      => 'Please insert collection color',
					'required'          => 1,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '#ffc107',
				),
				array(
					'key'               => 'field_5eb512114bf1f',
					'label'             => 'Collection Image',
					'name'              => 'collection_image',
					'type'              => 'image',
					'instructions'      => 'Please Insert collection image',
					'required'          => 1,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'return_format'     => 'url',
					'preview_size'      => 'thumbnail',
					'library'           => 'all',
					'min_width'         => '',
					'min_height'        => '',
					'min_size'          => '',
					'max_width'         => '',
					'max_height'        => '',
					'max_size'          => '',
					'mime_types'        => '',
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'taxonomy',
						'operator' => '==',
						'value'    => 'collection',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'active'                => 1,
			'description'           => '',
		)
	);

	acf_add_local_field_group(
		array(
			'key'                   => 'group_5eb50f247956d',
			'title'                 => 'Recipe Data',
			'fields'                => array(
				array(
					'key'               => 'field_5eb50f39c0382',
					'label'             => 'Recipe Time',
					'name'              => 'recipe_time',
					'type'              => 'number',
					'instructions'      => 'Please insert recipe time',
					'required'          => 1,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '33',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
					'min'               => '',
					'max'               => '',
					'step'              => '',
				),
				array(
					'key'               => 'field_5eb50fb0c0383',
					'label'             => 'Recipe Skill Level',
					'name'              => 'recipe_skill_level',
					'type'              => 'select',
					'instructions'      => 'Please insert recipe skill level',
					'required'          => 1,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '27',
						'class' => '',
						'id'    => '',
					),
					'choices'           => array(
						1 => '1',
						2 => '2',
						3 => '3',
					),
					'default_value'     => array(),
					'allow_null'        => 0,
					'multiple'          => 0,
					'ui'                => 0,
					'return_format'     => 'value',
					'ajax'              => 0,
					'placeholder'       => '',
				),
				array(
					'key'               => 'field_5eb50fecc0384',
					'label'             => 'Recipe Serves',
					'name'              => 'recipe_serves',
					'type'              => 'number',
					'instructions'      => 'Please insert recipe serves',
					'required'          => 1,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '33',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
					'min'               => '',
					'max'               => '',
					'step'              => '',
				),
				array(
					'key'               => 'field_5eb5104b433d9',
					'label'             => 'Recipe Ingredients',
					'name'              => 'recipe_ingredients',
					'type'              => 'repeater',
					'instructions'      => 'Please insert recipe ingredients',
					'required'          => 1,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'collapsed'         => 'field_5eb51070433da',
					'min'               => 0,
					'max'               => 0,
					'layout'            => 'table',
					'button_label'      => '',
					'sub_fields'        => array(
						array(
							'key'               => 'field_5eb51070433da',
							'label'             => 'Ingredient',
							'name'              => 'recipe_ingredient',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
							'maxlength'         => '',
						),
					),
				),
				array(
					'key'               => 'field_5eb510a620157',
					'label'             => 'Recipe Preparation Method',
					'name'              => 'recipe_preparation_method',
					'type'              => 'wysiwyg',
					'instructions'      => 'Please insert recipe preparation method',
					'required'          => 1,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'tabs'              => 'all',
					'toolbar'           => 'basic',
					'media_upload'      => 0,
					'delay'             => 0,
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'recipe',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'active'                => 1,
			'description'           => '',
		)
	);

	endif;
