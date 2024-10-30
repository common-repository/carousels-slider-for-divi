<?php

class TestimonialCarouselDivi8 extends ET_Builder_Module {

	public $slug       = 'divi8_testimonial_carousel';
	public $vb_support = 'on';
	public $child_slug = 'divi8_testimonial_carousel_item';


	protected $module_credits = array(
		'module_uri' => 'http://divicarousels.com/',
		'author'     => 'divicarousels',
		'author_uri' => 'http://divicarousels.com/',
	);


	public function init() {
		$this->name = esc_html__( 'Testimonial Carousel', 'divi8-divicarousel8' );
		$this->settings_modal_toggles = array(
            'general' => array(
                'toggles' => array(
                    'divi8_testimonial_content_carousel_settings' => esc_html__( 'Carousel Settings', 'divi8-divicarousel8'),
                    'divi8_testimonial_content_carousel_navigation' => esc_html__( 'Navigation Settings', 'divi8-divicarousel8'),
					'divi8_testimonial_content_carousel_pagination' => esc_html__( 'Pagination Settings', 'divi8-divicarousel8'),
                    'divi8_testimonial_content_carousel_effect'    => esc_html__( 'Effect Settings', 'divi8-divicarousel8'),
                	)
				),
				'advanced' => array(
					'toggles' => array(
						'divi8_testimonial_content_carousel_item_settings' => esc_html__( 'Slide Item Settings', 'divi8-divicarousel8'),
						'divi8_testimonial_content_carousel_text_all_settings' => esc_html__( 'Name Settings', 'divi8-divicarousel8'),
						'divi8_testimonial_content_carousel_position_all_settings' => esc_html__( 'Position Settings', 'divi8-divicarousel8'),
						'divi8_testimonial_content_carousel_content_all_settings' => esc_html__( 'Content Settings', 'divi8-divicarousel8'),
						'divi8_testimonial_content_carousel_image_all_settings' => array('title' => esc_html__( 'Image Settings', 'divi8-divicarousel8'),),

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
                        'main' => '%%order_class%%  .name_design',
						'important' => 'all'
                    ),
                    'toggle_slug' => 'divi8_testimonial_content_carousel_text_all_settings'
                ),
				'position' => array(
                    'css' => array(
                        'main' => '%%order_class%% .position_design',
						'important' => 'all'
                    ),
                    'toggle_slug' => 'divi8_testimonial_content_carousel_position_all_settings'
                ),
                'content' => array(
                    'css' => array(
                        'main' => '%%order_class%% .carousel_content p',
						'important' => 'all'
                    ),
                    'toggle_slug' => 'divi8_testimonial_content_carousel_content_all_settings'
                ),
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
					'label_prefix' => esc_html__( 'Image', 'divi8-divicarousel8' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'divi8_testimonial_content_carousel_image_all_settings',
                ),

				'item_border'   => array(
					'css'          => array(
						'main' => array(
							'border_radii'  => '%%order_class%% .carousel_content',
							'border_styles' => '%%order_class%% .carousel_content',
                        ),
                    ),
					'label_prefix' => esc_html__( 'Item Border', 'divi8-divicarousel8' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'divi8_testimonial_content_carousel_item_settings',
                ),
                'text_border'   => array(
					'css'          => array(
						'main' => array(
							'border_radii'  => '%%order_class%% .divi8_testimonial_heading',
							'border_styles' => '%%order_class%% .divi8_testimonial_heading',
                        ),
                    ),
					'label_prefix' => esc_html__( 'Text', 'divi8-divicarousel8' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'divi8_testimonial_content_carousel_text_all_settings',
                ),
                'content_border'   => array(
					'css'          => array(
						'main' => array(
							'border_radii'  => '%%order_class%% .carousel_content p',
							'border_styles' => '%%order_class%% .carousel_content p',
                        ),
                    ),
					'label_prefix' => esc_html__( 'Content', 'divi8-divicarousel8' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'divi8_testimonial_content_carousel_content_all_settings',
				),
				'position_border'   => array(
					'css'          => array(
						'main' => array(
							'border_radii'  => '%%order_class%% .position_design',
							'border_styles' => '%%order_class%% .position_design',
                        ),
                    ),
					'label_prefix' => esc_html__( 'Position', 'divi8-divicarousel8' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'divi8_testimonial_content_carousel_position_all_settings',
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
                    'label_prefix' => esc_html__("Item Box Shadow", 'divi8-divicarousel8'),
                    'css' => array(
                        'main' => '%%order_class%% .carousel_content',
                        'important' => 'all',
                    ),
                    'toggle_slug' => 'divi8_testimonial_content_carousel_item_settings'
                ),
				'image_box_shadow' => array(
                    'css'          => array(
                        'main' => '%%order_class%% .carousel_content img ',
                        'important' => 'all'
                    ),
					'label_prefix' => esc_html__( 'Image', 'divi8-divicarousel8' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'divi8_testimonial_content_carousel_image_all_settings',
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
			$fields['divi8_testimonial_autoplay'] = [
				'label' => esc_html__( "AutoPlay", 'divi8-divicarousel8'  ),
				'type'            => 'yes_no_button',
				'options' => array(
                    'on' => esc_html__('On', 'divi8-divicarousel8'),
                    'off' => esc_html__('Off', 'divi8-divicarousel8'),
                ),
                'affects' => array(
                    'divi8_testimonial_slider_autoplaydelay',
                ),
                'default' => 'on',
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_testimonial_content_carousel_settings',
			];
			$fields['divi8_testimonial_slider_autoplaydelay'] = [
				'label' => esc_html__( "Autoplay Delay (ms)", 'divi8-divicarousel8'  ),
				'type'            => 'range',
				'mobile_options'  		=> true,
				'range_settings'  => array(
					'step' => 1,
					'min'  => 100,
					'max'  => 7000,
				),

				'default'         =>'3000',
				'show_if' => array(
                    'divi8_testimonial_autoplay' => 'on',
                ),
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_testimonial_content_carousel_settings',
			];
			$fields['divi8_testimonial_autoplay_loop'] = [
				'label' => esc_html__( "Slider Loop", 'divi8-divicarousel8'  ),
				'type'            => 'yes_no_button',
				'options' => array(
                    'on' => esc_html__('Yes', 'divi8-divicarousel8'),
                    'off' => esc_html__('No', 'divi8-divicarousel8'),
                ),
				'default'          => 'on',
                'default_on_front' => 'on',
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_testimonial_content_carousel_settings',
			];
			$fields['divi8_testimonial_centered_slides'] = [
				'label' => esc_html__( "Center slide", 'divi8-divicarousel8'  ),
				'type'            => 'yes_no_button',
				'options' => array(
                    'on' => esc_html__('Yes', 'divi8-divicarousel8'),
                    'off' => esc_html__('No', 'divi8-divicarousel8'),
                ),
				'default'          => 'on',
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_testimonial_content_carousel_settings',
			];
			$fields['divi8_testimonial_auto_height'] = [
				'label' => esc_html__( "Auto Height", 'divi8-divicarousel8'  ),
				'type'            => 'yes_no_button',
				'options' => array(
                    'on' => esc_html__('Yes', 'divi8-divicarousel8'),
                    'off' => esc_html__('No', 'divi8-divicarousel8'),
                ),
				'default'          => 'off',
                'default_on_front' => 'off',
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_testimonial_content_carousel_settings',
			];
			$fields['divi8_testimonial_autoplay_pause'] = [
				'label' => esc_html__( "Pause on Hover", 'divi8-divicarousel8'  ),
				'type'            => 'yes_no_button',
				'options' => array(
                    'on' => esc_html__('Yes', 'divi8-divicarousel8'),
                    'off' => esc_html__('No', 'divi8-divicarousel8'),
                ),
				'default'          => 'on',
                'default_on_front' => 'on',
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_testimonial_content_carousel_settings',
			];
			$fields['divi8_testimonial_sliderspeed'] = [
				'label' => esc_html__( "Carousel Speed (ms)", 'divi8-divicarousel8'  ),
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
                    'divi8_testimonial_autoplay' => 'on',
                ),
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_testimonial_content_carousel_settings',
			];
			$fields['divi8_testimonial_sliderspcbtn'] = [
				'label' => esc_html__( "Item Space Between", 'divi8-divicarousel8'  ),
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
				'toggle_slug'      => 'divi8_testimonial_content_carousel_settings',
			];
			$fields['divi8_testimonial_sliderperview_desktop'] = [
				'label' => esc_html__( "Show Item Desktop", 'divi8-divicarousel8'  ),
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
				'toggle_slug'      => 'divi8_testimonial_content_carousel_settings',
			];
			$fields['divi8_testimonial_sliderperview_tablet'] = [
				'label' => esc_html__( "Show Item Tablet", 'divi8-divicarousel8'  ),
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
				'toggle_slug'      => 'divi8_testimonial_content_carousel_settings',
			];
			$fields['divi8_testimonial_sliderperview_mobile'] = [
				'label' => esc_html__( "Show Item Mobile", 'divi8-divicarousel8'  ),
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
				'toggle_slug'      => 'divi8_testimonial_content_carousel_settings',
			];
			// Content Positions
			$fields['divi8_testimonial_content_position'] = [
				'label' => esc_html__( "Content Position", 'divi8-divicarousel8'  ),
				'type'            => 'select',
				'options' => array(
                    'layout1' => esc_html__('Layout 1', 'divi8-divicarousel8'),
                    'layout2' => esc_html__('Layout 2', 'divi8-divicarousel8'),
					'layout3' => esc_html__('Layout 3', 'divi8-divicarousel8'),
					
                ),
				'default_on_front' => 'layout1',
				'toggle_slug' => 'main_content',
				'option_category' => 'basic_option',
				'toggle_slug'      => 'divi8_testimonial_content_carousel_settings',
			];

			$fields['divi8_testimonial_rating_color'] = [
				'label' => esc_html__( "Rating Color", 'divi8-divicarousel8'  ),
				'type'         => 'color-alpha',
				'custom_color' => true,
				'default'      => '#0c71c3',
				'toggle_slug'      => 'divi8_testimonial_content_carousel_settings',
				'option_category' => 'basic_option',
			];

		// Navigation Start from here
		$fields['divi8_testimonial_nav_show_hide'] = [
			'label' => esc_html__( "Navigation Show/Hide", 'divi8-divicarousel8'  ),
			'type'            => 'yes_no_button',
			'options' => array(
				'on' => esc_html__('Yes', 'divi8-divicarousel8'),
				'off' => esc_html__('No', 'divi8-divicarousel8'),
			),
			'default'          => 'on',
			'toggle_slug'      => 'divi8_testimonial_content_carousel_navigation',
		];
		$fields['divi8_testimonial_nav_grab_cursor'] = [
			'label' => esc_html__( "Use Grab Cursor", 'divi8-divicarousel8'  ),
			'type'            => 'yes_no_button',
			'options' => array(
				'on' => esc_html__('Yes', 'divi8-divicarousel8'),
				'off' => esc_html__('No', 'divi8-divicarousel8'),
			),
			'default'          => 'off',
			'default_on_front' => 'off',
			'toggle_slug'      => 'divi8_testimonial_content_carousel_navigation',
			'show_if'      => array(
				'divi8_testimonial_nav_show_hide' => 'on'
			)
		];
		$fields['divi8_testimonial_nav_keyboard'] = [
			'label' => esc_html__( "Use KeyBoard Navigation", 'divi8-divicarousel8'  ),
			'type'            => 'yes_no_button',
			'options' => array(
				'on' => esc_html__('Yes', 'divi8-divicarousel8'),
				'off' => esc_html__('No', 'divi8-divicarousel8'),
			),
			'default'          => 'on',
            'default_on_front' => 'on',
			'toggle_slug'      => 'divi8_testimonial_content_carousel_navigation',
			'show_if'      => array(
				'divi8_testimonial_nav_show_hide' => 'on'
			)
		];
		$fields['divi8_testimonial_nav_mousewheel'] = [
			'label' => esc_html__( "Use MouseWheel Navigation", 'divi8-divicarousel8'  ),
			'type'            => 'yes_no_button',
			'options' => array(
				'on' => esc_html__('Yes', 'divi8-divicarousel8'),
				'off' => esc_html__('No', 'divi8-divicarousel8'),
			),
			'default'          => 'on',
            'default_on_front' => 'on',
			'toggle_slug'      => 'divi8_testimonial_content_carousel_navigation',
			'show_if'      => array(
				'divi8_testimonial_nav_show_hide' => 'on'
			)
		];
		$fields['divi8_testimonial_nav_bullettype'] = [
			'label' => esc_html__( " Bullet Type", 'divi8-divicarousel8'  ),
			'type'           => 'select',
			'option_category'=> 'basic_option',
			'options'        => array(
				'bullets' => esc_html__( 'Bullets',  'divi8-divicarousel8' ),
				'fraction'   => esc_html__( 'Fraction', 'divi8-divicarousel8' ),
			),
			'default'        => 'bullets',
			'toggle_slug'      => 'divi8_testimonial_content_carousel_navigation',
			'show_if'      => array(
				'divi8_testimonial_nav_show_hide' => 'on'
			)
		];
		$fields['divi8_testimonial_nav_dynamicbullet'] = [
			'label' => esc_html__( "Dynamic Bullet", 'divi8-divicarousel8'  ),
			'type'            => 'yes_no_button',
			'options' => array(
				'on' => esc_html__('Yes', 'divi8-divicarousel8'),
				'off' => esc_html__('No', 'divi8-divicarousel8'),
			),
			'default'          => 'on',
            'default_on_front' => 'on',
			'toggle_slug'      => 'divi8_testimonial_content_carousel_navigation',
			'show_if'      => array(
				'divi8_testimonial_nav_bullettype' => 'bullets',
				'divi8_testimonial_nav_show_hide' => 'on'
			)
		];
		// Bullet Color
		$fields['divi8_testimonial_pagi_bullet_color'] = [
			'label' => esc_html__( "Bullet Color", 'divi8-divicarousel8'  ),
			'type'         => 'color-alpha',
			'custom_color' => true,
			'default'      => '#0c71c3',
			'toggle_slug'      => 'divi8_testimonial_content_carousel_navigation',
			'option_category' => 'basic_option',
			'show_if'      => array(
				'divi8_testimonial_nav_bullettype' => 'bullets',
				'divi8_testimonial_nav_show_hide' => 'on'
			)
		];
		$fields['divi8_testimonial_pagi_progressbar_fill_color'] = [
			'label' => esc_html__( "Progressbar Fill Color", 'divi8-divicarousel8'  ),
			'type'         => 'color-alpha',
			'custom_color' => true,
			'default'      => '#0c71c3',
			'toggle_slug'      => 'divi8_testimonial_content_carousel_navigation',
			'option_category' => 'basic_option',
			'show_if'      => array(
				'divi8_testimonial_nav_bullettype' => 'progressbar',
				'divi8_testimonial_nav_show_hide' => 'on'
			)
		];
		$fields['divi8_testimonial_pagi_size'] = [
			'label'           => esc_html__( 'Bullet Size', 'divi8-divicarousel8' ),
			'type'            => 'range',
			'option_category' => 'basic_option',
			'range_settings'  => array(
				'step' => 1,
				'min'  => 1,
				'max'  => 100,
			),
			'default'         => '10',
			'toggle_slug'      => 'divi8_testimonial_content_carousel_navigation',
			'show_if'      => array(
				'divi8_testimonial_nav_bullettype' => 'bullets',
				'divi8_testimonial_nav_show_hide' => 'on'
			)
		];
		//Effect Settings
		$fields['divi8_testimonial_effect_slideshadow'] = [
			'label' => esc_html__( "Slider Shadow", 'divi8-divicarousel8'  ),
			'type'            => 'yes_no_button',
			'options' => array(
				'on' => esc_html__('Yes', 'divi8-divicarousel8'),
				'off' => esc_html__('No', 'divi8-divicarousel8'),
			),
			'default'          => 'off',
            'default_on_front' => 'off',
			'toggle_slug'      => 'divi8_testimonial_content_carousel_effect',
		];
		$fields['divi8_testimonial_effect_sliderotate'] = [
			'label' => esc_html__( "Slide Rotate", 'divi8-divicarousel8'  ),
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
			'toggle_slug'      => 'divi8_testimonial_content_carousel_effect',
		];
		$fields['divi8_testimonial_effect_slidestretch'] = [
			'label' => esc_html__( "Slide Stretch", 'divi8-divicarousel8'  ),
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
			'toggle_slug'      => 'divi8_testimonial_content_carousel_effect',
		];
		$fields['divi8_testimonial_effect_slidedepth'] = [
			'label' => esc_html__( "Slide Depth", 'divi8-divicarousel8'  ),
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
			'toggle_slug'      => 'divi8_testimonial_content_carousel_effect',
		];
		// Arrow Start
		$fields['divi8_testimonial_arrow_show_hide'] = [
			'label' => esc_html__( "Pagination Show/Hide", 'divi8-divicarousel8' ),
			'type'            => 'yes_no_button',
			'options' => array(
				'on' => esc_html__('Yes', 'divi8-divicarousel8'),
				'off' => esc_html__('No', 'divi8-divicarousel8'),
			),
			'default'          => 'on',
			'toggle_slug'      => 'divi8_testimonial_content_carousel_pagination',
		];
		$fields['divi8_testimonial_arrow_position'] = [
			'label' => esc_html__( "Position", 'divi8-divicarousel8'  ),
			'type'            => 'range',
			'range_settings'  => array(
				'step' => 1,
				'min'  => -70,
				'max'  => 60,
			),
			'default'         => '15',
			'toggle_slug' => 'main_content',
			'option_category' => 'basic_option',
			'toggle_slug'      => 'divi8_testimonial_content_carousel_pagination',
			'show_if'      => array(
				'divi8_testimonial_arrow_show_hide' => 'on'
			)
		];
		$fields['divi8_testimonial_arrow_padding'] = [
			'label'           => esc_html__( 'Background Size', 'divi8-divicarousel8' ),
			'type'            => 'range',
			'range_settings'  => array(
				'step' => 1,
				'min'  => 1,
				'max'  => 100,
			),
			'toggle_slug' => 'main_content',
			'option_category' => 'basic_option',
			'default'         => '20',
			'toggle_slug'      => 'divi8_testimonial_content_carousel_pagination',
			'show_if'      => array(
				'divi8_testimonial_arrow_show_hide' => 'on'
			)
		];
		$fields['divi8_testimonial_arrow_padding_hover'] = [
			'label'           => esc_html__( 'Background Size Hover', 'divi8-divicarousel8' ),
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
			'toggle_slug'      => 'divi8_testimonial_content_carousel_pagination',
			'show_if'      => array(
				'divi8_testimonial_arrow_show_hide' => 'on'
			)
		];
		$fields['divi8_testimonial_arrow_border_radius'] = [
			'label'           => esc_html__( 'Radius', 'divi8-divicarousel8' ),
			'type'            => 'range',
			'range_settings'  => array(
				'step' => 1,
				'min'  => 1,
				'max'  => 100,
			),
			'toggle_slug' => 'main_content',
			'option_category' => 'basic_option',
			'default'         => '22',
			'toggle_slug'      => 'divi8_testimonial_content_carousel_pagination',
			'show_if'      => array(
				'divi8_testimonial_arrow_show_hide' => 'on'
			)
		];
		// Arrow Color
		$fields['divi8_testimonial_arrow_color'] = [
			'label' => esc_html__( "Color", 'divi8-divicarousel8'  ),
			'type'         => 'color-alpha',
			'custom_color' => true,
			'default'      => '#f1f5f9',
			'toggle_slug' => 'main_content',
			'option_category' => 'basic_option',
			'toggle_slug'      => 'divi8_testimonial_content_carousel_pagination',
			'show_if'      => array(
				'divi8_testimonial_arrow_show_hide' => 'on'
			)
		];
		// Arrow Background Color
		$fields['divi8_testimonial_arrow_background'] = [
			'label'           => esc_html__( 'Background color', 'divi8-divicarousel8' ),
			'type'         => 'color-alpha',
			'custom_color' => true,
			'default'      => '#0c71c3',
			'toggle_slug' => 'main_content',
			'option_category' => 'basic_option',
			'toggle_slug'      => 'divi8_testimonial_content_carousel_pagination',
			'show_if'      => array(
				'divi8_testimonial_arrow_show_hide' => 'on'
			)
		];
		// Arrow Background Color Hover
		$fields['divi8_testimonial_arrow_background_hover'] = [
			'label'           => esc_html__( 'Background Color Hover', 'divi8-divicarousel8' ),
			'type'         => 'color-alpha',
			'custom_color' => true,
			'default'      => '#0c71c3',
			'toggle_slug' => 'main_content',
			'option_category' => 'basic_option',
			'toggle_slug'      => 'divi8_testimonial_content_carousel_pagination',
			'show_if'      => array(
				'divi8_testimonial_arrow_show_hide' => 'on'
			)
		];
		return $fields;
	}


	public function before_render(){
		global $tesimonialcarousel_data;
		$tesimonialcarousel_data = [];
	}
	public function ratting_show($rating){
		if ($rating == 5){
			return '
			<li><span class="divi8-star-fill" aria-hidden="true"></span></li>
			<li><span class="divi8-star-fill" aria-hidden="true"></span></li>
			<li><span class="divi8-star-fill" aria-hidden="true"></span></li>
			<li><span class="divi8-star-fill" aria-hidden="true"></span></li>
			<li><span class="divi8-star-fill" aria-hidden="true"></span></li>
					';
		}else if($rating == 4){
			return '
			<li><span class="divi8-star-fill" aria-hidden="true"></span></li>
			<li><span class="divi8-star-fill" aria-hidden="true"></span></li>
			<li><span class="divi8-star-fill" aria-hidden="true"></span></li>
			<li><span class="divi8-star-fill" aria-hidden="true"></span></li>
			<li><span class="divi8-star_alt" aria-hidden="true"></span></li>
					';
		}else if($rating == 3){
			return '
			<li><span class="divi8-star-fill" aria-hidden="true"></span></li>
			<li><span class="divi8-star-fill" aria-hidden="true"></span></li>
			<li><span class="divi8-star-fill" aria-hidden="true"></span></li>
			<li><span class="divi8-star_alt" aria-hidden="true"></span></li>
			<li><span class="divi8-star_alt" aria-hidden="true"></span></li>
					';
		}else if($rating == 2){
			return '
			<li><span class="divi8-star-fill" aria-hidden="true"></span></li>
			<li><span class="divi8-star-fill" aria-hidden="true"></span></li>
			<li><span class="divi8-star_alt" aria-hidden="true"></span></li>
			<li><span class="divi8-star_alt" aria-hidden="true"></span></li>
			<li><span class="divi8-star_alt" aria-hidden="true"></span></li>
					';
		}else if($rating == 1){
			return '
			<li><span class="divi8-star-fill" aria-hidden="true"></span></li>
			<li><span class="divi8-star_alt" aria-hidden="true"></span></li>
			<li><span class="divi8-star_alt" aria-hidden="true"></span></li>
			<li><span class="divi8-star_alt" aria-hidden="true"></span></li>
			<li><span class="divi8-star_alt" aria-hidden="true"></span></li>
					';
		}else{
			return '
			<li><span class="divi8-star_alt" aria-hidden="true"></span></li>
			<li><span class="divi8-star_alt" aria-hidden="true"></span></li>
			<li><span class="divi8-star_alt" aria-hidden="true"></span></li>
			<li><span class="divi8-star_alt" aria-hidden="true"></span></li>
			<li><span class="divi8-star_alt" aria-hidden="true"></span></li>
					';
		}

	}
	public function  leftIconShow(){
		if ($this->props["divi8_left_icon"]){
		  $icon = "<i class='et-pb-icon divi8-icon-left'>";
		  $icon .=	esc_attr( et_pb_process_font_icon($this->props['divi8_left_icon']));
		  $icon .= "</i>";
		}else{
			$icon = "<i class='et-pb-icon divi8-icon-left'>4</i>";
		}
		return $icon;
	}
	public function  rightIconShow(){
		if ($this->props["divi8_right_icon"]){
		  $icon = "<i class='et-pb-icon divi8-icon-right'>";
		  $icon .=	esc_attr( et_pb_process_font_icon($this->props['divi8_right_icon']));
		  $icon .= "</i>";
		}else{
			$icon = "<i class='et-pb-icon divi8-icon-right'>5</i>";
		}
		return $icon;
	}
	public function render( $attrs, $content = null, $render_slug ) {
		global $tesimonialcarousel_data;
		$divi8_testimonial_autoplay_show_hide = "on" === $this->props['divi8_testimonial_autoplay'];
        $divi8_testimonial_autoplay_delay = $this->props['divi8_testimonial_slider_autoplaydelay'];
		$divi8_testimonial_coverflow_speed = $this->props['divi8_testimonial_sliderspeed'];
        $divi8_testimonial_coverflow_loop = $this->props['divi8_testimonial_autoplay_loop'];
		$divi8_coverflow_direction = "horizontal";
        $divi8_testimonial_coverflow_slides_perview_desktop = $this->props['divi8_testimonial_sliderperview_desktop'];
        $divi8_testimonial_coverflow_slides_perview_desktop_tablet = $this->props['divi8_testimonial_sliderperview_tablet'];
        $divi8_testimonial_coverflow_slides_perview_desktop_phone = $this->props['divi8_testimonial_sliderperview_mobile'];;
        $divi8_testimonial_coverflow_sliderotate = $this->props['divi8_testimonial_effect_sliderotate'];
        $divi8_testimonial_coverflow_slidestretch = $this->props['divi8_testimonial_effect_slidestretch'];
        $divi8_testimonial_coverflow_slidedepth = $this->props['divi8_testimonial_effect_slidedepth'];
		$divi8_testimonial_effect_slideshadow = $this->props['divi8_testimonial_effect_slideshadow'];
		$divi8_testimonial_pagination_type = $this->props['divi8_testimonial_nav_bullettype'];
        $divi8_testimonial_pagination_dynamicbullet = $divi8_testimonial_pagination_type === 'bullets' ? $this->props['divi8_testimonial_nav_dynamicbullet'] : "off";
		$divi8_testimonial_content_position = $this->props['divi8_testimonial_content_position'];
        $divi8_testimonial_space_between = $this->props['divi8_testimonial_sliderspcbtn'];
		$divi8_testimonial_centered_slides =  "on" === $this->props['divi8_testimonial_centered_slides'];
        $divi8_testimonial_auto_height = $this->props['divi8_testimonial_auto_height'];
        $divi8_testimonial_autoplay_pause = "on" === $this->props['divi8_testimonial_autoplay_pause'];
		$divi8_testimonial_grab_cursor = $this->props['divi8_testimonial_nav_grab_cursor'];
		$divi8_testimonial_nav_keyboard = $this->props['divi8_testimonial_nav_keyboard'];
        $divi8_testimonial_nav_mousewheel = $this->props['divi8_testimonial_nav_mousewheel'];
		$divi8_testimonial_pagi_bullet_color = $this->props['divi8_testimonial_pagi_bullet_color'];
		$divi8_testimonial_pagi_progressbar_fill_color = $this->props['divi8_testimonial_pagi_progressbar_fill_color'];
		$divi8_testimonial_pagi_size = $this->props['divi8_testimonial_pagi_size'];
		$divi8_testimonial_pagi_margin = $this->props['divi8_testimonial_pagi_margin'];
		$divi8_testimonial_pagi_padding = $this->props['divi8_testimonial_pagi_padding'];
		$divi8_testimonial_arrow_color = $this->props['divi8_testimonial_arrow_color'];
		$divi8_testimonial_arrow_background = $this->props['divi8_testimonial_arrow_background'];
		$divi8_testimonial_arrow_background_hover = $this->props['divi8_testimonial_arrow_background_hover'];
		$divi8_testimonial_arrow_place = $this->props['divi8_testimonial_arrow_place'];
		$divi8_testimonial_arrow_position = $this->props['divi8_testimonial_arrow_position'];
		$divi8_testimonial_arrow_padding = $this->props['divi8_testimonial_arrow_padding'];
		$divi8_testimonial_arrow_padding_hover = $this->props['divi8_testimonial_arrow_padding_hover'];
		$divi8_testimonial_arrow_border_radius = $this->props['divi8_testimonial_arrow_border_radius'];
		$divi8_testimonial_effect = "slider";	

		if ($this->props["divi8_testimonial_nav_show_hide"] == "on"){
			$pagination_show_hide = "block";
		}else{
			$pagination_show_hide = "none";
		}
		if ($this->props["divi8_testimonial_arrow_show_hide"] == "on"){
			$pagi_show_hide = "";
		}else{
			$pagi_show_hide = "none";
		}
		//pagination
		$pagination_class = "swiper-pagination ";
        if( $divi8_testimonial_pagination_type === "bullets" && $divi8_testimonial_pagination_dynamicbullet === "on"){
            $pagination_class .= "swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-bullets-dynamic";
        }else if($divi8_testimonial_pagination_type === "bullets") {
            $pagination_class .= "swiper-pagination-clickable swiper-pagination-bullets";
        }else if($divi8_testimonial_pagination_type === "fraction") {
            $pagination_class .= "swiper-pagination-fraction";
        }

		// ARROW COLOR
		$divi8_testimonial_arrow_color_style = sprintf('color: %1$s !important;', esc_attr($divi8_testimonial_arrow_color));
		$divi8_testimonial_arrow_background_color_style = sprintf('background-color: %1$s !important;', esc_attr($divi8_testimonial_arrow_background));
		$divi8_testimonial_arrow_background_hover_color_style = sprintf('background-color: %1$s !important;', esc_attr($divi8_testimonial_arrow_background_hover));
		$divi8_testimonial_arrow_borderradius_style = sprintf('border-radius: %1$spx;', esc_attr($divi8_testimonial_arrow_border_radius));
		// rating color divi8_testimonial_rating_color
		$divi8_testimonial_rating_color_style = sprintf('color: %1$s !important;', $this->props['divi8_testimonial_rating_color']);
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .divi8-star-fill:before",
			'declaration' => $divi8_testimonial_rating_color_style,
		) );
		//testimonial image and rating css
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .social-media",
			'declaration' => "justify-content: center!important; position:relative;display: flex;flex-flow: nowrap;max-width: 78%; height: 26px; ",
		) );
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .social-media li",
			'declaration' => " list-style: none;",
		) );
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .carousel_content .image_circle",
			'declaration' => "border-radius: 50% 50% 50% 50%; overflow: hidden;",
		) );
		
        // arrow backgroundcolor, hover backgroundcolor, radius
		ET_Builder_Element::set_style( $render_slug, array(
		 'selector'    => "%%order_class%% .swiper-button-prev,%%order_class%% .swiper-button-next",
		 'declaration' => $divi8_testimonial_arrow_color_style,
		) );
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-button-prev, .swiper-container-rtl .swiper-button-next, .swiper-button-next",
			'declaration' => $divi8_testimonial_arrow_background_color_style,
		) );
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-button-prev:hover, .swiper-container-rtl:hover .swiper-button-next:hover, .swiper-button-next:hover",
			'declaration' => $divi8_testimonial_arrow_background_hover_color_style,
		) );
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-button-prev, .swiper-container-rtl .swiper-button-next, .swiper-button-next",
			'declaration' => $divi8_testimonial_arrow_borderradius_style,
		) );

		//arrow padding, hoverpaddin
		$divi8_testimonial_arrow_padding_style = sprintf('padding: %1$spx;', esc_attr($divi8_testimonial_arrow_padding));
		$divi8_testimonial_arrow_padding_hover_style = sprintf('padding: %1$spx;', esc_attr($divi8_testimonial_arrow_padding_hover));

		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-button-prev, .swiper-container-rtl .swiper-button-next, .swiper-button-next",
			'declaration' => $divi8_testimonial_arrow_padding_style,
		) );
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-button-prev:hover, .swiper-container-rtl:hover .swiper-button-next:hover, .swiper-button-next:hover",
			'declaration' => $divi8_testimonial_arrow_padding_hover_style,
		) );

		// pagination margin position //not work
		$divi8_testimonial_pagination_margin_style = sprintf('margin: 15px;position: relative;');
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-pagination",
			'declaration' => $divi8_testimonial_pagination_margin_style,
		) );

		//pagination size and color // notwork
		$divi8_testimonial_pagination_color_size_style = sprintf('height: %1$spx;background-color:  %2$s ', esc_attr($divi8_testimonial_pagi_size), esc_attr($divi8_testimonial_pagi_bullet_color));
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-pagination .swiper-pagination-clickable .swiper-pagination-bullets",
			'declaration' => $divi8_testimonial_pagination_color_size_style,
		) );

		$divi8_testimonial_pagi_bullet_color_style = sprintf('width: %1$spx;height: %2$spx;background-color: %3$s;', esc_attr($divi8_testimonial_pagi_size), esc_attr($divi8_testimonial_pagi_size),esc_attr($divi8_testimonial_pagi_bullet_color));
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-pagination-bullet",
			'declaration' => $divi8_testimonial_pagi_bullet_color_style,
		) );

		// arrow position
		$divi8_testimonial_arrow_position_left = sprintf('left: %1$spx;', esc_attr($divi8_testimonial_arrow_position));
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-button-prev",
			'declaration' => $divi8_testimonial_arrow_position_left,
		) );

		$divi8_testimonial_arrow_position_right = sprintf('right: %1$spx;', esc_attr($divi8_testimonial_arrow_position));
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-button-next",
			'declaration' => $divi8_testimonial_arrow_position_right,
		) );

		$divi8_testimonial_bullet_show = sprintf('display: %1$s !important;', esc_attr($pagination_show_hide));
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-pagination",
			'declaration' => $divi8_testimonial_bullet_show,
		) );


		$divi8_testimonial_arro_show = sprintf('display: %1$s !important;', esc_attr($pagi_show_hide));
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-button-prev",
			'declaration' => $divi8_testimonial_arro_show,
		) );
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => "%%order_class%% .swiper-button-next",
			'declaration' => $divi8_testimonial_arro_show,
		) );

		$output_carousel = sprintf('<div class="own">
			<div class="swiper-container testimonial-swiper" data-slideperview="%1$s|%2$s|%3$s"
			 data-direction="%4$s"
			 data-loop="%5$s"
			 data-spacebetween="%6$s"
			 data-authoheight="%7$s"
			 data-effects="%8$s"
			 data-coverflow-rotation="%9$s"
			 data-coverflowstretch="%10$s"
			 data-coverflowdepth="%11$s"
			 data-coverflowshadow="%12$s"
			 data-coverflowmodifier="%13$s"
			 data-grabcursor="%14$s"
			 data-centerslides="%15$s"
			 data-zoom="%16$s"
			 data-speed="%17$s"
			 data-autoplay="%18$s"
			 data-autoplay-delay="%19$s"
			 data-observer="%20$s"
			 data-pagi-dynamicbullets="%21$s"
			 data-pagi-type="%22$s"
			 data-mousewheel="%23$s"
			 data-keyboard="%24$s"
			 data-autoplay_pause="%25$s"
			 ><div class="swiper-wrapper">',
            esc_attr($divi8_testimonial_coverflow_slides_perview_desktop), //1
			2, // 2
			1, // 3
            esc_attr( $divi8_coverflow_direction ), //4
            esc_attr( $divi8_testimonial_coverflow_loop ), // 5
            esc_attr( $divi8_testimonial_space_between ), //6
            esc_attr( $divi8_testimonial_auto_height ), //7
            esc_attr( $divi8_testimonial_effect ), // 8
            esc_attr( $divi8_testimonial_coverflow_sliderotate ), // 9
            esc_attr( $divi8_testimonial_coverflow_slidestretch ),//10
            esc_attr( $divi8_testimonial_coverflow_slidedepth ), // 11
            esc_attr( $divi8_testimonial_effect_slideshadow ), // 12
            1, // 13
            esc_attr( $divi8_testimonial_grab_cursor ), //14
            esc_attr( $divi8_testimonial_centered_slides ), // 15
            True, // 16
            esc_attr( $divi8_testimonial_coverflow_speed ), // 17
            esc_attr( $divi8_testimonial_autoplay_show_hide ), // 18
            $divi8_testimonial_autoplay_delay, // 19
            True, // 20
            $divi8_testimonial_pagination_dynamicbullet, //21
            $divi8_testimonial_pagination_type, // 22
            $divi8_testimonial_nav_mousewheel, // 23
            $divi8_testimonial_nav_keyboard, // 24
			$divi8_testimonial_autoplay_pause //25
        );
			// carousel data show for each iteam getting from item
			foreach($tesimonialcarousel_data as $item){
				if($divi8_testimonial_content_position === 'layout1'){
					$output_carousel .= '<div class="swiper-slide">
						<div class="carousel_content">
							<img src=" ' .$item["img"] . ' " alt="">
							<span class ="name_design">' . $item["name"]. '</span>
							<span class = "position_design">' . $item["position"]. '</span>
							<p> ' . $item["description"]. '</p>
							<div class="social-media-container">
							<ul class="social-media">
							'.$this->ratting_show($item["rating"]).'
							</ul>
							</div>
							
						</div>
				  </div>';
				}else if($divi8_testimonial_content_position === 'layout2'){
					$output_carousel .= '<div class="swiper-slide">
							<div class="carousel_content">
	
							<span class ="name_design">' . $item["name"]. '</span>
							<span class = "position_design">' . $item["position"]. '</span>
							
							<img src=" ' .$item["img"] . ' " alt="" class="image_circle">
							<div class="social-media-container">
							<ul class="social-media">
							'.$this->ratting_show($item["rating"]).'
							</ul>
							</div>
							<p> ' . $item["description"]. '</p>
						</div>
				  </div>';
				}else if($divi8_testimonial_content_position === 'layout3'){
					$output_carousel .= '<div class="swiper-slide">
							<div class="carousel_content">
							<img src=" ' .$item["img"] . ' " alt="" class="image_circle">
							<div class="social-media-container">
							<ul class="social-media" >
							'.$this->ratting_show($item["rating"]).'
							</ul>
							</div>
							<span class ="name_design">' . $item["name"]. '</span>
							<span class = "position_design">' . $item["position"]. '</span>
							<p> ' . $item["description"]. '</p>
						
						</div>
				  	</div>';
				}

			}

		$output_carousel .= '</div>
			</div>
			<div class="swiper-navi-container">
				<div class="swiper-button-prev">'. $this->leftIconShow() .'</div>
				<div class="swiper-button-next">'. $this->rightIconShow() .'</div>
			</div>
			<div class="swiper-pagination"></div>
			<div class="swiper-progress-bar"></div>
		</div>';

		return sprintf(
			'<div> %1$s </div> <div> %2$s </div>', $output_carousel, $this->content
		);
	}
}
new TestimonialCarouselDivi8;