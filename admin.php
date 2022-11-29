<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}
;
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/components.css">

</head>

<body style="background-image: url('regback.jpg');">

   <!-- (D) SIDEBAR -->
   <div id="pgside">
      <!-- (D1) BRANDING OR USER -->
      <form id="pguser" method="post" onclick="if(confirm('Sign Off?')){this.submit();}">
         <input type="hidden" name="logout" value="1">
         <img src="potato.png" id="pguserimg">
         <div class="txt">
            <div id="pgusername">
               <?= $_SESSION["admin"]["user_name"] ?>
            </div>
            <div id="pguseracct">account | logoff</div>
         </div>
      </form>

      <!-- (D2) MENU ITEMS -->
      <a href="#" class="current">
         <i class="ico">&#9733;</i>
         <i class="txt">Section A</i>
      </a>
      <a href="#">
         <i class="ico">&#9728;</i>
         <i class="txt">Section B</i>
      </a>
      <a href="#">
         <i class="ico">&#9737;</i>
         <i class="txt">Section C</i>
      </a>
   </div>



</body>

</html>