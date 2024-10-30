<?php

class LogoCarouselItemDivi8 extends ET_Builder_Module {

	public $slug       = 'divi8_logo_carousel_item';
	public $vb_support = 'on';
	public $type = 'child';
	public $child_title_var = "title";


	protected $module_credits = array(
		'module_uri' => 'http://divicarousels.com/',
		'author'     => 'divicarousels',
		'author_uri' => 'http://divicarousels.com/',
	);

	public function init() {

		$this->name = esc_html__( 'Logo Carousel', 'divi-carousels-lite' );
	}

	public function get_fields() {
		$fields = [];
		$fields['logo_img'] = [
			'label' => esc_html__( "Logo", 'divi-carousels-lite'  ),
			'type' => 'upload',
			'upload_button_text' => esc_attr__( 'Upload an Logo', 'divi-carousels-lite' ),
			'choose_text' => esc_attr__( 'Choose an Logo', 'divi-carousels-lite' ),
			'data_type' => 'image',
			'default' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTA4MCIgaGVpZ2h0PSI1NDAiIHZpZXdCb3g9IjAgMCAxMDgwIDU0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VCRUJFQiIgZD0iTTAgMGgxMDgwdjU0MEgweiIvPgogICAgICAgIDxwYXRoIGQ9Ik00NDUuNjQ5IDU0MGgtOTguOTk1TDE0NC42NDkgMzM3Ljk5NSAwIDQ4Mi42NDR2LTk4Ljk5NWwxMTYuMzY1LTExNi4zNjVjMTUuNjItMTUuNjIgNDAuOTQ3LTE1LjYyIDU2LjU2OCAwTDQ0NS42NSA1NDB6IiBmaWxsLW9wYWNpdHk9Ii4xIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgICAgICA8Y2lyY2xlIGZpbGwtb3BhY2l0eT0iLjA1IiBmaWxsPSIjMDAwIiBjeD0iMzMxIiBjeT0iMTQ4IiByPSI3MCIvPgogICAgICAgIDxwYXRoIGQ9Ik0xMDgwIDM3OXYxMTMuMTM3TDcyOC4xNjIgMTQwLjMgMzI4LjQ2MiA1NDBIMjE1LjMyNEw2OTkuODc4IDU1LjQ0NmMxNS42Mi0xNS42MiA0MC45NDgtMTUuNjIgNTYuNTY4IDBMMTA4MCAzNzl6IiBmaWxsLW9wYWNpdHk9Ii4yIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgIDwvZz4KPC9zdmc+Cg==',
		];
		$fields['logo_link'] = [
			'label' => esc_html__( "URL", 'divi-carousels-lite'  ),
			'type' => 'text',
			'default' => 'https://divicarousels.com',
		];
		return $fields;
	}


	public function render( $attrs, $content = null, $render_slug ) {
		global $logocarousel_data;
		// carousel data sent for each iteam
		$logocarousel_data[] = [
			'logo_img' => $this->props["logo_img"],
			'logo_link' => $this->props["logo_link"],
		];
		return false;

	}
}


new LogoCarouselItemDivi8;