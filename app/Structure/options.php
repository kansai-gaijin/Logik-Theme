<?php

namespace Logik\Theme\App\Structure;


function geho()
{
?>
  <div class="wrap">
    <h1>Logik Theme Settings</h1>
    <form method="post" action="options.php">
      <?php
      settings_fields("section");
      do_settings_sections("theme-options");
      submit_button();
      ?>
    </form>
  </div>
<?php
}

function add_theme_menu_item()
{
  add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "Logik\Theme\App\Structure\geho", null, 99);
}

add_action("admin_menu", "Logik\Theme\App\Structure\add_theme_menu_item");

function display_header_element()
{
?>
  <select name="header_type" id="header_type">
    <option value="0" <?= (get_option('header_type') == 0) ? 'selected' : '' ?>>無し</option>
    <?php for($i = 1; $i <= 5; $i++): ?>
      <option value="<?= $i; ?>" <?= (get_option('header_type') == $i) ? 'selected' : '' ?>>Type <?= $i; ?></option>
    <?php endfor; ?>
  </select>
<?php
}

function display_footer_element()
{
?>
  <select name="footer_type" id="footer_type">
    <option value="0" <?= (get_option('footer_type') == 0) ? 'selected' : '' ?>>無し</option>
    <?php for($i = 1; $i <= 5; $i++): ?>
      <option value="<?= $i; ?>" <?= (get_option('footer_type') == $i) ? 'selected' : '' ?>>Type <?= $i; ?></option>
    <?php endfor; ?>
  </select>
<?php
}

function display_button_element()
{
?>
  <select name="button_type" id="button_type">
    <option value="0" <?= (get_option('button_type') == 0) ? 'selected' : '' ?>>無し</option>
    <?php for($i = 1; $i <= 5; $i++): ?>
      <option value="<?= $i; ?>" <?= (get_option('button_type') == $i) ? 'selected' : '' ?>>Type <?= $i; ?></option>
    <?php endfor; ?>
  </select>
<?php
}

function display_loader_element()
{
?>
  <select name="loader_type" id="loader_type">
    <option value="0" <?= (get_option('loader_type') == 0) ? 'selected' : '' ?>>無し</option>
    <?php for($i = 1; $i <= 5; $i++): ?>
      <option value="<?= $i; ?>" <?= (get_option('loader_type') == $i) ? 'selected' : '' ?>>Type <?= $i; ?></option>
    <?php endfor; ?>
  </select>
<?php
}


function display_theme_panel_fields()
{
  add_settings_section("section", "All Settings", null, "theme-options");

  add_settings_field("header_type", "ヘッダーの種類", "Logik\Theme\App\Structure\display_header_element", "theme-options", "section");
  add_settings_field("footer_type", "フッターの種類", "Logik\Theme\App\Structure\display_footer_element", "theme-options", "section");
  add_settings_field("button_type", "ボタンの種類", "Logik\Theme\App\Structure\display_button_element", "theme-options", "section");
  add_settings_field("loader_type", "ローダーの種類", "Logik\Theme\App\Structure\display_loader_element", "theme-options", "section");

  register_setting("section", "header_type");
  register_setting("section", "footer_type");
  register_setting("section", "button_type");
  register_setting("section", "loader_type");
}

add_action("admin_init", "Logik\Theme\App\Structure\display_theme_panel_fields");