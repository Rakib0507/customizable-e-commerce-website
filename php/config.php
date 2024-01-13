<?php

define('DB_HOST', 'localhost');     // Replace with your database hostname
define('DB_USER', 'root');          // Replace with your database username
define('DB_PASSWORD', '');          // Replace with your database password
define('DB_NAME', 'user_db');       // Replace with your database name

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn) {
   die("Database connection failed: " . mysqli_connect_error());
}

?>
