<?php

namespace Logik\Theme\App\Structure;

/*
|--------------------------------------------------------------------------
| Custom Shortcodes
|--------------------------------------------------------------------------
|
| This file is for registering your shortcodes. Shortcodes allows to facade
| a code logic behind readable piece of text. Below you have an example
| which facilitates outputing markup with template() helper function.
|
*/

use function Logik\Theme\App\template;

/**
 * Renders a [button] shortcode.

 * @param  array $atts
 * @param  string $content
 * @return string
 */
function render_button_shortcode($atts, $content)
{
    $button_type = get_option( 'button_type' );

    $attributes = shortcode_atts([
        'href' => '#',
        'class' => '',
        'id' => '',
        'align' => ''
    ], $atts);

    ob_start();
        ($button_type) ? template('shortcodes/buttons/type'.$button_type, compact('attributes', 'content')) : template('shortcodes/buttons/type1', compact('attributes', 'content'));
    return ob_get_clean();
}
add_shortcode('button', 'Logik\Theme\App\Structure\render_button_shortcode');