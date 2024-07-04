<?php
//custom theme settings page 
define('LANG', pll_current_language());


function my_custom_theme_settings() {

	
	// Add fields for the 'General options' tab
	$General_options = new_cmb2_box( array(
		'id'           => 'mytheme_general_settings_page',
		'title'        => 'Theme Settings',
		'object_types' => array( 'options-page' ),
		'option_key'   => 'mytheme_settings', // The option key and admin menu page slug.
		'tab_group'    => 'mytheme_settings',
		'tab_title'    => 'General',
	) );

	$General_options->add_field( array(
		'name'    => 'Header Logo',
		'id'      => 'header_logo',
		'type'    => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add Logo', // Change upload button text. Default: "Add or Upload File"
        ),
        'preview_size' => array( 100, 100 ),
        'query_args' => array( 'type' => 'image' ),
	) );

    $General_options->add_field( array(
		'name'    => 'Fav Icon',
		'id'      => 'fav_icon',
		'type'    => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add fav icon', // Change upload button text. Default: "Add or Upload File"
        ),
        'preview_size' => array( 100, 100 ),
        'query_args' => array( 'type' => 'image' ),
	) );

	$General_options->add_field( array(
		'name'    => 'Footer Logo',
		'id'      => 'footer_logo',
		'type'    => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add footer logo', // Change upload button text. Default: "Add or Upload File"
        ),
        'preview_size' => array( 100, 100 ),
        'query_args' => array( 'type' => 'image' ),
	) );


	$General_options->add_field( array(
		'name' => 'Address',
		'id'   => 'site_address_' . LANG,
		'type' => 'text',
	) );

	$General_options->add_field( array(
		'name' => 'Email',
		'id'   => 'site_email',
		'type' => 'text_email',
	) );

	$General_options->add_field( array(
		'name' => 'Telephone',
		'id'   => 'site_telephone',
		'type' => 'text',
	) );


	$General_options->add_field( array(
		'name' => 'Copyrights',
		'id'   => 'site_copyrights_' . LANG,
		'type' => 'text',
	) );

	
	// Add fields for the ' Main slider' tab
	$Main_slider = new_cmb2_box( array(
		'id'           => 'mytheme_About_slider_page',
		'menu_title'   => __('Main Slider' ,'Main Slider' , 'Kcc-consultation'), // Use menu title, & not title to hide main h2.
		'object_types' => array( 'options-page' ),
		'option_key'   => 'mytheme_main_slider',
		'parent_slug'  => 'mytheme_settings',
		'tab_group'    => 'mytheme_settings',
		'tab_title'    => __('Main Slider' , 'Kcc-consultation'),
	) );

	$Main_slider->add_field( array(
		'name' => 'Main Slider',
		'id'   => 'slider_group_' . LANG,
		'type' => 'group',
		'repeatable' => true,
		'options'          => array(
			'add_button'    => __( 'Add slider'),
			'remove_button' => __( 'Remove'),
		),
		'fields' => array(
			array(
				'name'    => 'slider image',
				'id'      => 'slider_img',
				'type'    => 'file',
				'options' => array(
					'url' => false,
				),
				'text'    => array(
					'add_upload_file_text' => 'Add image', 
				),
				// 'preview_size' => array( 100, 100 ),
				'query_args' => array( 'type' => 'image' ),
					),
			array(
				'name'    => 'slider title',
				'id'      => 'slider_title',
				'type' => 'text',
				 
			),
			array(
				'name'    => 'slider description',
				'id'      => 'slider_description',
				'type' => 'textarea',
			 
			),
			array(
				'name'    => 'Show More page',
				'id'      => 'select_more',
				'type' => 'select',
        		'options_cb' => 'start_theme_get_all_pages', 
			),
			
		),
	) );
	

	// Add fields for the 'About US' tab
	$About_company = new_cmb2_box( array(
		'id'           => 'mytheme_About_company_page',
		'menu_title'   => 'About US', // Use menu title, & not title to hide main h2.
		'object_types' => array( 'options-page' ),
		'option_key'   => 'mytheme_About_company',
		'parent_slug'  => 'mytheme_settings',
		'tab_group'    => 'mytheme_settings',
		'tab_title'    => 'About Us',
	) );

	$About_company->add_field( array(
		'name' => 'Title',
		'id'   => 'about_title_' . LANG,
		'type' => 'text',
	) );

	$About_company->add_field( array(
		'name'    => 'About Image',
		'id'      => 'about_img',
		'type'    => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add Image', // Change upload button text. Default: "Add or Upload File"
        ),
        'preview_size' => array( 200, 200 ),
        'query_args' => array( 'type' => 'image' ),
	) );

	

	$About_company->add_field( array(
		'name' => 'about goal',
		'id'   => 'about_goal_' . LANG,
		'type' => 'textarea',

	) );

	$About_company->add_field( array(
		'name' => 'about statistics',
		'id'   => 'about_stats_' . LANG,
		'type' => 'group',
		'repeatable' => true,
		'options'          => array(
			'add_button'    => __( 'Add statistic'),
			'remove_button' => __( 'Remove'),
		),
		'fields' => array(
			array(
				'name'    => 'statistic value',
				'id'      => 'statistic_value',
				'type' => 'text',
			),
			array(
				'name'    => 'statistic Name',
				'id'      => 'statistic_name',
				'type' => 'text',
			),
			
		),
	) );

	$About_company->add_field( array(
		'name' => 'about plan',
		'id'   => 'about_plan_' . LANG,
		'type' => 'textarea',

	) );

	$About_company->add_field( array(
        'name' => 'show more page',
        'id'   => 'page_select_' . LANG,
        'type' => 'select',
        'options_cb' => 'start_theme_get_all_pages', 
    ) );



	// Add fields for the 'Services options' tab
	$Service_options = new_cmb2_box( array(
		'id'           => 'mytheme_service_settings_page',
		'menu_title'   => 'Our Services', // Use menu title, & not title to hide main h2.
		'object_types' => array( 'options-page' ),
		'option_key'   => 'mytheme_settings_service',
		'parent_slug'  => 'mytheme_settings',
		'tab_group'    => 'mytheme_settings',
		'tab_title'    => 'works categories',
	) );

	$Service_options->add_field( array(
		'name' => 'Services',
		'id'   => 'services_group_' . LANG,
		'type' => 'group',
		'repeatable' => true,
		'options'          => array(
			'add_button'    => __( 'Add Service'),
			'remove_button' => __( 'Remove'),
		),
		'fields' => array(
			array(
				'name'    => 'Select Service',
				'id'      => 'service_select',
				'type'    => 'select',
				'options' => 'get_works_terms_options',
			),
			array(
				'name'    => 'Service Image',
				'id'      => 'service_img',
				'type'    => 'file',
				'options' => array(
					'url' => false, // Hide the text input for the url
				),
				'text'    => array(
					'add_upload_file_text' => 'Add Image', // Change upload button text. Default: "Add or Upload File"
				),
				'preview_size' => array( 200, 200 ),
				'query_args' => array( 'type' => 'image' ),
			)
		),
	) );


	// Add fields for the 'Projects options' tab
	$vision_options = new_cmb2_box( array(
		'id'           => 'mytheme_vision_settings_page',
		'menu_title'   => 'Our Vision', // Use menu title, & not title to hide main h2.
		'object_types' => array( 'options-page' ),
		'option_key'   => 'mytheme_settings_vision',
		'parent_slug'  => 'mytheme_settings',
		'tab_group'    => 'mytheme_settings',
		'tab_title'    => 'Our Vision',
	) );


	$vision_options->add_field( array(
		'name'    => 'vision Image',
		'id'      => 'vision_img',
		'type'    => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add Image', // Change upload button text. Default: "Add or Upload File"
        ),
        'preview_size' => array( 200, 200 ),
        'query_args' => array( 'type' => 'image' ),
	) );


	$vision_options->add_field( array(
		'name' => 'vision tabs',
		'id'   => 'vision_tabs_group_' . LANG,
		'type' => 'group',
		'repeatable' => false,
		'fields' => array(
			array(
				'name' => 'tab title',
				'id'   => 'tab_title_1',
				'type' => 'text',
			),
			array(
				'name' => 'tab content head',
				'id'   => 'tab_content_1',
				'type' => 'textarea',
			),
			array(
				'name' => 'tab content text',
				'id'   => 'tab_content_1_1',
				'type' => 'textarea',
			),
			array(
				'name' => 'tab content list',
				'id'   => 'tab_content_1_2',
				'type' => 'textarea',
			),
			array(
				'name' => 'tab title',
				'id'   => 'tab_title_2',
				'type' => 'text',
			),
	
			array(
				'name' => 'tab content head',
				'id'   => 'tab_content_2',
				'type' => 'textarea',
			),
			array(
				'name' => 'tab content text',
				'id'   => 'tab_content_2_1',
				'type' => 'textarea',
			),
		),
		
	
	) );


		// Add fields for the 'Brands options' tab
		$Partners_options = new_cmb2_box( array(
			'id'           => 'mytheme_partners_settings_page',
			'menu_title'   => 'Our Partners', // Use menu title, & not title to hide main h2.
			'object_types' => array( 'options-page' ),
			'option_key'   => 'mytheme_settings_partner',
			'parent_slug'  => 'mytheme_settings',
			'tab_group'    => 'mytheme_settings',
			'tab_title'    => 'Our Partners',
		) );
		
		$Partners_options->add_field( array(
			'name' => 'Title',
			'id'   => 'partners_title_' . LANG,
			'type' => 'text',
		) );
	
		$Partners_options->add_field(array(
			'id'      => 'partners_images',
			'type'    => 'file_list',
			'options' => array(
				'url' => false, // Hide the text input for the url
			),
			'text' => array(
				'add_upload_files_text' => 'Add partner', 
			),
			'preview_size' => array( 100, 100 ),
			'query_args' => array( 'type' => 'image' ),
		));
	



	// Add fields for the 'Projects options' tab
	$Project_options = new_cmb2_box( array(
		'id'           => 'mytheme_projects_settings_page',
		'menu_title'   => 'Our Projects', // Use menu title, & not title to hide main h2.
		'object_types' => array( 'options-page' ),
		'option_key'   => 'mytheme_settings_project',
		'parent_slug'  => 'mytheme_settings',
		'tab_group'    => 'mytheme_settings',
		'tab_title'    => 'Our Projects',
	) );

	$Project_options->add_field( array(
		'name' => 'Title',
		'id'   => 'projects_title_' . LANG,
		'type' => 'text',
		
	) );

	$Project_options->add_field( array(
		'name' => 'Descriotion',
		'id'   => 'projects_desc_' . LANG,
		'type' => 'textarea',
		
	) );


	$Project_options->add_field( array(
		'name' => 'Projects viewed in homepage',
		'id'   => 'select_project_group_' . LANG,
		'type' => 'group',
		'repeatable' => true,
		'options'          => array(
			'add_button'    => __( 'Add project'),
			'remove_button' => __( 'Remove'),
		),
		'fields' => array(
			array(
				'name'    => 'Select Project',
				'id'      => 'proj_select',
				'type'    => 'select',
				'options' => 'get_works_options',
			),
			
		),
	) );


	// Add fields for the 'Customer Opinions' tab
	$Features_options = new_cmb2_box( array(
		'id'           => 'features',
		'menu_title'   => 'Customer Features', // Use menu title, & not title to hide main h2.
		'object_types' => array( 'options-page' ),
		'option_key'   => 'mytheme_settings_feature',
		'parent_slug'  => 'mytheme_settings',
		'tab_group'    => 'mytheme_settings',
		'tab_title'    => 'Customer Features',
	) );


	$Features_options->add_field( array(
		'name' => 'Title',
		'id'   => 'features_title_' . LANG,
		'type' => 'text',
	) );

	$Features_options->add_field( array(
		'name' => 'Our Features',
		'id'   => 'features_group_' . LANG,
		'type' => 'group',
		'repeatable' => true,
		'options'          => array(
			'add_button'    => __( 'Add Feature'),
			'remove_button' => __( 'Remove'),
		),
		'fields' => array(
			array(
				'name'    => 'feature image',
				'id'      => 'feature_img',
				'type'    => 'file',
				'options' => array(
					'url' => false,
				),
				'text'    => array(
					'add_upload_file_text' => 'Add image', 
				),
				'preview_size' => array( 100, 100 ),
				'query_args' => array( 'type' => 'image' ),
					),
			array(
				'name'    => 'feature title',
				'id'      => 'feature_title',
				'type' => 'text',
			),
			array(
				'name'    => 'feature Description',
				'id'      => 'feature_desc',
				'type' => 'textarea',
			),
			
		),
	) );


	// Add fields for the 'Social options' tab
	$Social_options = new_cmb2_box( array(
		'id'           => 'mytheme_social_settings_page',
		'menu_title'   => 'Social Media', // Use menu title, & not title to hide main h2.
		'object_types' => array( 'options-page' ),
		'option_key'   => 'mytheme_settings_social',
		'parent_slug'  => 'mytheme_settings',
		'tab_group'    => 'mytheme_settings',
		'tab_title'    => 'Social Media',
	) );

	$Social_options->add_field( array(
		'id'               => 'social_media',
		'type'             => 'group',
		'repeatable'       => true,
		'options'          => array(
			'add_button'    => __( 'Add New'),
			'remove_button' => __( 'Remove'),
		),
		'fields'           => array(
			array(
				'id'         => 'social_name',
				'type'       => 'select',
				'options'    => array(
					'whatsapp'   => 'WhatsApp',
					'facebook'   => 'Facebook',
					'instagram'  => 'Instagram',
					'x-twitter'   => 'X(Twitter)',
					'youtube'   => 'Youtube',
					'snapchat'  => 'Snapchat',
					'tiktok'  => 'TikTok',
				),
				'attributes' => array(
					'style' => 'margin-top: 0;',
				),
			),
			array(
				'id'     => 'social_url',
				'type'   => 'text',
			),
			
		),
	) );



	// Add fields for the 'Inner Pages' tab
	$Ineer_pages_options = new_cmb2_box( array(
		'id'           => 'mytheme_inner_settings_page',
		'menu_title'   => 'Inner Pages', // Use menu title, & not title to hide main h2.
		'object_types' => array( 'options-page' ),
		'option_key'   => 'mytheme_settings_inner_pages',
		'parent_slug'  => 'mytheme_settings',
		'tab_group'    => 'mytheme_settings',
		'tab_title'    => 'Inner Pages',
	) );

	$Ineer_pages_options->add_field( array(
		'name'    => 'works page',
		'id'      => 'page_title1',
		'type'    => 'title',
        
	) );
	

	$Ineer_pages_options->add_field( array(
		'name'    => 'works banner',
		'id'      => 'works_banner',
		'type'    => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add banner', // Change upload button text. Default: "Add or Upload File"
        ),
        'query_args' => array( 'type' => 'image' ),
	) );

	$Ineer_pages_options->add_field( array(
		'name' => 'banner title',
		'id'   => 'work_page_title_' . LANG,
		'type' => 'text',
	) );

	$Ineer_pages_options->add_field( array(
		'name' => 'banner caption',
		'id'   => 'work_page_caption_' . LANG,
		'type' => 'textarea_small',
	) );

	$Ineer_pages_options->add_field( array(
		'name' => 'works page content title',
		'id'   => 'works_content_title_' . LANG,
		'type' => 'textarea',
	) );

	$Ineer_pages_options->add_field( array(
		'name' => 'works page content',
		'id'   => 'works_content_' . LANG,
		'type' => 'textarea',
	) );

	$Ineer_pages_options->add_field( array(
		'name'    => 'Organizational Hierarchy',
		'id'      => 'page_title2',
		'type'    => 'title',
        
	) );

	$Ineer_pages_options->add_field( array(
		'name'    => 'Organizational banner',
		'id'      => 'O_banner',
		'type'    => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add banner', // Change upload button text. Default: "Add or Upload File"
        ),
        'query_args' => array( 'type' => 'image' ),
	) );

	$Ineer_pages_options->add_field( array(
		'name' => 'Organizational banner title',
		'id'   => 'o_page_title_' . LANG,
		'type' => 'text',
	) );

	$Ineer_pages_options->add_field( array(
		'name' => 'banner caption',
		'id'   => 'o_page_caption_' . LANG,
		'type' => 'textarea_small',
	) );

	$Ineer_pages_options->add_field( array(
		'name' => 'Title 1',
		'id'   => 'o_title_1',
		'type' => 'text',
	) );

	$Ineer_pages_options->add_field( array(
		'name' => 'section 1',
		'id'   => 'o_section_1',
		'type' => 'group',
		'repeatable' => true,
		'options'          => array(
			'add_button'    => __( 'Add column'),
			'remove_button' => __( 'Remove'),
		),
		'fields' => array(
			array(
				'name'    => 'column elements',
				'id'      => 'col_elements',
				'type'    => 'textarea',
			),
			
		),
	) );

	$Ineer_pages_options->add_field( array(
		'name' => 'Title 2',
		'id'   => 'o_title_2',
		'type' => 'text',
	) );


	$Ineer_pages_options->add_field( array(
		'name' => 'section 2',
		'id'   => 'o_section_2',
		'type' => 'group',
		'repeatable' => true,
		'options'          => array(
			'add_button'    => __( 'Add column'),
			'remove_button' => __( 'Remove'),
		),
		'fields' => array(
			array(
				'name'    => 'column elements',
				'id'      => 'col_elements_2',
				'type'    => 'textarea',
			),
			
		),
	) );


	$Ineer_pages_options->add_field( array(
		'name'    => 'Contact Us Page',
		'id'      => 'page_title3',
		'type'    => 'title',
        
	) );

	$Ineer_pages_options->add_field( array(
		'name' => 'contact page head',
		'id'   => 'c_page_head_' . LANG,
		'type' => 'textarea',
	) );

	$Ineer_pages_options->add_field( array(
		'name'    => 'Contact banner',
		'id'      => 'c_banner',
		'type'    => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add banner', // Change upload button text. Default: "Add or Upload File"
        ),
        'query_args' => array( 'type' => 'image' ),
	) );

	// $Ineer_pages_options->add_field( array(
	// 	'name' => 'Contact banner title',
	// 	'id'   => 'c_page_title_' . LANG,
	// 	'type' => 'text',
	// ) );

	$Ineer_pages_options->add_field( array(
		'name' => 'banner caption',
		'id'   => 'c_page_caption_' . LANG,
		'type' => 'textarea_small',
	) );
	
	
}
add_action( 'cmb2_admin_init', 'my_custom_theme_settings' );





$general_settings = get_option('mytheme_settings');

$settings_to_define = array(
    'HEADER_LOGO' => 'header_logo',
    'FAV_ICON' => 'fav_icon',
    'FOOTER_LOGO' => 'footer_logo',
    'ADDRESS' => 'site_address_' . LANG,
    'SITE_EMAIL' => 'site_email',
    'SITE_TELEPHONE' => 'site_telephone',
    'COPYRIGHTS_TXT' => 'site_copyrights_' . LANG,
);

foreach ($settings_to_define as $constant_name => $setting_key) {
    define($constant_name, $general_settings[$setting_key] ?? '');
}


define('COMPANY_DATA', get_option('mytheme_About_company'));
define('MAIN_SLIDER', get_option('mytheme_main_slider'));
define('PROJECT_SETTINGS', get_option('mytheme_settings_project'));
define('SERVICE_SETTINGS', get_option('mytheme_settings_service'));
define('VISION_SETTINGS', get_option('mytheme_settings_vision'));
define('PARTNERS_GALLERY', get_option('mytheme_settings_partner'));
define('Features_options', get_option('mytheme_settings_feature'));
define('SOCIALS', get_option('mytheme_settings_social'));
define('INNER_PAGES', get_option('mytheme_settings_inner_pages'));



/***************register custom metaboxes to custom post types********************/
function theme_register_custom_metabox() {

	$contactMetaboxs = new_cmb2_box( array(
        'id'            => 'contact_fields',
        'title'         => 'contact fields',
        'object_types'  => array( 'contact' ),
    ) );

    $contactMetaboxs->add_field( array(
        'name'    => 'Name',
		'id'      => 'contact_name',
		'type'    => 'text',
    ) );

	$contactMetaboxs->add_field( array(
        'name'    => 'Email',
		'id'      => 'contact_email',
		'type'    => 'text',
    ) );

	$contactMetaboxs->add_field( array(
        'name'    => 'Telephone',
		'id'      => 'contact_telephone',
		'type'    => 'text',
    ) );


	$contactMetaboxs->add_field( array(
        'name'    => 'Message',
		'id'      => 'contact_message',
		'type'    => 'textarea',
    ) );


}


add_action( 'cmb2_admin_init', 'theme_register_custom_metabox' );
