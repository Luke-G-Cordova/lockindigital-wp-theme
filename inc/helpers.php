<?php

function lid_field($field_name, $default = '', $sanitize = 'html', $post_id = null)
{
  $value = get_field($field_name, $post_id);

  if (empty($value)) {
    $value = $default;
  }

  switch ($sanitize) {
    case 'html':
      return esc_html($value);
    case 'url':
      return esc_url($value);
    case 'attr':
      return esc_attr($value);
    case 'raw':
      return $value;
    default:
      return esc_html($value);
  }
}
