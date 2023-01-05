<?php 
session_start();


?>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Home</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
   
      <nav>
         <div class="logo">
           নিরাপদ যাত্রায় বিশ্বস্ত সঙ্গী  
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a class="active" href="home.php">Home</a></li>
            <li><a href="registration.php">Login</a></li>
            <li><a href="registration.php">Register</a></li>
            <li><a href="registration.php">Train information</a></li>
            <li><a href="registration.php">Contract us</a></li>
        </ul>
      </nav>

      <div class="content">
         <div>
         <picture>
  <source media="(min-width: 650px)" srcset="image\t2.jpeg">
  <source media="(min-width: 465px)" srcset="image\t2.jpeg">
  <img src="img_girl.jpg" style="width:auto;">
</picture>

         </div>
         <div>
         </div>
      </div>
   </body>
</html>