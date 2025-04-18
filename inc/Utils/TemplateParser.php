<?php

namespace LockInDigital\Utils;

class TemplateParser
{
  /**
   * Check if a string contains template tags like {{ tag_name }}
   *
   * @param string $string
   * @return bool
   */
  public static function hasTags($string)
  {
    return preg_match('/{{\s*(\w+)\s*}}/', $string) === 1;
  }

  /**
   * Extracts all template tag names from a string (e.g. ['city_name', 'state_name'])
   *
   * @param string $template
   * @return array
   */
  public static function getTags($template)
  {
    preg_match_all('/{{\s*(\w+)\s*}}/', $template, $matches);
    return array_unique($matches[1]);
  }

  /**
   * Replace template tags in a string using values from a given array
   *
   * @param string $template
   * @param array $data
   * @return string
   */
  public static function render($template, $data = [])
  {
    return preg_replace_callback('/{{\s*(\w+)\s*}}/', function ($matches) use ($data) {
      $key = $matches[1];
      return isset($data[$key]) ? $data[$key] : $matches[0];
    }, $template);
  }

  /**
   * Get ACF values from a list of field names
   *
   * @param array $keys
   * @return array
   */
  public static function getAcfData(array $keys)
  {
    $output = [];
    foreach ($keys as $key) {
      $output[$key] = get_field($key);
    }
    return $output;
  }
}
