<?php
include_once(DCS_DIVICAROUSEL_PATH.'/includes/modules/base/base.php');
class DCS_LogoCarouselItem extends ET_Builder_Module {

	public $slug       	    = 'divi8_logo_carousel_item';
	public $vb_support      = 'on';
	public $type            = 'child';
	public $child_title_var = 'heading';
	public $child_title_fallback_var = 'description';
	public $text_domain = 'dcs-divicarousel'; 


	protected $module_credits = array(
		'module_uri' => 'https://divicarousels.com/',
		'author'     => 'DiviCarousel',
		'author_uri' => 'https://divicarousels.com/',
	);

	public function init() {
		$this->name = esc_html__( 'Logo Carousel', 'divi8-divicarousel8' );
		$this->settings_modal_toggles = array(
			'advanced' => array(
				'toggles' => array(
					'divi8_logo_carousel_item_settings' => esc_html__( 'Logo Item Settings', 'divi8-divicarousel8'),					
				)
			)
	);
	}
	public function get_advanced_fields_config() {
        return array(
            'text'  => false,
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
							'border_radii'  => '%%order_class%% .carousel_content',
							'border_styles' => '%%order_class%% .carousel_content',
                        ),
                    ),
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
					'toggle_slug'  => 'divi8_logo_carousel_item_settings',
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
                    'toggle_slug' => 'divi8_logo_carousel_item_settings'
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
		$fields['img'] = [
			'label' => esc_html__( "Logo", 'divi8-divicarousel8'  ),
			'type' => 'upload',
			'upload_button_text' => esc_attr__( 'Upload an logo', 'divi8-divicarousel8' ),
			'choose_text' => esc_attr__( 'Choose an logo', 'divi8-divicarousel8' ),
			'data_type' => 'image',
			'default' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTA4MCIgaGVpZ2h0PSI1NDAiIHZpZXdCb3g9IjAgMCAxMDgwIDU0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VCRUJFQiIgZD0iTTAgMGgxMDgwdjU0MEgweiIvPgogICAgICAgIDxwYXRoIGQ9Ik00NDUuNjQ5IDU0MGgtOTguOTk1TDE0NC42NDkgMzM3Ljk5NSAwIDQ4Mi42NDR2LTk4Ljk5NWwxMTYuMzY1LTExNi4zNjVjMTUuNjItMTUuNjIgNDAuOTQ3LTE1LjYyIDU2LjU2OCAwTDQ0NS42NSA1NDB6IiBmaWxsLW9wYWNpdHk9Ii4xIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgICAgICA8Y2lyY2xlIGZpbGwtb3BhY2l0eT0iLjA1IiBmaWxsPSIjMDAwIiBjeD0iMzMxIiBjeT0iMTQ4IiByPSI3MCIvPgogICAgICAgIDxwYXRoIGQ9Ik0xMDgwIDM3OXYxMTMuMTM3TDcyOC4xNjIgMTQwLjMgMzI4LjQ2MiA1NDBIMjE1LjMyNEw2OTkuODc4IDU1LjQ0NmMxNS42Mi0xNS42MiA0MC45NDgtMTUuNjIgNTYuNTY4IDBMMTA4MCAzNzl6IiBmaWxsLW9wYWNpdHk9Ii4yIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgIDwvZz4KPC9zdmc+Cg==',
		];
		$fields['img_alt'] = [
			'label' => esc_html__( "Logo Alt", 'divi8-divicarousel8'  ),
			'type' => 'text',
			'description'     => esc_html__( 'Input your desired logo alt text here.', 'divi8-divicarousel8' ),
			'default' => '',
		];
		
		return $fields;
	}


	public function render( $attrs, $content = null, $render_slug ) {
		$img = strip_tags($this->props["img"]);
		$img_alt = $this->props["img_alt"];
		$output_carousel = '<div class="carousel_content img_caro">
				<img src=" ' . $img . ' " alt=" ' . $img_alt . ' ">
			</div>';
		return sprintf(
			'<div> %1$s </div>', $output_carousel
		);

	}
}

new DCS_LogoCarouselItem;