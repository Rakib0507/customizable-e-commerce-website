<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the screenshot data from the POST request
  $screenshotData = $_POST['screenshotData'];

  // Process and save the screenshot data
  // Example: Save the screenshot as a file on the server
  $filename = 'screenshot_' . time() . '.png'; // Generate a unique filename
  $filepath = 'screenshot_directory/' . $filename; // Set the desired directory path

  // Remove the data URL prefix to get the base64-encoded image data
  $screenshotData = str_replace('data:image/png;base64,', '', $screenshotData);

  // Decode the base64-encoded image data and save it to a file
  file_put_contents($filepath, base64_decode($screenshotData));

  // Send a response back to the client
  echo 'Screenshot saved successfully!';
}
?>
