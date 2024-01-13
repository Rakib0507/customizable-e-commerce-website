<?php
$directoryPath = dirname(__FILE__) . '/screenshots';

// Check if the directory doesn't already exist
if (!is_dir($directoryPath)) {
  // Create the directory
  if (!mkdir($directoryPath, 0777, true)) {
    die('Failed to create directory');
  }
}
?>
