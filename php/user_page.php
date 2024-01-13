<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
  integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="../css/demo.css">
</head>
<body>
 



<div class="front">
    <img class="a" src="../image/mg2.png">
    <img class="c" src="../image/---black-brain (6).png">
    <img class="r" src="../image/4ff.jpg">
  </div>

  <div class="nev">
    <a href="../demo project.html" class="h">
      <img src="../image/home01.png" class="home">
    </a>

    <a href="../pages/page 2.html" class="pro">
      <img src="../image/pngom.png" class="p">
    </a>

    <a href="../pages/cart page.html" class="car">
      <img src="../image/cart5.png" class="ca">
    </a>


    <a href="demo project.html" class="about">
      <img src="../image/about01.png" class="abo">
    </a>

    <a href="../pages/massage.html" class="contact">
      <img src="../image/contact.png" class="con">
    </a>

    <div id="nev1">
      <img src="../image/cancel06.png" class="cancel">
      <img src="../image/cancel06.png" class="cancel1">
    </div>

  </div>

  <div class="acc">
    <a href="../php/login_form.php"><img src="../image/acc10.png " class="ac1"></a>
     
  </div>
  <div id="nev">
    <img src="../image/menu03.png" class="plus">
  </div>

  <div id="nev11"> 
    <img src="../image/about.png.png"class="plus">   
    </div>    

<div class="content" id="cont">
   
   <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
   <a href="login_form.php" class="btn">login</a>
   <a href="register_form.php" class="btn">register</a>
   <a href="logout.php" class="btn">logout</a>
</div>


  <div class="open">
    <div class="A">BLACK BRAIN </div>
    <div class="sk"></div>

  </div>
  <img src="../image/98.png" class="shirt">
  <img src="../image/pngom.png" class="blu">
  <div class="bl"></div>

  <div class="b1">
    <img src="../image/3d_img_6-removebg-preview.png" class="b35">
    <img src="../image/3d_img_7-removebg-preview.png" class="b36">
    <img src="../image/3d_image_8-removebg-preview.png" class="b37">
    <div class="b2" data-aos="flip-left" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
      data-aos-mirror="true"><img src="../image/cap2.jpg"
        style="position: absolute; width:83%; height: 35%; left:9%; top:56%;border-top-left-radius: 50px;border-bottom-right-radius: 50px;">
      <img src="../image/cap3.jpg"
        style="position: absolute; width:90%; height: 40%; left:5%; top:7%;border-top-left-radius: 50px;border-bottom-right-radius: 50px;">
    </div>

    <div class="b3" data-aos="flip-right" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
      data-aos-mirror="true"><img src="../image/new.png"
        style="position: absolute; width: 90%; height: 85%; left:4%; top:8%; border-top-left-radius:50px; border-bottom-right-radius:50px;">
    </div>

    <div class="b4" data-aos="flip-right" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
      data-aos-mirror="true"><img src="../image/sh1.jpg"
        style="position: absolute; width: 90%; height: 40%; left:6%; top:6%;border-top-left-radius: 50px;border-bottom-right-radius: 50px;">
      <img src="../image/sh2.jpg"
        style="position: absolute; width: 90%; height: 40%; left:6%; top:52%;border-top-left-radius: 50px;border-bottom-right-radius: 50px;">
    </div>


    <div class="b5" data-aos="fade-up" data-aos-offset="100" data-aos-delay="30" data-aos-duration="1000"
      data-aos-mirror="true">
      <div class="b6">HOW BLACK BRAIN WROKS</div>
    </div>

    <div class="b7" data-aos="zoom-in" data-aos-offset="590" data-aos-delay="599" data-aos-duration="1000"
      data-aos-mirror="true"> <video controls autoplay src="bandicam 2023-05-24 23-17-15-879.mp4" width="100%"
        height="100%"></div>

    <div class="b8" data-aos="slide-left" data-aos-offset="200" data-aos-delay="90" data-aos-duration="1000"
      data-aos-mirror="true">
      <div class="b13">ADD PRESET DESIGN</div>
      <div class="b14"><a href="../pages/page 2.html" style="position: absolute; height: 100%; width: 100%;"> </a> CREATE
        YOUR'S</div>
      <img src="../image/Screenshot (140).png"
        style="position: absolute; height: 45%; width: 90%; border-radius: 10px; top: 5%;left: 5%;">
    </div>


    <div class="b9" data-aos="slide-up" data-aos-offset="200" data-aos-delay="90" data-aos-duration="1000"
      data-aos-mirror="true">
      <div class="b15">ADD TEXT</div>
      <div class="b16"><a href="../pages/page 2.html" style="position: absolute; height: 100%; width: 100%;"> </a> CREATE
        YOUR'S</div>
      <img src="../image/Screenshot (143).png"
        style="position: absolute; height: 70%; width: 90%; border-radius: 10px; top: 5%;left: 5%;">
    </div>

    <div class="b10" data-aos="slide-right" data-aos-offset="200" data-aos-delay="90" data-aos-duration="1000"
      data-aos-mirror="true">
      <div class="b17">ADD IMG</div>
      <div class="b18"><a href="../pages/page 2.html" style="position: absolute; height: 100%; width: 100%;"> </a> CREATE
        YOUR'S</div>
      <img src="../image/Screenshot (144).png"
        style="position: absolute; height: 60%; width: 90%; border-radius: 10px; top: 10%;left: 5%;">
    </div>
    <div class="b10">
    </div>
    <div class="b11 "> These 3 Ways <div class="b12"> You Can Create a Design</div>
    </div>

    <div class="b19">
      <div class="b20"> Contact Us</div>
      <div class="b21" onclick="window.open('https://www.facebook.com/profile.php?id=100012606434185')"> <i
          class="fab fa-facebook-f" id="fa"></i></div>
      <div class="b22" onclick="window.open('https://wa.me/+8801671516064')"> <img src="../image/wapp.png" id="b22"> </div>
      <div class="b23" onclick="window.open('mailto:rirakib023@gmail.com')"> <img src="../image/333.png" id="b23"> </div>
      <a href="../demo project.html" style="color:aliceblue; text-decoration:none;" class="b24">HOME</a>
      <a href="../pages/page 2.html" style="color:aliceblue; text-decoration:none;" class="b25">PRODUCT</a>
      <a href="../pages/cart page.html" style="color:aliceblue; text-decoration:none;" class="b26">CART</a>
      <a href="../pages/about-us.html" style="color:aliceblue; text-decoration:none;" class="b27">ABOUT US</a>

      <div class="b28">This is a customizable e-commerce website.<br>
        Where you can design your t-shirt cap and Snickers. <br>
        No limitation can bind your imagination.</div>
      <img src="../image/logo6.png" style="position: absolute; height: 30%; width: 20%; top: 8%; left: 7%;">
      <div class="b30">Developted by Rakib & Team </div>
    </div>
    <img src="../image/3d_img_5-removebg-preview.png" class="b34">
    <div class="b31">
      <img src="../image/phone.png" style="position: absolute; height: 98%; width: 98%;left: 1%; top: 1%;">
      <a href="../pages/massage.html" style="position: absolute; height: 100%; width: 100%;"></a>
    </div>

    <div class="b32" data-aos="slide-right" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
      data-aos-mirror="true">
      <h1> CONTACT PAGE </h1>
      <div class="b33" data-aos="slide-left" data-aos-offset="200" data-aos-delay="200" data-aos-duration="1000"
        data-aos-mirror="true">This is the way you can contact us without any login. Every app on the phone is working
        just click on them.</div>
    </div>

  </div>


  <svg>
    <filter id="wavy">
      <feTurbulence x="0" y="0" id="turbulence" baseFrequency="0.01" numOctaves="5" seed="2">
        <animate attributeName="baseFrequency" dur="60s" values="0.01;0.05;0.01" repeatCount="indefinite" />
      </feTurbulence>
      <feDisplacementMap in="SourceGraphic" scale="20" />
    </filter>
  </svg>

 
 


<script>
      document.getElementById("nev11").addEventListener("click", function() {
         var contentDiv = document.getElementById("cont");
         contentDiv.style.display = (contentDiv.style.display === "none") ? "block" : "none";
      });
   </script>




 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <!-- our aos data -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 10,
      duration: 1000,
    });
  </script>

  <script>
  
    let imageIndex = 0;
    localStorage.setItem('imageIndex', imageIndex);

    let screenshotObject = {}
    screenshotObject  = JSON.stringify(screenshotObject)
    let allReadyStored = localStorage.getItem('imageData')
    if(!allReadyStored){
      localStorage.setItem('imageData', screenshotObject)
    }else{
      localStorage.setItem('imageData', JSON.parse(screenshotObject))
    }

  </script>

  

  <script src="../js/main.js"></script>

</body>
</html>