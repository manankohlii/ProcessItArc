<?php
session_start();
if(!isset($_SESSION['username']))
{header('location:login.html');}
  ?>

  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registration Successfull</title>
<!--  Bootstrap -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- font family for header  -->
  <link href="https://fonts.googleapis.com/css2?family=Ramabhadra&display=swap" rel="stylesheet">
 <!-- font family for title beneath header --> 
 <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- External Style Sheet -->
    <link rel="stylesheet" type="text/css" href="login.css">
    <style type="text/css">
      body
      {margin: 0;
       padding: 0;
       }
       .registration
       {padding: 10%; }

    </style>
 </head>
 <body>
 	<div class="container">
 	<div class="loginbox">
 	<div class="col-md-6 registration text-center"  >
    <div class="text-center">
    <h1>Welcome <?php echo $_SESSION['username']; ?> </h1></br>
    <button  class="btn btn-default"><a href='logout.php' style="color:black;text-decoration: none;">Logout</a></button>
</div>
</div>
</div>
</div>
</body>
</html>