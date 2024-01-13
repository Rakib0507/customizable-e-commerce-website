<?php
// Retrieve the data sent from the client
$size = $_POST['size'];
$price = $_POST['price'];
$email = $_POST['email'];
$mobileNumber = $_POST['mobileNumber'];
$address = $_POST['address'];
$productId = $_POST['productId'];

// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

try {
  // Create a new PDO instance
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  // Set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  // Prepare the SQL statement
  $stmt = $conn->prepare("INSERT INTO screenshots (size, price, email, mobile_number, address, product_id) VALUES (:size, :price, :email, :mobileNumber, :address, :productId)");
  
  // Bind the parameters
  $stmt->bindParam(':size', $size);
  $stmt->bindParam(':price', $price);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':mobileNumber', $mobileNumber);
  $stmt->bindParam(':address', $address);
  $stmt->bindParam(':productId', $productId);
  
  // Execute the statement
  $stmt->execute();
  
  // Send a success message back to the client
  echo "Data stored successfully!";
} catch(PDOException $e) {
  // Handle any errors that occurred during database insertion
  echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>
