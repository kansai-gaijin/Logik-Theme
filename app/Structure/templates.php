<?php

namespace Logik\Theme\App\Structure;

/*
|-----------------------------------------------------------
| Theme Templates Actions
|-----------------------------------------------------------
|
| This file purpose is to include your templates rendering
| actions hooks, which allows you to render specific
| partials at specific places of your theme.
|
*/

use function Logik\Theme\App\template;

/**
 * Renders post thumbnail by its formats.
 *
 * @see resources/templates/index.tpl.php
 */
/*function render_post_thumbnail()
{
    template(['partials/post/thumbnail', get_post_format()]);
}
add_action('theme/index/post/thumbnail', 'Logik\Theme\App\Structure\render_post_thumbnail');
*/
/**
 * Renders empty post content where there is no posts.
 *
 * @see resources/templates/index.tpl.php
 */
/*
function render_empty_content()
{
    template(['partials/index/content', 'none']);
}
add_action('theme/index/content/none', 'Logik\Theme\App\Structure\render_empty_content');
*/
/**
 * Renders post contents by its formats.
 *
 * @see resources/templates/single.tpl.php
 */

function render_post_content()
{
    template(['partials/post/content', get_post_format()]);
}
add_action('theme/single/content', 'Logik\Theme\App\Structure\render_post_content');

/**
 * Renders sidebar content.
 *
 * @uses resources/templates/partials/sidebar.tpl.php
 * @see resources/templates/index.tpl.php
 * @see resources/templates/single.tpl.php
 */
/*
function render_sidebar()
{
    get_sidebar();
}
add_action('theme/index/sidebar', 'Logik\Theme\App\Structure\render_sidebar');
add_action('theme/single/sidebar', 'Logik\Theme\App\Structure\render_sidebar');
*/
/**
 * Renders [button] shortcode after homepage content.
 *
 * @uses resources/templates/shortcodes/button.tpl.php
 * @see resources/templates/partials/header.tpl.php
 */
/*
function render_documentation_button()
{
    echo do_shortcode("[button href='https://github.com/tonik/tonik']Checkout documentation →[/button]");
}
add_action('theme/header/end', 'Logik\Theme\App\Structure\render_documentation_button');
*/


function render_header()
{
    $header_type = get_option( 'header_type' );
    ($header_type) ? template("partials/headers/type".$header_type) : template("partials/headers/no-header");
    
}
add_action('theme/structure/header', 'Logik\Theme\App\Structure\render_header');

function render_footer()
{
    $footer_type = get_option( 'footer_type' );
    ($footer_type) ? template("partials/footers/type".$footer_type) : template("partials/footers/no-footer");
    
}
add_action('theme/structure/footer', 'Logik\Theme\App\Structure\render_footer');