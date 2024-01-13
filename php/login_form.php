<?php
@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>
   <link rel="stylesheet" type="text/css" href="../css/demo.css">
   <style>
      .pic1 img {
         width: 100%;
         height: auto;
      }
   </style>
</head>
<body>
<div class="wave">
  <img src="../image/wave.png" class="wave-image">
</div>
<div class="wave">
  <img src="../image/bg.png" class="bg-image">
</div>
 
<div class="wave">
  <img src="../image/avatar.svg" class="avatar-image">
</div>
 
<div class="form-container">

   <form action="" method="post">

      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" class="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" class="pass" required placeholder="Enter your password" autocomplete="new-password" readonly onfocus="this.removeAttribute('readonly');">
      <input type="submit" name="submit" value="Login Now" class="form-btn">
      <div class="reg">
      <p>Don't have an account? <a href="register_form.php">Register Now</a></p></div>
   </form>

</div>

</body>
</html>
