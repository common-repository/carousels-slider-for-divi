<?php

class ImageCarouselItemDivi8 extends ET_Builder_Module {

	public $slug       = 'divi8_image_carousel_item';
	public $vb_support = 'on';
	public $type = 'child';
	public $child_title_var = "heading";


	protected $module_credits = array(
		'module_uri' => 'http://divicarousels.com/',
		'author'     => 'divicarousels',
		'author_uri' => 'http://divicarousels.com/',
	);

	public function init() {
		$this->name = esc_html__( 'Image Carousel', 'divi-carousels-lite' );
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
                    'toggle_slug' => 'divi8_image_content_carousel_text_settings'
                ),
                'content' => array(
                    'css' => array(
                        'main' => '%%order_class%% .carousel_content p',
						'important' => 'all'
                    ),
                    'toggle_slug' => 'divi8_image_content_carousel_content_settings'
                )
            ),
            'background' => array(
                'settings' => array(
                    'color' => 'alpha',
                ),
                'css'   => array(
                    'main' => "%%order_class%% .swiper-container",
                    'important' => 'all'
                ),
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
					'toggle_slug'  => 'divi8_image_content_carousel_image_settings',
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
					'toggle_slug'  => 'divi8_image_content_carousel_text_settings',
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
					'toggle_slug'  => 'divi8_image_content_carousel_content_settings',
				),
            ),
        );
    }	

	public function get_fields() {
		$fields = [];
		$fields['heading'] = [
			'label' => esc_html__( "Title", 'divi-carousels-lite'  ),
			'type' => 'text',
			'default' => 'New Item',
		];
		$fields["description"] = [
			'label' => esc_html__( "Sub title", 'divi-carousels-lite'  ),
			'type' => 'text',
			'default' => esc_html('Sub Title'),
		];
		$fields['img'] = [
			'label' => esc_html__( "Image", 'divi-carousels-lite'  ),
			'type' => 'upload',
			'upload_button_text' => esc_attr__( 'Upload an image', 'divi-carousels-lite' ),
			'choose_text' => esc_attr__( 'Choose an image', 'divi-carousels-lite' ),
			'data_type' => 'image',
			'default' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTA4MCIgaGVpZ2h0PSI1NDAiIHZpZXdCb3g9IjAgMCAxMDgwIDU0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VCRUJFQiIgZD0iTTAgMGgxMDgwdjU0MEgweiIvPgogICAgICAgIDxwYXRoIGQ9Ik00NDUuNjQ5IDU0MGgtOTguOTk1TDE0NC42NDkgMzM3Ljk5NSAwIDQ4Mi42NDR2LTk4Ljk5NWwxMTYuMzY1LTExNi4zNjVjMTUuNjItMTUuNjIgNDAuOTQ3LTE1LjYyIDU2LjU2OCAwTDQ0NS42NSA1NDB6IiBmaWxsLW9wYWNpdHk9Ii4xIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgICAgICA8Y2lyY2xlIGZpbGwtb3BhY2l0eT0iLjA1IiBmaWxsPSIjMDAwIiBjeD0iMzMxIiBjeT0iMTQ4IiByPSI3MCIvPgogICAgICAgIDxwYXRoIGQ9Ik0xMDgwIDM3OXYxMTMuMTM3TDcyOC4xNjIgMTQwLjMgMzI4LjQ2MiA1NDBIMjE1LjMyNEw2OTkuODc4IDU1LjQ0NmMxNS42Mi0xNS42MiA0MC45NDgtMTUuNjIgNTYuNTY4IDBMMTA4MCAzNzl6IiBmaWxsLW9wYWNpdHk9Ii4yIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgIDwvZz4KPC9zdmc+Cg==',
		];
		$fields['link'] = [
			'label' => esc_html__( "URL", 'divi-carousels-lite'  ),
			'type' => 'text',
			'default' => 'https://divicarousels.com',
		];
		return $fields;
	}


	public function render( $attrs, $content = null, $render_slug ) {
		global $image_carousel_data;
		// carousel data sent for each iteam
		$description = strip_tags($this->props["description"]);

		$image_carousel_data[] = [
			'heading' => $this->props["heading"],
			'description' => $description,
			'img' => $this->props["img"],
			'link' => $this->props["link"],
		];
		return false;

	}
}


new ImageCarouselItemDivi8;