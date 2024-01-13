<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/demo.css">

</head>
<body>

<div class="bg-1">
  <img src="../image/bg-6.jpg" class="bg-1">
</div>
<svg>
            <filter id="wavy">
              <feTurbulence x="0" y="0" id="turbulence" baseFrequency="0.01" numOctaves="200" seed="2">
                <animate attributeName="baseFrequency" dur="60s" values="0.01;0.05;0.01" repeatCount="indefinite" />
              </feTurbulence>
              <feDisplacementMap in="SourceGraphic" scale="20" />
            </filter>
          </svg>
          
<div id="sk"></div>
<div class="form-container" id="form-container">

   <form action="" method="post">
       
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text"class="text" id="text1" name="name" required placeholder="Enter your name">
      <input type="email" id="email" name="email" required placeholder="Enter your email">
      <input type="password" id="pass" name="password" required placeholder="Enter your password">
      <input type="password" class="c-pass" name="cpassword" required placeholder="Confirm your password">
      <select name="user_type" class="type">
         <option value="user">user</option>
      </select>
      <input type="submit" name="submit" value="Register now" class="form-btn" id="form">
      <div id="reg">   <p>Already have an account? <a href="login_form.php">login now</a></p></div>
   </form>

</div>

</body>
</html>