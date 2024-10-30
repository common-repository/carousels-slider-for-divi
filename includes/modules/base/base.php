<?php

class BaseDCSCarousel {
    public static function basecarouse8_set_style($render_slug, $props, $property, $css_selector, $css_property, $important = true)
    {

        $responsive_active = !empty($props[$property . "_last_edited"]) && et_pb_get_responsive_status($props[$property . "_last_edited"]);

        $declaration_desktop = "";
        $declaration_tablet = "";
        $declaration_phone = "";

        $is_important = $important ? '!important' : '';

        switch ($css_property) {
            case "margin":
            case "padding":
                if (!empty($props[$property])) {
                    $values = explode("|", $props[$property]);
                    $declaration_desktop = "{$css_property}-top: {$values[0]} {$is_important};
                                        {$css_property}-right: {$values[1]} {$is_important};
                                        {$css_property}-bottom: {$values[2]} {$is_important};
                                        {$css_property}-left: {$values[3]} {$is_important};";
                }

                if ($responsive_active && !empty($props[$property . "_tablet"])) {
                    $values = explode("|", $props[$property . "_tablet"]);
                    $declaration_tablet = "{$css_property}-top: {$values[0]};
                                        {$css_property}-right: {$values[1]};
                                        {$css_property}-bottom: {$values[2]};
                                        {$css_property}-left: {$values[3]};";
                }

                if ($responsive_active && !empty($props[$property . "_phone"])) {
                    $values = explode("|", $props[$property . "_phone"]);
                    $declaration_phone = "{$css_property}-top: {$values[0]};
                                        {$css_property}-right: {$values[1]};
                                        {$css_property}-bottom: {$values[2]};
                                        {$css_property}-left: {$values[3]};";
                }
                break;
            default: //Default is applied for values like height, color etc.
                if (!empty($props[$property])) {
                    $declaration_desktop = "{$css_property}: {$props[$property]};";
                }
                if ($responsive_active && !empty($props[$property . "_tablet"])) {
                    $declaration_tablet = "{$css_property}: {$props[$property . "_tablet"]};";
                }
                if ($responsive_active && !empty($props[$property . "_phone"])) {
                    $declaration_phone = "{$css_property}: {$props[$property . "_phone"]};";
                }
        }

        ET_Builder_Element::set_style($render_slug, array(
            'selector' => $css_selector,
            'declaration' => $declaration_desktop,
        ));

        if (!empty($props[$property . "_tablet"]) && $responsive_active) {
            ET_Builder_Element::set_style($render_slug, array(
                'selector' => $css_selector,
                'declaration' => $declaration_tablet,
                'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
            ));
        }

        if (!empty($props[$property . "_phone"]) && $responsive_active) {
            ET_Builder_Element::set_style($render_slug, array(
                'selector' => $css_selector,
                'declaration' => $declaration_phone,
                'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
            ));
        }
    }

    public static function apply_bg_css($render_slug, $context, $color, $use_color_gradient, $gradient, $css_property) {
        $bg_image = array();
        $bg_style = "";
        $bg_style_tablet = "";
        $bg_style_phone = "";
        $bg_style_hover = "";

        $bg_type = $context->props[$gradient["gradient_type"]];
        $bg_direction = $context->props[$gradient["gradient_direction"]];
        $bg_direction_radial = $context->props[$gradient["radial"]];
        $bg_start = $context->props[$gradient["gradient_start"]];
        $bg_start_tablet = $context->props[$gradient["gradient_start"]."_tablet"];
        $bg_start_phone = $context->props[$gradient["gradient_start"]."_phone"];
        $bg_start_hover = $use_color_gradient == "on" && isset($context->props[$gradient["gradient_start"]."__hover"]) && $context->props[$gradient["gradient_start"]."__hover"] !== "" ? $context->props[$gradient["gradient_start"]."__hover"] : "";
        $bg_end = $context->props[$gradient["gradient_end"]];
        $bg_end_tablet = $context->props[$gradient["gradient_end"]."_tablet"];
        $bg_end_phone = $context->props[$gradient["gradient_end"]."_phone"];
        $bg_end_hover = $use_color_gradient == "on" && isset($context->props[$gradient["gradient_end"]."__hover"]) &&  $context->props[$gradient["gradient_end"]."__hover"] !== "" ? $context->props[$gradient["gradient_end"]."__hover"] : "";
        $bg_start_position = $context->props[$gradient["gradient_start_position"]];
        $bg_end_position = $context->props[$gradient["gradient_end_position"]];
        $bg_overlays_image = $context->props[$gradient["gradient_overlays_image"]];


        if ('on' === $use_color_gradient) {
            $direction = $bg_type === 'linear' ? $bg_direction : "circle at ". $bg_direction_radial." ";
            $start_position = et_sanitize_input_unit($bg_start_position, false, '%');
            $end_position = et_sanitize_input_unit($bg_end_position, false, '%');

            $gradient_bg = "{$bg_type}-gradient( {$direction}, {$bg_start} {$start_position},{$bg_end} {$end_position} )";
            $gradient_bg_tablet = "{$bg_type}-gradient( {$direction}, {$bg_start_tablet} {$start_position},{$bg_end_tablet} {$end_position} )";
            $gradient_bg_phone = "{$bg_type}-gradient( {$direction}, {$bg_start_phone} {$start_position},{$bg_end_phone} {$end_position} )";
            $gradient_bg_hover = "{$bg_type}-gradient( {$direction}, {$bg_start_hover} {$start_position},{$bg_end_hover} {$end_position} )";

            if (!empty($gradient_bg) || !empty($gradient_bg_tablet) || !empty($gradient_bg_phone) || !empty($gradient_bg_hover)) {
                $bg_image[] = $gradient_bg;
                $bg_image_tablet[] = $gradient_bg_tablet;
                $bg_image_phone[] = $gradient_bg_phone;
                $bg_image_hover[] = $gradient_bg_hover;
            }
            $has_bg_gradient = true;
        } else {
            $has_bg_gradient = false;
        }


        if (!empty($bg_image)) {
            if ('on' !== $bg_overlays_image) {
                $bg_image = array_reverse($bg_image);
                $bg_image_tablet = array_reverse($bg_image_tablet);
                $bg_image_phone = array_reverse($bg_image_phone);
                $bg_image_hover = array_reverse($bg_image_hover);
            }

            $bg_style .= sprintf('background-image: %1$s !important;', esc_html(join(', ', $bg_image)));
            $bg_style_tablet .= sprintf('background-image: %1$s !important;', esc_html(join(', ', $bg_image_tablet)));
            $bg_style_phone .= sprintf('background-image: %1$s !important;', esc_html(join(', ', $bg_image_phone)));
            $bg_style_hover .= sprintf('background-image: %1$s !important;', esc_html(join(', ', $bg_image_hover)));

        }


        if (!$has_bg_gradient) {
            $bg_color = $context->props[$color['color_slug']];
            $bg_color_values = et_pb_responsive_options()->get_property_values($context->props, $color['color_slug']);


            $bg_color_tablet = isset($bg_color_values['tablet']) ? $bg_color_values['tablet'] : '';
            $bg_color_phone = isset($bg_color_values['phone']) ? $bg_color_values['phone'] : '';
            $bg_color_hover = isset($context->props[$color['color_slug']."__hover"]) && $context->props[$color['color_slug']."__hover"] !== "" ? $context->props[$color['color_slug']."__hover"] : "";


            if ('' !== $bg_color) {
                $bg_style .= sprintf('background-color: %1$s !important; ', esc_html($bg_color));
                $bg_style_tablet .= sprintf('background-color: %1$s !important; ', esc_html($bg_color_tablet));
                $bg_style_phone .= sprintf('background-color: %1$s !important; ', esc_html($bg_color_phone));


                if (et_builder_is_hover_enabled($color['color_slug'], $context->props)) {
                    $bg_style_hover = sprintf('background-color: %1$s !important;', $bg_color_hover);
                }

            }
        }

        if ('' !== $bg_style) {
            ET_Builder_Element::set_style($render_slug, array(
                'selector' => $css_property['desktop'],
                'declaration' => rtrim($bg_style),
            ));

            ET_Builder_Element::set_style($render_slug, array(
                'selector' => $css_property['desktop'],
                'declaration' => rtrim($bg_style_tablet),
                'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
            ));

            ET_Builder_Element::set_style($render_slug, array(
                'selector' => $css_property['desktop'],
                'declaration' => rtrim($bg_style_phone),
                'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
            ));

            if ("" !== $bg_style_hover) {
                ET_Builder_Element::set_style($render_slug, array(
                    'selector' => $context->add_hover_to_order_class($css_property['hover']),
                    'declaration' => rtrim($bg_style_hover),
                ));
            }
        }
    }

    public static function get_alignment( $slug, $context,$prefix="" ) {
        $is_button_alignment_responsive  = et_pb_responsive_options()->is_responsive_enabled( $context->props, $slug );

        $text_orientation = isset( $context->props[$slug] ) ? $context->props[$slug] : '';

        $alignment_array = array();

        if($is_button_alignment_responsive) {


            $text_orientation_tablet = isset( $context->props[$slug."_tablet"] ) ? $context->props[$slug."_tablet"] : '';
            $text_orientation_phone = isset( $context->props[$slug."_phone"] ) ? $context->props[$slug."_phone"] : '';


            if("" === $prefix) {
                if( !empty($text_orientation) ){
                    array_push($alignment_array, sprintf('%1$s_%2$s', $slug, et_pb_get_alignment($text_orientation)));
                }

                if( !empty($text_orientation_tablet) ) {
                    array_push($alignment_array, sprintf('%1$s_tablet_%2$s', $slug, et_pb_get_alignment($text_orientation_tablet)));
                }

                if( !empty($text_orientation_phone) ) {
                    array_push($alignment_array, sprintf('%1$s_phone_%2$s', $slug, et_pb_get_alignment($text_orientation_phone)));
                }
            }else{
                if( !empty($text_orientation) ){
                    array_push($alignment_array, sprintf('%3$s_%1$s_%2$s', $slug, et_pb_get_alignment($text_orientation), $prefix));
                }

                if( !empty($text_orientation_tablet) ) {
                    array_push($alignment_array, sprintf('%3$s_%1$s_tablet_%2$s', $slug, et_pb_get_alignment($text_orientation_tablet), $prefix));
                }

                if( !empty($text_orientation_phone) ) {
                    array_push($alignment_array, sprintf('%3$s_%1$s_phone_%2$s', $slug, et_pb_get_alignment($text_orientation_phone), $prefix));
                }
            }

            return join(' ', $alignment_array);
        }else{
            if( !empty($text_orientation) ){
                if("" === $prefix) {
                    array_push($alignment_array, sprintf('%1$s_%2$s', $slug, et_pb_get_alignment($text_orientation)));
                }else {
                    array_push($alignment_array, sprintf('%3$s_%1$s_%2$s', $slug, et_pb_get_alignment($text_orientation), $prefix));
                }
            };

            return join(' ', $alignment_array);
        }
    }

}

new BaseDCSCarousel;