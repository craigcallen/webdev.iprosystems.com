<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_64777fd61df26',
	'title' => 'Departments',
	'fields' => array(
		array(
			'key' => 'field_64777fd6e8754',
			'label' => 'Departments',
			'name' => 'arg_departments',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => 'Please use the fields provided to update the department details on your website.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_save_meta' => 0,
			'layout' => 'block',
			'acfe_seamless_style' => 1,
			'acfe_group_modal' => 0,
			'acfe_group_modal_close' => 0,
			'acfe_group_modal_button' => '',
			'acfe_group_modal_size' => 'large',
			'sub_fields' => array(
				array(
					'key' => 'field_64c270759b963',
					'label' => 'Department Icon',
					'name' => 'arg_department_icon',
					'aria-label' => '',
					'type' => 'select',
					'instructions' => 'Connor - Do you see this? V5',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_save_meta' => 0,
					'choices' => array(
						'myicons-solid--basket-shopping-solid' => 'Basket Shopping',
						'myicons-solid--bowl-scoops-solid' => 'Bowl Ice Cream Scoop',
						'myicons-solid--bowl-soft-serve-solid' => 'Bowl Soft Serve',
						'myicons-solid--cake-candles-solid' => 'Cake with Candles',
						'myicons-solid--carrot-solid' => 'Carrot',
						'myicons-solid--cart-shopping-solid' => 'Cart Shopping',
						'myicons-solid--cheese-swiss-solid' => 'Cheese',
						'myicons-solid--mug-hot-solid' => 'Coffee Mug Hot',
						'myicons-solid--crab-solid' => 'Crab',
						'myicons-solid--crate-apple-solid' => 'Crate with Apples',
						'myicons-solid--cupcake-solid' => 'Cupcake',
						'myicons-solid--farm-solid' => 'Farm',
						'myicons-solid--fish-solid' => 'Fish',
						'myicons-solid--fish-fins-solid' => 'Fish with Fins',
						'myicons-solid--flower-solid' => 'Flower',
						'myicons-solid--flower-tulip-solid' => 'Flower Tulip',
						'myicons-solid--hat-chef-solid' => 'Hat Chef',
						'myicons-solid--ice-cream-solid' => 'Ice Cream',
						'myicons-solid--lobster-solid' => 'Lobster',
						'myicons-solid--meat-solid' => 'Meat',
						'myicons-solid--pepper-hot-solid' => 'Pepper Hot',
						'myicons-solid--pineapple-solid' => 'Pineapple',
						'myicons-solid--pizza-slice-solid' => 'Pizza Slice',
						'myicons-solid--prescription-bottle-pill-solid' => 'Prescription Pill Bottle',
						'myicons-solid--prescription-solid' => 'Prescription',
						'myicons-solid--sandwich-solid' => 'Sandwich',
						'myicons-solid--spray-can-sparkles-solid' => 'Spray Can',
						'myicons-solid--steak-solid' => 'Steak',
						'myicons-solid--strawberry-solid' => 'Stawberry',
						'myicons-solid--tomato-solid' => 'Tomato',
						'myicons-solid--screwdriver-wrench-solid' => 'Tools',
						'myicons-solid--wine-bottle-solid' => 'Wine Bottle',
						'myicons-solid--wine-glass-solid' => 'Wine Glass',
					),
					'default_value' => false,
					'return_format' => 'value',
					'multiple' => 0,
					'max' => '',
					'allow_custom' => 0,
					'placeholder' => 'Select Icon',
					'search_placeholder' => '',
					'prepend' => '',
					'append' => '',
					'allow_null' => 1,
					'ui' => 1,
					'ajax' => 0,
					'min' => '',
				),
				array(
					'key' => 'field_64c26f659b960',
					'label' => 'Department Creative Heading',
					'name' => 'arg_department_creative_heading',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => 'Use ChatGPT to create a creative heading from the creative copy.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_save_meta' => 0,
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
				),
				array(
					'key' => 'field_64c26f7c9b961',
					'label' => 'Department Creative Summary',
					'name' => 'arg_department_creative_summary',
					'aria-label' => '',
					'type' => 'wysiwyg',
					'instructions' => 'Use ChatGPT to create a 350 character creative piece from the department copy.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_save_meta' => 0,
					'default_value' => '',
					'acfe_wysiwyg_height' => 150,
					'acfe_wysiwyg_max_height' => '',
					'acfe_wysiwyg_valid_elements' => '',
					'acfe_wysiwyg_custom_style' => '',
					'acfe_wysiwyg_disable_wp_style' => 0,
					'acfe_wysiwyg_autoresize' => 0,
					'acfe_wysiwyg_disable_resize' => 0,
					'acfe_wysiwyg_remove_path' => 0,
					'acfe_wysiwyg_menubar' => 0,
					'acfe_wysiwyg_transparent' => 0,
					'acfe_wysiwyg_merge_toolbar' => 0,
					'acfe_wysiwyg_custom_toolbar' => 0,
					'tabs' => 'visual',
					'toolbar' => 'basic',
					'media_upload' => 0,
					'delay' => 0,
					'acfe_wysiwyg_auto_init' => 0,
					'acfe_wysiwyg_min_height' => 300,
					'acfe_wysiwyg_toolbar_buttons' => array(
					),
				),
				array(
					'key' => 'field_64c271209b964',
					'label' => 'Department Phone Number',
					'name' => 'arg_department_phone_number',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_save_meta' => 0,
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
				),
				array(
					'key' => 'field_64e38f725caf5',
					'label' => 'Department Opening Hours',
					'name' => 'arg_department_opening_hours',
					'aria-label' => '',
					'type' => 'time_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'acfe_save_meta' => 0,
					'display_format' => 'g:i A',
					'return_format' => 'g:i a',
					'placeholder' => '',
					'min_time' => '',
					'max_time' => '',
					'min_hour' => '',
					'max_hour' => '',
					'min_min' => '',
					'max_min' => '',
					'min_sec' => '',
					'max_sec' => '',
				),
				array(
					'key' => 'field_64e38fb45caf6',
					'label' => 'Department Closing Hours',
					'name' => 'arg_department_closing_hours',
					'aria-label' => '',
					'type' => 'time_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'acfe_save_meta' => 0,
					'display_format' => 'g:i A',
					'return_format' => 'g:i a',
					'placeholder' => '',
					'min_time' => '',
					'max_time' => '',
					'min_hour' => '',
					'max_hour' => '',
					'min_min' => '',
					'max_min' => '',
					'min_sec' => '',
					'max_sec' => '',
				),
				array(
					'key' => 'field_64c271859b965',
					'label' => 'Department Online Ordering URL',
					'name' => 'arg_department_online_ordering_url',
					'aria-label' => '',
					'type' => 'link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_save_meta' => 0,
					'return_format' => 'url',
				),
				array(
					'key' => 'field_647780cee8756',
					'label' => 'Department Hero Image',
					'name' => 'arg_department_hero_image',
					'aria-label' => '',
					'type' => 'image',
					'instructions' => 'Image dimensions are 2560x1500.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_save_meta' => 0,
					'uploader' => 'wp',
					'return_format' => 'url',
					'library' => 'all',
					'upload_folder' => '',
					'acfe_thumbnail' => 1,
					'min_width' => 2560,
					'min_height' => 1500,
					'min_size' => '',
					'max_width' => 2560,
					'max_height' => 1500,
					'max_size' => '',
					'mime_types' => 'jpg, jpeg',
					'preview_size' => 'medium',
				),
				array(
					'key' => 'field_6477808fe8755',
					'label' => 'Department Copy',
					'name' => 'arg_department_copy',
					'aria-label' => '',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_save_meta' => 0,
					'default_value' => '',
					'acfe_wysiwyg_height' => 150,
					'acfe_wysiwyg_max_height' => '',
					'acfe_wysiwyg_valid_elements' => '',
					'acfe_wysiwyg_custom_style' => '',
					'acfe_wysiwyg_disable_wp_style' => 0,
					'acfe_wysiwyg_autoresize' => 0,
					'acfe_wysiwyg_disable_resize' => 0,
					'acfe_wysiwyg_remove_path' => 0,
					'acfe_wysiwyg_menubar' => 0,
					'acfe_wysiwyg_transparent' => 0,
					'acfe_wysiwyg_merge_toolbar' => 0,
					'acfe_wysiwyg_custom_toolbar' => 0,
					'tabs' => 'visual',
					'toolbar' => 'basic',
					'media_upload' => 0,
					'delay' => 0,
					'acfe_wysiwyg_auto_init' => 0,
					'acfe_wysiwyg_min_height' => 300,
					'acfe_wysiwyg_toolbar_buttons' => array(
					),
				),
				array(
					'key' => 'field_64c26f909b962',
					'label' => 'Department Locations',
					'name' => 'arg_department_locations',
					'aria-label' => '',
					'type' => 'relationship',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_save_meta' => 0,
					'post_type' => array(
						0 => 'location',
					),
					'post_status' => '',
					'taxonomy' => '',
					'filters' => array(
						0 => 'search',
					),
					'return_format' => 'object',
					'acfe_add_post' => 0,
					'acfe_edit_post' => 1,
					'acfe_bidirectional' => array(
						'acfe_bidirectional_enabled' => '1',
						'acfe_bidirectional_related' => array(
							0 => 'field_64c3ef6e8093b',
						),
					),
					'min' => '',
					'max' => '',
					'elements' => '',
					'bidirectional' => 0,
					'bidirectional_target' => array(
					),
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'department',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'author',
		1 => 'block_editor',
		2 => 'categories',
		3 => 'comments',
		4 => 'the_content',
		5 => 'discussion',
		6 => 'excerpt',
		7 => 'format',
		8 => 'page_attributes',
		9 => 'revisions',
		10 => 'send-trackbacks',
		11 => 'tags',
	),
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_form' => 0,
	'acfe_display_title' => 'Departments • Powered by Alliance Retail Group',
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1703091234,
));

endif;