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
 
<div class="heading" style="background:url('images/next.jpeg') no-repeat">
<h1>pickup request</h1>
</div>

<section class="pickup-request">

<h1 class="heading-title">SUBMIT YOUR DETAILS HERE</h1>

<form action="pickup-request_form.php" method="post" class="pickup-request_from">

   <div class="flex">
      <div class="inputBox">
         <h1>Sender Details</h1><br>
         <span>Sender's Name :</span>
         <input type="text" placeholder="enter your name" name="name">
      </div>
      <div class="inputBox">
         <h1>Receiver Details</h1><br>
         <span>Receiving Person :</span>
         <input type="text" placeholder="enter receiving person name" name="name">
      </div>
      <div class="inputBox">
         <span>Sender Address :</span>
         <input type="text" placeholder="enter your address" name="address">
      </div>
      <div class="inputBox">
         <span>Receiving Persons' Address :</span>
         <input type="text" placeholder="enter receiving persons' address" name="address">
      </div>
      <div class="inputBox">
         <span>Sender Contact No :</span>
         <input type="number" placeholder="enter your contact no" name="phone">
      </div>
      <div class="inputBox">
         <span>Receiver's Contact No :</span>
         <input type="number" placeholder="enter receiver's  contact no" name="phone">
      </div>
      <div class="inputBox">
         <span>Sender Email Address :</span>
         <input type="email" placeholder="enter your email address" name="email">
      </div>
      <div class="inputBox">
         <span>Receiver's Alternative Contact #</span>
         <input type="number" placeholder="enter receiver's alternative contact no" name="phone">
      </div>
</form>
</section>

<section class="pickup-request">
<form action="pickup-request_form.php" method="post" class="pickup-request_from">

   <div class="flex">
      <div class="inputBox">
         <h2>Pickup Details</h2><br>
         <span>Description of the Item :</span>
         <input type="text" name="name">
         <div class="inputBox">
            <span>Pickup Time Duration (Date/Time)</span>
            <input type="date" name="Duration">
         </div>
         <div class="inputBox">
            <span>Payment Type :</span>
            <input type="" name="type">
         </div>
         <div class="inputBox">
            <span> #</span>
            <input type="number" name="phone">
         </div>
         <input type="submit" value="submit" class="btn" name="send">
      </div>


</form>
</section>

    <!-- content -->
    <?php include("footer.php");?>
</body>
</html>
