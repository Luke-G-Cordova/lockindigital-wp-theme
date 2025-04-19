<?php

use LockInDigital\Utils\TemplateParser;

function _t($string)
{
  return __($string, 'lockindigital-theme');
}

function lid_field($field_name, $default = '', $sanitize = 'html', $post_id = null)
{
  $value = get_field($field_name, $post_id);

  if (empty($value)) {
    $value = $default;
  }

  if (TemplateParser::hasTags($value)) {
    $tagsArray = TemplateParser::getTags($value);
    $data = TemplateParser::getAcfData($tagsArray);
    $value = TemplateParser::render($value, $data);
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
