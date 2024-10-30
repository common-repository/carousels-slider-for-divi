<?php

class ImageCarouselDivi8 extends ET_Builder_Module {

	public $slug       = 'divi8_image_carousel';
	public $vb_support = 'on';
	public $child_slug = 'divi8_image_carousel_item';


	protected $module_credits = array(
		'module_uri' => 'http://divicarousels.com/',
		'author'     => 'divicarousels',
		'author_uri' => 'http://divicarousels.com/',
	);
	public function init() {
		$this->name = esc_html__( 'Image Carousel', 'divi-carousels-lite' );
		$this->settings_modal_toggles = array(
            'general' => array(
                'toggles' => array(
                    'divi8_image_content_carousel_settings' => esc_html__( 'Carousel Settings', 'divi-carousels-lite'),
                    'divi8_image_content_carousel_navigation' => esc_html__( 'Navigation Settings', 'divi-carousels-lite'),
					'divi8_image_content_carousel_pagination' => esc_html__( 'Pagination Settings', 'divi-carousels-lite'),
                    'divi8_image_content_carousel_effect'    => esc_html__( 'Effect Settings', 'divi-carousels-lite'),
                	)
				),
				'advanced' => array(
					'toggles' => array(
						'divi8_image_content_carousel_item_settings' => esc_html__( 'Slide Item Settings', 'divi-carousels-lite'),
						'divi8_image_content_carousel_text_all_settings' => esc_html__( 'Title Settings', 'divi-carousels-lite'),
						'divi8_image_content_carousel_content_all_settings' => esc_html__( 'Sub title Settings', 'divi-carousels-lite'),
						'divi8_image_content_carousel_image_all_settings' => array('title' => esc_html__( 'Image Settings', 'divi-carousels-lite'),),
						
					)
				)
        );
	}

	public function get_advanced_fields_config() {
        return array(
            'text'  => false,
            'fonts' => array(
                'text' => array(
                    'css' => array(
                        'main' => '%%order_class%% .carousel_content span',
						'important' => 'all'
                    ),
                    'toggle_slug' => 'divi8_image_content_carousel_text_all_settings'
                ),
                'content' => array(
                    'css' => array(
                        'main' => '%%order_class%% .carousel_content p',
						'important' => 'all'
                    ),
                    'toggle_slug' => 'divi8_image_content_carousel_content_all_settings'
                )
            ),
            'background' => array(
                'settings' => array(
                    'color' => 'alpha',
                ),
                'css'   => array(
                    'main' => "%%order_class%% .swiper-container",
                    'important' => 'all'
                )
            ),
            'max_width' => false,
            'borders' => array(
                'default' => array(
                    'css'          => array(
						'main' => array(
							'border_radii'  => '%%order_class%% .swiper-container .carousel_content',
							'border_styles' => '%%order_class%% .swiper-container .carousel_content',
                        ),
                    ),
                ),
                'image_border'   => array(
					'css'          => array(
						'main' => array(
							'border_radii'  => '%%order_class%% .carousel_content img',
							'border_styles' => '%%order_class%% .carousel_content img',
                        ),
                    ),
					'label_prefix' => esc_html__( 'Image', 'divi-carousels-lite' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'divi8_image_content_carousel_image_all_settings',
                ),
				
				'item_border'   => array(
					'css'          => array(
						'main' => array(
							'border_radii'  => '%%order_class%% .carousel_content',
							'border_styles' => '%%order_class%% .carousel_content',
                        ),
                    ),
					'label_prefix' => esc_html__( 'Item Border', 'divi-carousels-lite' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'divi8_image_content_carousel_item_settings',
                ),
                'text_border'   => array(
					'css'          => array(
						'main' => array(
							'border_radii'  => '%%order_class%% .divi8_image_heading',
							'border_styles' => '%%order_class%% .divi8_image_heading',
                        ),
                    ),
					'label_prefix' => esc_html__( 'Text', 'divi-carousels-lite' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'divi8_image_content_carousel_text_all_settings',
                ),
                'content_border'   => array(
					'css'          => array(
						'main' => array(
							'border_radii'  => '%%order_class%% .carousel_content p',
							'border_styles' => '%%order_class%% .carousel_content p',
                        ),
                    ),
					'label_prefix' => esc_html__( 'Content', 'divi-carousels-lite' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'divi8_image_content_carousel_content_all_settings',
				),
            ),
			'box_shadow' => array(
                'default' => array(
                    'css' => array(
                        'main' => '%%order_class%% .carousel_content',
                        'important' => 'all',
                    ),
                ),
                'item' => array(
                    'label_prefix' => esc_html__("Item Box Shadow", 'divi-carousels-lite'),
                    'css' => array(
                        'main' => '%%order_class%% .carousel_content',
                        'important' => 'all',
                    ),
                    'toggle_slug' => 'divi8_image_content_carousel_item_settings'
                ),
				'image_box_shadow' => array(
                    'css'          => array(
                        'main' => '%%order_class%% .carousel_content img ',
                        'important' => 'all'
                    ),
					'label_prefix' => esc_html__( 'Image', 'divi-carousels-lite' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'divi8_image_content_carousel_image_all_settings',
                ),
            ),
            'margin_padding' => array(
                'css' => array(
                    'main' => '%%order_class%% .carousel_content',
                ),
                'important' => 'all',
            ),
            'background' => array(
                'settings' => array(
                    'color' => 'alpha',
                ),
                'css' => array(
                    'main' => "%%order_class%% .carousel_content",
                    'important' => 'all',
                ),
            ),
        );
    }	

	public function get_fields() {
		$fields = [];
		// Carousel Settings
			// Script Control

			$fields['divi8_image_carousel_effects_types'] = [
				'label' => esc_html__( "Carousel Type", 'divi-carousels-lite'  ),
				'type'           => 'select',
				'option_category'=> 'basic_option',
				'options' => array(
					'fade' => esc_html__('Fade', 'divi-carousels-lite'),
					'coverflow' => esc_html__('Coverflow', 'divi-carousels-lite'),
					'slide' => esc_html__('Slide', 'divi-carousels-lite'),
					'flip' => esc_html__('Flip', 'divi-carousels-lite'),
					'cube' => esc_html__('Cube', 'divi-carousels-lite'),
				),
				'default'        => 'coverflow',
				'toggle_slug'      => 'divi8_image_content_carousel_settings',
			];
			$fields['divi8_image_autoplay'] = [
				'label' => esc_html__( "AutoPlay", 'divi-carousels-lite'  ),
				'type'            => 'yes_no_button',
				'options' => array(
                    'on' => esc_html__('On', 'divi-carousels-lite'),
                    'off' => esc_html__('Off', 'divi-carousels-lite'),
                ),
                'affects' => array(
                    'divi8_image_slider_autoplaydelay',
                ),
                'default' => 'on',
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_image_content_carousel_settings',
			];
			$fields['divi8_image_slider_autoplaydelay'] = [
				'label' => esc_html__( "Autoplay Delay (ms)", 'divi-carousels-lite'  ),
				'type'            => 'range',
				'mobile_options'  		=> true,
				'range_settings'  => array(
					'step' => 1,
					'min'  => 100,
					'max'  => 7000,
				),
				
				'default'         =>'3000',
				'show_if' => array(
                    'divi8_image_autoplay' => 'on',
                ),
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_image_content_carousel_settings',
			];
			$fields['divi8_image_autoplay_loop'] = [
				'label' => esc_html__( "Slider Loop", 'divi-carousels-lite'  ),
				'type'            => 'yes_no_button',
				'options' => array(
                    'on' => esc_html__('Yes', 'divi-carousels-lite'),
                    'off' => esc_html__('No', 'divi-carousels-lite'),
                ),
				'default'          => 'on',
                'default_on_front' => 'on',
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_image_content_carousel_settings',
			];
			$fields['divi8_image_centered_slides'] = [
				'label' => esc_html__( "Center slide", 'divi-carousels-lite'  ),
				'type'            => 'yes_no_button',
				'options' => array(
                    'on' => esc_html__('Yes', 'divi-carousels-lite'),
                    'off' => esc_html__('No', 'divi-carousels-lite'),
                ),
				'default'          => 'on',
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_image_content_carousel_settings',
			];
			$fields['divi8_image_auto_height'] = [
				'label' => esc_html__( "Auto Height", 'divi-carousels-lite'  ),
				'type'            => 'yes_no_button',
				'options' => array(
                    'on' => esc_html__('Yes', 'divi-carousels-lite'),
                    'off' => esc_html__('No', 'divi-carousels-lite'),
                ),
				'default'          => 'off',
                'default_on_front' => 'off',
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_image_content_carousel_settings',
			];
			$fields['divi8_image_autoplay_pause'] = [
				'label' => esc_html__( "Pause on Hover", 'divi-carousels-lite'  ),
				'type'            => 'yes_no_button',
				'options' => array(
                    'on' => esc_html__('Yes', 'divi-carousels-lite'),
                    'off' => esc_html__('No', 'divi-carousels-lite'),
                ),
				'default'          => 'on',
                'default_on_front' => 'on',
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_image_content_carousel_settings',
			];
			$fields['divi8_image_sliderspeed'] = [
				'label' => esc_html__( "Carousel Speed (ms)", 'divi-carousels-lite'  ),
				'type'            => 'range',
				'mobile_options'  		=> true,
				'range_settings'  => array(
					'step' => 1,
					'min'  => 50,
					'max'  => 7000,
				),
				'default'         => '400',
                'fixed_unit'      => '',
                'validate_unit'   => false,
                'unitless'        => true,
				'show_if' => array(
                    'divi8_image_autoplay' => 'on',
                ),
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_image_content_carousel_settings',
			];
			$fields['divi8_image_sliderspcbtn'] = [
				'label' => esc_html__( "Item Space Between", 'divi-carousels-lite'  ),
				'type'            => 'range',
				'mobile_options'  		=> true,
				'range_settings'  => array(
					'step' => 1,
					'min'  => 0,
					'max'  => 50,
				),
				'default'         => '15',
				'fixed_unit'      => '',
                'validate_unit'   => false,
                'unitless'        => true,
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_image_content_carousel_settings',
			];
			$fields['divi8_image_sliderperview_desktop'] = [
				'label' => esc_html__( "Show Item Desktop", 'divi-carousels-lite'  ),
				'type'            => 'range',
				'mobile_options'  		=> true,
				'range_settings'  => array(
					'step' => 1,
					'min'  => 1,
					'max'  => 20,
				),
				'default'         => '3',
				'fixed_unit'      => '',
				'validate_unit'   => false,
				'unitless'        => true,
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_image_content_carousel_settings',
			];
			$fields['divi8_image_sliderperview_tablet'] = [
				'label' => esc_html__( "Show Item Tablet", 'divi-carousels-lite'  ),
				'type'  => 'range',
				'mobile_options'  		=> true,
				'range_settings'  => array(
					'step' => 1,
					'min'  => 1,
					'max'  => 20,
				),
				'default'         => '2',
				'fixed_unit'      => '',
				'validate_unit'   => false,
				'unitless'        => true,
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_image_content_carousel_settings',
			];
			$fields['divi8_image_sliderperview_mobile'] = [
				'label' => esc_html__( "Show Item Mobile", 'divi-carousels-lite'  ),
				'type'            => 'range',
				'mobile_options'  		=> true,
				'range_settings'  => array(
					'step' => 1,
					'min'  => 1,
					'max'  => 20,
				),
				'default'         => '1',
				'fixed_unit'      => '',
				'validate_unit'   => false,
				'unitless'        => true,
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_image_content_carousel_settings',
			];
			// Content Positions
			$fields['divi8_image_content_position'] = [
				'label' => esc_html__( "Text Position", 'divi-carousels-lite'  ),
				'type'            => 'select',
				'options' => array(
					'top' => esc_html__('Top', 'divi-carousels-lite'),
					'bottom' => esc_html__('Bottom', 'divi-carousels-lite'),
					'middle' => esc_html__('Center', 'divi-carousels-lite'),
                    'outside' => esc_html__('Outside', 'divi-carousels-lite'),
					'none' => esc_html__('None', 'divi-carousels-lite'),
                ),
				'default_on_front' => 'bottom',
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_image_content_carousel_settings',
			];
			
		// Navigation Start from here 
		$fields['divi8_image_nav_show_hide'] = [
			'label' => esc_html__( "Navigation Show/Hide", 'divi-carousels-lite'  ),
			'type'            => 'yes_no_button',
			'options' => array(
				'on' => esc_html__('Yes', 'divi-carousels-lite'),
				'off' => esc_html__('No', 'divi-carousels-lite'),
			),
			'default'          => 'on',
			'toggle_slug'      => 'divi8_image_content_carousel_navigation',
		];
		$fields['divi8_image_nav_grab_cursor'] = [
			'label' => esc_html__( "Use Grab Cursor", 'divi-carousels-lite'  ),
			'type'            => 'yes_no_button',
			'options' => array(
				'on' => esc_html__('Yes', 'divi-carousels-lite'),
				'off' => esc_html__('No', 'divi-carousels-lite'),
			),
			'default'          => 'off',
			'default_on_front' => 'off',
			'toggle_slug'      => 'divi8_image_content_carousel_navigation',
			'show_if'      => array(
				'divi8_image_nav_show_hide' => 'on'
			)
		];
		$fields['divi8_image_nav_keyboard'] = [
			'label' => esc_html__( "Use KeyBoard Navigation", 'divi-carousels-lite'  ),
			'type'            => 'yes_no_button',
			'options' => array(
				'on' => esc_html__('Yes', 'divi-carousels-lite'),
				'off' => esc_html__('No', 'divi-carousels-lite'),
			),
			'default'          => 'on',
            'default_on_front' => 'on',
			'toggle_slug'      => 'divi8_image_content_carousel_navigation',
			'show_if'      => array(
				'divi8_image_nav_show_hide' => 'on'
			)
		];
		$fields['divi8_image_nav_mousewheel'] = [
			'label' => esc_html__( "Use MouseWheel Navigation", 'divi-carousels-lite'  ),
			'type'            => 'yes_no_button',
			'options' => array(
				'on' => esc_html__('Yes', 'divi-carousels-lite'),
				'off' => esc_html__('No', 'divi-carousels-lite'),
			),
			'default'          => 'on',
            'default_on_front' => 'on',
			'toggle_slug'      => 'divi8_image_content_carousel_navigation',
			'show_if'      => array(
				'divi8_image_nav_show_hide' => 'on'
			)
		];
		$fields['divi8_image_nav_bullettype'] = [
			'label' => esc_html__( " Bullet Type", 'divi-carousels-lite'  ),
			'type'           => 'select',
			'option_category'=> 'basic_option',
			'options'        => array(
				'bullets' => esc_html__( 'Bullets',  'divi-carousels-lite' ),
				'fraction'   => esc_html__( 'Fraction', 'divi-carousels-lite' ),
			),
			'default'        => 'bullets',
			'toggle_slug'      => 'divi8_image_content_carousel_navigation',
			'show_if'      => array(
				'divi8_image_nav_show_hide' => 'on'
			)
		];
		$fields['divi8_image_nav_dynamicbullet'] = [
			'label' => esc_html__( "Dynamic Bullet", 'divi-carousels-lite'  ),
			'type'            => 'yes_no_button',
			'options' => array(
				'on' => esc_html__('Yes', 'divi-carousels-lite'),
				'off' => esc_html__('No', 'divi-carousels-lite'),
			),
			'default'          => 'on',
            'default_on_front' => 'on',
			'toggle_slug'      => 'divi8_image_content_carousel_navigation',
			'show_if'      => array(
				'divi8_image_nav_bullettype' => 'bullets',
				'divi8_image_nav_show_hide' => 'on'
			)
		];
		// Bullet Color
		$fields['divi8_image_pagi_bullet_color'] = [
			'label' => esc_html__( "Bullet Color", 'divi-carousels-lite'  ),
			'type'         => 'color-alpha',
			'custom_color' => true,
			'default'      => '#0c71c3',
			'toggle_slug'      => 'divi8_image_content_carousel_navigation',
			'option_category' => 'basic_option',
			'show_if'      => array(
				'divi8_image_nav_bullettype' => 'bullets',
				'divi8_image_nav_show_hide' => 'on'
			)
		];
		$fields['divi8_image_pagi_progressbar_fill_color'] = [
			'label' => esc_html__( "Progressbar Fill Color", 'divi-carousels-lite'  ),
			'type'         => 'color-alpha',
			'custom_color' => true,
			'default'      => '#0c71c3',
			'toggle_slug'      => 'divi8_image_content_carousel_navigation',
			'option_category' => 'basic_option',
			'show_if'      => array(
				'divi8_image_nav_bullettype' => 'progressbar',
				'divi8_image_nav_show_hide' => 'on'
			)
		];
		$fields['divi8_image_pagi_size'] = [
			'label'           => esc_html__( 'Bullet Size', 'divi-carousels-lite' ),
			'type'            => 'range',
			'option_category' => 'basic_option',
			'range_settings'  => array(
				'step' => 1,
				'min'  => 1,
				'max'  => 100,
			),
			'default'         => '10',
			'toggle_slug'      => 'divi8_image_content_carousel_navigation',
			'show_if'      => array(
				'divi8_image_nav_bullettype' => 'bullets',
				'divi8_image_nav_show_hide' => 'on'
			)
		];
		//Effect Settings
		$fields['divi8_image_effect_slideshadow'] = [
			'label' => esc_html__( "Slider Shadow", 'divi-carousels-lite'  ),
			'type'            => 'yes_no_button',
			'options' => array(
				'on' => esc_html__('Yes', 'divi-carousels-lite'),
				'off' => esc_html__('No', 'divi-carousels-lite'),
			),
			'default'          => 'off',
            'default_on_front' => 'off',
			'toggle_slug'      => 'divi8_image_content_carousel_effect',
		];
		$fields['divi8_image_effect_sliderotate'] = [
			'label' => esc_html__( "Slide Rotate", 'divi-carousels-lite'  ),
			'type'            => 'range',
			'mobile_options'  		=> true,
			'range_settings'  => array(
				'step' => 1,
				'min'  => 1,
				'max'  => 1000,
			),
			'default'         => '0',
			'fixed_unit'      => '',
			'validate_unit'   => false,
			'unitless'        => true,
			'toggle_slug'      => 'divi8_image_content_carousel_effect',
		];
		$fields['divi8_image_effect_slidestretch'] = [
			'label' => esc_html__( "Slide Stretch", 'divi-carousels-lite'  ),
			'type'            => 'range',
			'mobile_options'  		=> true,
			'range_settings'  => array(
				'step' => 1,
				'min'  => 1,
				'max'  => 1000,
			),
			'default'         => '0',
			'fixed_unit'      => '',
			'validate_unit'   => false,
			'unitless'        => true,
			'toggle_slug'      => 'divi8_image_content_carousel_effect',
		];
		$fields['divi8_image_effect_slidedepth'] = [
			'label' => esc_html__( "Slide Depth", 'divi-carousels-lite'  ),
			'type'            => 'range',
			'mobile_options'  		=> true,
			'range_settings'  => array(
				'step' => 1,
				'min'  => 1,
				'max'  => 1000,
			),
			'default'         => '300',
			'fixed_unit'      => '',
			'validate_unit'   => false,
			'unitless'        => true,
			'toggle_slug'      => 'divi8_image_content_carousel_effect',
		];
		//Advance 
		// Arrow Start
		$fields['divi8_image_arrow_show_hide'] = [
			'label' => esc_html__( "Pagination Show/Hide", 'divi-carousels-lite' ),
			'type'            => 'yes_no_button',
			'options' => array(
				'on' => esc_html__('Yes', 'divi-carousels-lite'),
				'off' => esc_html__('No', 'divi-carousels-lite'),
			),
			'default'          => 'on',
			'toggle_slug'      => 'divi8_image_content_carousel_pagination',
		];
		$fields['divi8_image_arrow_position'] = [
			'label' => esc_html__( "Position", 'divi-carousels-lite'  ),
			'type'            => 'range',
			'range_settings'  => array(
				'step' => 1,
				'min'  => -70,
				'max'  => 60,
			),
			'default'         => '15',
			'toggle_slug' => 'main_content',
			'option_category' => 'basic_option',
			'toggle_slug'      => 'divi8_image_content_carousel_pagination',
			'show_if'      => array(
				'divi8_image_arrow_show_hide' => 'on'
			)
		];
		$fields['divi8_image_arrow_padding'] = [
			'label'           => esc_html__( 'Background Size', 'divi-carousels-lite' ),
			'type'            => 'range',
			'range_settings'  => array(
				'step' => 1,
				'min'  => 1,
				'max'  => 100,
			),
			'toggle_slug' => 'main_content',
			'option_category' => 'basic_option',
			'default'         => '20',
			'toggle_slug'      => 'divi8_image_content_carousel_pagination',
			'show_if'      => array(
				'divi8_image_arrow_show_hide' => 'on'
			)
		];
		$fields['divi8_image_arrow_padding_hover'] = [
			'label'           => esc_html__( 'Background Size Hover', 'divi-carousels-lite' ),
			'type'            => 'range',
			'range_settings'  => array(
				'step' => 1,
				'min'  => 1,
				'max'  => 100,
			),
			'fixed_unit'      => '',
			'validate_unit'   => false,
			'unitless'        => true,
			'toggle_slug' => 'main_content',
			'option_category' => 'basic_option',
			'default'         => '22',
			'toggle_slug'      => 'divi8_image_content_carousel_pagination',
			'show_if'      => array(
				'divi8_image_arrow_show_hide' => 'on'
			)
		];
		$fields['divi8_image_arrow_border_radius'] = [
			'label'           => esc_html__( 'Radius', 'divi-carousels-lite' ),
			'type'            => 'range',
			'range_settings'  => array(
				'step' => 1,
				'min'  => 1,
				'max'  => 100,
			),
			'toggle_slug' => 'main_content',
			'option_category' => 'basic_option',
			'default'         => '22',
			'toggle_slug'      => 'divi8_image_content_carousel_pagination',
			'show_if'      => array(
				'divi8_image_arrow_show_hide' => 'on'
			)
		];
		// Arrow Color
		$fields['divi8_image_arrow_color'] = [
			'label' => esc_html__( "Color", 'divi-carousels-lite'  ),
			'type'         => 'color-alpha',
			'custom_color' => true,
			'default'      => '#f1f5f9',
			'toggle_slug' => 'main_content',
			'option_category' => 'basic_option',
			'toggle_slug'      => 'divi8_image_content_carousel_pagination',
			'show_if'      => array(
				'divi8_image_arrow_show_hide' => 'on'
			)
		];
		// Arrow Background Color
		$fields['divi8_image_arrow_background'] = [
			'label'           => esc_html__( 'Background color', 'divi-carousels-lite' ),
			'type'         => 'color-alpha',
			'custom_color' => true,
			'default'      => '#0c71c3',
			'toggle_slug' => 'main_content',
			'option_category' => 'basic_option',
			'toggle_slug'      => 'divi8_image_content_carousel_pagination',
			'show_if'      => array(
				'divi8_image_arrow_show_hide' => 'on'
			)
		];
		// Arrow Background Color Hover
		$fields['divi8_image_arrow_background_hover'] = [
			'label'           => esc_html__( 'Background Color Hover', 'divi-carousels-lite' ),
			'type'         => 'color-alpha',
			'custom_color' => true,
			'default'      => '#0c71c3',
			'toggle_slug' => 'main_content',
			'option_category' => 'basic_option',
			'toggle_slug'      => 'divi8_image_content_carousel_pagination',
			'show_if'      => array(
				'divi8_image_arrow_show_hide' => 'on'
			)
		];

		return $fields;
	}


	public function before_render(){
		global $image_carousel_data;
		$image_carousel_data = [];
	}
	public function render( $attrs, $content = null, $render_slug ) {
		global $image_carousel_data;
		$divi8_image_autoplay_show_hide = "on" === $this->props['divi8_image_autoplay'];
        $divi8_image_autoplay_delay = $this->props['divi8_image_slider_autoplaydelay'];
		$divi8_image_coverflow_speed = $this->props['divi8_image_sliderspeed'];
        $divi8_image_coverflow_loop = $this->props['divi8_image_autoplay_loop'];
		$dnxte_coverflow_direction = "horizontal";
        $divi8_image_coverflow_slides_perview_desktop = $this->props['divi8_image_sliderperview_desktop'];
        $divi8_image_coverflow_slides_perview_desktop_tablet = $this->props['divi8_image_sliderperview_tablet'];
        $divi8_image_coverflow_slides_perview_desktop_phone = $this->props['divi8_image_sliderperview_mobile'];;
        $divi8_image_coverflow_sliderotate = $this->props['divi8_image_effect_sliderotate'];
        $divi8_image_coverflow_slidestretch = $this->props['divi8_image_effect_slidestretch'];
        $divi8_image_coverflow_slidedepth = $this->props['divi8_image_effect_slidedepth'];
		$divi8_image_effect_slideshadow = $this->props['divi8_image_effect_slideshadow'];
		$divi8_image_pagination_type = $this->props['divi8_image_nav_bullettype'];
        $divi8_image_pagination_dynamicbullet = $divi8_image_pagination_type === 'bullets' ? $this->props['divi8_image_nav_dynamicbullet'] : "off";
		$divi8_image_content_position = $this->props['divi8_image_content_position'];
        $divi8_image_space_between = $this->props['divi8_image_sliderspcbtn'];
		$divi8_image_centered_slides =  "on" === $this->props['divi8_image_centered_slides'];
        $divi8_image_auto_height = $this->props['divi8_image_auto_height'];
        $divi8_image_autoplay_pause = "on" === $this->props['divi8_image_autoplay_pause'];
		$divi8_image_grab_cursor = $this->props['divi8_image_nav_grab_cursor'];
		$divi8_image_nav_keyboard = $this->props['divi8_image_nav_keyboard'];
        $divi8_image_nav_mousewheel = $this->props['divi8_image_nav_mousewheel'];
		$divi8_image_pagi_bullet_color = $this->props['divi8_image_pagi_bullet_color'];
		$divi8_image_pagi_progressbar_fill_color = $this->props['divi8_image_pagi_progressbar_fill_color'];
		$divi8_image_pagi_size = $this->props['divi8_image_pagi_size'];
		$divi8_image_pagi_margin = $this->props['divi8_image_pagi_margin'];
		$divi8_image_pagi_padding = $this->props['divi8_image_pagi_padding'];
		$divi8_image_arrow_color = $this->props['divi8_image_arrow_color'];
		$divi8_image_arrow_background = $this->props['divi8_image_arrow_background'];
		$divi8_image_arrow_background_hover = $this->props['divi8_image_arrow_background_hover'];
		$divi8_image_arrow_place = $this->props['divi8_image_arrow_place'];
		$divi8_image_arrow_position = $this->props['divi8_image_arrow_position'];
		$divi8_image_arrow_padding = $this->props['divi8_image_arrow_padding'];
		$divi8_image_arrow_padding_hover = $this->props['divi8_image_arrow_padding_hover'];
		$divi8_image_arrow_border_radius = $this->props['divi8_image_arrow_border_radius'];
		$divi8_image_learnmore_bg_color = $this->props['divi8_image_learnmore_bg_color'];
		$divi8_image_learnmore_bg_color_hover = $this->props['divi8_image_learnmore_bg_color_hover'];
		$divi8_image_lm_show = 'on' === $this->props['divi8_image_lm_show'];
		$divi8_image_lm_position = $this->props['divi8_image_lm_position'];
		$divi8_image_learmore_padding = $this->props['divi8_image_learmore_padding'];
		$divi8_image_effects_types = $this->props['divi8_image_carousel_effects_types'];
		
		if ($this->props["divi8_image_nav_show_hide"] == "on"){
			$pagination_show_hide = "block";
		}else{
			$pagination_show_hide = "none";
		}
		if ($this->props["divi8_image_arrow_show_hide"] == "on"){
			$pagi_show_hide = "";
		}else{
			$pagi_show_hide = "none";
		}
		//pagination
		$pagination_class = "swiper-pagination ";
        if( $divi8_image_pagination_type === "bullets" && $divi8_image_pagination_dynamicbullet === "on"){
            $pagination_class .= "swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-bullets-dynamic";
        }else if($divi8_image_pagination_type === "bullets") {
            $pagination_class .= "swiper-pagination-clickable swiper-pagination-bullets";
        }else if($divi8_image_pagination_type === "fraction") {
            $pagination_class .= "swiper-pagination-fraction";
        }

		// ARROW COLOR 
		$divi8_image_arrow_color_style = sprintf('color: %1$s !important;', esc_attr($divi8_image_arrow_color));
		$divi8_image_arrow_background_color_style = sprintf('background-color: %1$s !important;', esc_attr($divi8_image_arrow_background));
		$divi8_image_arrow_background_hover_color_style = sprintf('background-color: %1$s !important;', esc_attr($divi8_image_arrow_background_hover));
		$divi8_image_arrow_borderradius_style = sprintf('border-radius: %1$spx;', esc_attr($divi8_image_arrow_border_radius));
	

        // arrow backgroundcolor, hover backgroundcolor, radius
		ET_Builder_Element::set_style( $render_slug, array(
		 'selector'    => "%%order_class%% .swiper-button-prev,%%order_class%% .swiper-button-next",
		 'declaration' => $divi8_image_arrow_color_style,
		) );
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-button-prev, .swiper-container-rtl .swiper-button-next, .swiper-button-next",
			'declaration' => $divi8_image_arrow_background_color_style,
		) );
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-button-prev:hover, .swiper-container-rtl:hover .swiper-button-next:hover, .swiper-button-next:hover",
			'declaration' => $divi8_image_arrow_background_hover_color_style,
		) );
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-button-prev, .swiper-container-rtl .swiper-button-next, .swiper-button-next",
			'declaration' => $divi8_image_arrow_borderradius_style,
		) );

		//arrow padding, hoverpaddin
		$divi8_image_arrow_padding_style = sprintf('padding: %1$spx;', esc_attr($divi8_image_arrow_padding));
		$divi8_image_arrow_padding_hover_style = sprintf('padding: %1$spx;', esc_attr($divi8_image_arrow_padding_hover));
		
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-button-prev, .swiper-container-rtl .swiper-button-next, .swiper-button-next",
			'declaration' => $divi8_image_arrow_padding_style,
		) );
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-button-prev:hover, .swiper-container-rtl:hover .swiper-button-next:hover, .swiper-button-next:hover",
			'declaration' => $divi8_image_arrow_padding_hover_style,
		) );

		// pagination margin position //not work
		$divi8_image_pagination_margin_style = sprintf('margin: 15px;position: relative;');
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-pagination",
			'declaration' => $divi8_image_pagination_margin_style,
		) );

		//pagination size and color // notwork
		$divi8_image_pagination_color_size_style = sprintf('height: %1$spx;background-color:  %2$s ', esc_attr($divi8_image_pagi_size), esc_attr($divi8_image_pagi_bullet_color));
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-pagination .swiper-pagination-clickable .swiper-pagination-bullets",
			'declaration' => $divi8_image_pagination_color_size_style,
		) );
		
		$divi8_image_pagi_bullet_color_style = sprintf('width: %1$spx;height: %2$spx;background-color: %3$s;', esc_attr($divi8_image_pagi_size), esc_attr($divi8_image_pagi_size),esc_attr($divi8_image_pagi_bullet_color));
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-pagination-bullet",
			'declaration' => $divi8_image_pagi_bullet_color_style,
		) );
		//learn more 
		$divi8_image_learnmore_color_size_style = sprintf('background: %1$s; float: %2$s; ', esc_attr($divi8_image_learnmore_bg_color), esc_attr($$divi8_image_lm_position));
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .carousel_content a",
			'declaration' => $divi8_image_learnmore_color_size_style,
		) );
		$divi8_image_learnmore_color_hover_style = sprintf('background: %1$s; ', esc_attr($divi8_image_learnmore_bg_color_hover));
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .carousel_content a:hover",
			'declaration' => $divi8_image_learnmore_color_hover_style,
		) );
		
		// arrow position
		$divi8_image_arrow_position_left = sprintf('left: %1$spx;', esc_attr($divi8_image_arrow_position));
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-button-prev",
			'declaration' => $divi8_image_arrow_position_left,
		) );
		
		$divi8_image_arrow_position_right = sprintf('right: %1$spx;', esc_attr($divi8_image_arrow_position));
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-button-next",
			'declaration' => $divi8_image_arrow_position_right,
		) );

		$divi8_image_bullet_show = sprintf('display: %1$s !important;', esc_attr($pagination_show_hide));
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-pagination",
			'declaration' => $divi8_image_bullet_show,
		) );
		

		$divi8_image_arro_show = sprintf('display: %1$s !important;', esc_attr($pagi_show_hide));
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-button-prev",
			'declaration' => $divi8_image_arro_show,
		) );
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-button-next",
			'declaration' => $divi8_image_arro_show,
		) );
		
		$output_carousel = sprintf('<div class="own">
			<div class="swiper-container swiper-container-image" data-slideperview="%1$s"
			 data-direction="%2$s" 
			 data-loop="%3$s" 
			 data-spacebetween="%4$s" 
			 data-authoheight="%5$s" 
			 data-effects="%6$s" 
			 data-coverflow-rotation="%7$s" 
			 data-coverflowstretch="%8$s"  
			 data-coverflowdepth="%9$s" 
			 data-coverflowshadow="%10$s" 
			 data-coverflowmodifier="%11$s" 
			 data-grabcursor="%12$s" 
			 data-centerslides="%13$s"  
			 data-zoom="%14$s" 
			 data-speed="%15$s" 
			 data-autoplay="%16$s" 
			 data-autoplay-delay="%17$s" 
			 data-observer="%18$s" 
			 data-pagi-dynamicbullets="%19$s" 
			 data-pagi-type="%20$s" 
			 data-mousewheel="%21$s"
			 data-keyboard="%22$s"
			 data-autoplay_pause="%23$s"
			 data-effects-type="%24$s"
			 ><div class="swiper-wrapper">',
            esc_attr($divi8_image_coverflow_slides_perview_desktop), //1
            esc_attr( $dnxte_coverflow_direction ), //2
            esc_attr( $divi8_image_coverflow_loop ), // 3
            esc_attr( $divi8_image_space_between ), //4
            esc_attr( $divi8_image_auto_height ), //5
            esc_attr( $divi8_image_effects_types ), // 6
            esc_attr( $divi8_image_coverflow_sliderotate ), // 7
            esc_attr( $divi8_image_coverflow_slidestretch ),//8
            esc_attr( $divi8_image_coverflow_slidedepth ), // 9
            esc_attr( $divi8_image_effect_slideshadow ), // 10
            1, // 11
            esc_attr( $divi8_image_grab_cursor ), //12
            esc_attr( $divi8_image_centered_slides ), // 13
            True, // 14
            esc_attr( $divi8_image_coverflow_speed ), // 15
            esc_attr( $divi8_image_autoplay_show_hide ), // 16
            $divi8_image_autoplay_delay, // 17
            True, // 18
            $divi8_image_pagination_dynamicbullet, //19
            $divi8_image_pagination_type, // 20
            $divi8_image_nav_mousewheel, // 21
            $divi8_image_nav_keyboard, // 22
			$divi8_image_autoplay_pause, //23
			$divi8_image_effects_types //24
        );
			// carousel data show for each iteam getting from item
			foreach($image_carousel_data as $item){
				if($divi8_image_content_position === 'top'){
					$output_carousel .= '<div class="swiper-slide">
						<div class="carousel_content img_caro">
							<img src=" ' .$item["img"] . ' " alt="">
							<div class="img_caro_top">
								<span>' . $item["heading"]. '</span>
								<p> ' . $item["description"]. '</p> 
							</div>
						</div>
				  </div>';
				}else if($divi8_image_content_position === 'bottom'){
					$output_carousel .= '<div class="swiper-slide">
						<div class="carousel_content img_caro">
							<img src=" ' .$item["img"] . ' " alt="">
							<div class="img_caro_bottom">
								<span>' . $item["heading"]. '</span>
								<p> ' . $item["description"]. '</p> 
							</div>
						</div>
				  </div>';
				}else if($divi8_image_content_position === 'middle'){
					$output_carousel .= '
					<div class="swiper-slide">
						<div class="carousel_content img_caro">
							<img src=" ' .$item["img"] . ' " alt="">
							<div class="img_caro_middle">
								<span>' . $item["heading"]. '</span>
								<p> ' . $item["description"]. '</p> 
							</div>
						</div>
					</div>';
				}else if($divi8_image_content_position === 'outside'){
					
					$output_carousel .= '<div class="swiper-slide">
						<div class="carousel_content img_caro">
							<img src=" ' .$item["img"] . ' " alt="">
							<div class="img_caro_outside">
								<span>' . $item["heading"]. '</span>
								<p> ' . $item["description"]. '</p> 
							</div>
						</div>
				 	 </div>';
				}else if($divi8_image_content_position === 'none'){
					
					$output_carousel .= '<div class="swiper-slide">
						<div class="carousel_content img_caro">
							<img src=" ' .$item["img"] . ' " alt="">
						</div>
				 	 </div>';
				}
				
			}
	
		$output_carousel .= '</div>
			</div>
			<div class="swiper-button-prev"><i class="bi bi-arrow-left"></i></div>
			<div class="swiper-button-next"><i class="bi bi-arrow-left"></i></div>
			<div class="swiper-pagination"></div>
			<div class="swiper-progress-bar"></div>
		</div>';
		
		return sprintf(
			'<div> %1$s </div> <div> %2$s </div>', $output_carousel, $this->content
		);
	}
}
new ImageCarouselDivi8;