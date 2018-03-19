<?php

include("includedb.php");
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
 {

  $iusername = mysqli_real_escape_string($db,$_POST['username']);
  $ipassword = mysqli_real_escape_string($db,$_POST['password']);

  $sql = "select username from yash_userinfo where Username = '$iusername' and password ='$ipassword'";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array( $result , MYSQLI_ASSOC );
  $active=$row['active'];

$count=mysqli_num_rows($result);

 if($count==1)
  {

//session_register("iusername");
$_SESSION['login_user']= $iusername;


header("location: welcome.php");

  }

  else
  {

$error = "U R Invalid ";

  }

 }


?>
<html>

<head> 
<title> Index </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*
{
  padding =0;
  margin =0;
}

body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password]
{
 width: 100%;
 padding: 12px 20px;
 margin: 8px 0;
 display: inline-block;
 border: 1px solid #ccc;
 box-sizing: border-box;
}

.container {
      padding: 16px;
}

button
{
 background-color: #4CAF50;
 color: white;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 cursor: pointer;
 width: 100%;
}

h1{
  font size:14px;
}
</style>

</head>


<body align="center">

<h1>Login</h1>

<div class="container">
  <form action = "" method ="POST">
  <label for="uname"><b>Username</b></label>
  <input type="text" placeholder="Enter Username" name="username" required>

  <label for="psw"><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="password" required>
  <button type="submit">Login</button>
  <label>
  <input type="checkbox" checked="checked" name="remember"> Remember me
  </label>
 </div>


<h1> OR <h1>
<h1> Sign Up </h1>

 <button type="submit"><a href="signup.php">Sign Up</a></button>
</body>

  </html>


