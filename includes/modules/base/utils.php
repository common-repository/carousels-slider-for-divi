<?php
if ( ! class_exists( 'ET_Builder_Element' ) ) {
	return;
}

trait DCS_UTILS{
    // $text_domain = 'divi8-divicarousel8';
    function divi8_margin_padding(&$fields, $options, $type ) {
        $key = $options['key'] . '_' . $type;
 
        $fields[$key] = array(
            'label'				=> sprintf(esc_html__('%1$s %2$s', 'dcs-divicarousel'), $options['title'], ucwords($type)),
            'type'				=> 'custom_margin',
            'toggle_slug'       => $options['toggle_slug'],
            'sub_toggle'		=> $options['sub_toggle'],
            'tab_slug'			=> 'advanced',
            'mobile_options'    => true,
            'hover'				=> 'tabs',
            'priority' 			=> $options['priority'],
        );
        $fields[$key . '_tablet'] = array(
            'type'            	=> 'skip',
            'tab_slug'        	=> 'advanced',
            'toggle_slug'		=> $options['toggle_slug'],
            'sub_toggle'		=> $options['sub_toggle']
        );
        $fields[$key.'_phone'] = array(
            'type'            	=> 'skip',
            'tab_slug'        	=> 'advanced',
            'toggle_slug'		=> $options['toggle_slug'],
            'sub_toggle'		=> $options['sub_toggle']
        );
        $fields[$key.'_last_edited'] = array(
            'type'            	=> 'skip',
            'tab_slug'        	=> 'advanced',
            'toggle_slug'		=> $options['toggle_slug'],
            'sub_toggle'		=> $options['sub_toggle']
        );
}

function add_margin_padding( $options = array() ) {
    $margin_padding = array();
    $default = array(
        'title'         => '',
        'key'           => '',
        'toggle_slug'   => '',
        'sub_toggle'    => null,
        'option'        => 'both',
        'priority'      => 30
    );
    $args = wp_parse_args( $options, $default );

    if ( $args['option'] === 'both' || $args['option'] === 'margin' ) {
        $this->divi8_margin_padding($margin_padding, $args, 'margin');
    }
    if ( $args['option'] === 'both' || $args['option'] === 'padding' ) {
        $this->divi8_margin_padding($margin_padding, $args, 'padding');
    }
    return $margin_padding;
}

}