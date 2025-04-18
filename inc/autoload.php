<?php
spl_autoload_register(function ($class) {
  $prefix = 'LockInDigital\\';
  $base_dir = __DIR__ . '/';

  // Does the class use our namespace prefix?
  if (strpos($class, $prefix) !== 0) {
    return;
  }

  // Get the relative class name
  $relative_class = substr($class, strlen($prefix));

  // Replace namespace separators with directory separators
  $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

  // Require the file if it exists
  if (file_exists($file)) {
    require_once $file;
  }
});
