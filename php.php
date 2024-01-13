<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $screenshotData = $_POST["screenshotData"];
  $filename = "screenshots/screenshot_" . time() . ".png";
  file_put_contents($filename, base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $screenshotData)));
  // Optionally, you can store the filename in a database for further reference
  echo "Screenshot saved!";
}
?>
