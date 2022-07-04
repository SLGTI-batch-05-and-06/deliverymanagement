<?php include_once("script.php");
include_once("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include_once("nav.php");?>
    <!-- content -->
    
    <div class="heading" style="background:url(/images/OIP.jpg) no-repeat">
      <h1>about us</h1>
   </div>

   <section class="about">

      <div class="image">
         <img src="ado1.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p></p>
         <p></p>
         <div class="icons-container">
            <div class="icons">
               <i class="fas fa-map"></i>
               <span></span>
            </div>
            <div class="icons">
               <i class="fas fa-hand-holding-usd"></i>
               <span></span>
            </div>
            <div class="icons">
               <i class="fas fa-headset"></i>
               <span>24/7 guide service</span>
            </div>
         </div>
      </div>

   </section>

    <?php include("review.php");?>
    <!-- content -->
    <?php include("footer.php");?>
</body>
</html>