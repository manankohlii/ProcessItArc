<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Successfull</title>
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
    <h1>



<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];


session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//check if name already exists in the data base
$sql = "SELECT * from register where name= '$name'";
$result= mysqli_query($conn,$sql);
$num= mysqli_num_rows($result);

$sql2= "SELECT * from register where email= '$email'";
$result2= mysqli_query($conn,$sql2);
$num2= mysqli_num_rows($result2);



if($num == 1)
	{echo"Username already taken"."</h1>";
  echo "</br>
<button class='btn btn-default'><a href='index2.html' style='color:black;text-decoration: none;'>Try Again</a></button>";

}
else if($num2 ==1)
{echo"Email already taken"."</h1>";
  echo "</br>
<button class='btn btn-default'><a href='index2.html' style='color:black;text-decoration: none;'>Try Again</a></button>";

}

else
{$sql = "INSERT INTO register (name,email,password)
VALUES ('$name', '$email', '$pwd');";
mysqli_query($conn,$sql);
echo "Registration successful"."</h1>";
echo "</br>
<button class='btn btn-default'><a href='login.html' style='color:black;text-decoration: none;'>Login</a></button>";
}
?>


</div>
</div>
</div>
</div>

</body>
</html>