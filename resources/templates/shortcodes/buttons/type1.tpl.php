<?php
$wrapper_classes = array('lk-button-wrapper', 'd-flex', 'align-items-center');
$button_classes = array('lk-button', 'type-1');

if ($attributes['align']) {
  switch ($attributes['align']) {
    case 'left':
      $wrapper_classes[] = 'justify-content-start';
      break;
    case 'right':
      $wrapper_classes[] = 'justify-content-end';
      break;
    case 'center':
      $wrapper_classes[] = 'justify-content-center';
      break;
  }
} else {
  $wrapper_classes[] = 'justify-content-center';
}

function render_classes($classes)
{
  $cl = '';
  for ($i = 0; $i < sizeof($classes); $i++) {
    if ($i != sizeof($classes) - 1) {
      $cl .= $classes[$i] . " ";
    } else {
      $cl .= $classes[$i];
    }
  }
  return $cl;
}

?>

<p class="<?= render_classes($wrapper_classes); ?>">
  <a <?= ($attributes['id']) ? 'id="' . $attributes['id'] . '"' : null ?> class="<?= render_classes($button_classes); ?>" href="<?= ($attributes['href']) ? $attributes['href'] : "#" ?>">
    <?= $content ?>
  </a>
</p>