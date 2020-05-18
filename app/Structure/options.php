<?php

namespace Logik\Theme\App\Structure;


function geho()
{
?>
  <div class="wrap">
    <h1>Theme Panel</h1>
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

function display_theme_panel_fields()
{
  add_settings_section("section", "All Settings", null, "theme-options");

  add_settings_field("header_type", "ヘッダーの種類", "Logik\Theme\App\Structure\display_header_element", "theme-options", "section");

  register_setting("section", "header_type");
}

add_action("admin_init", "Logik\Theme\App\Structure\display_theme_panel_fields");