<?php
$servername ="192.168.121.187";
$username = "first_year";
$password = "first_year";
$database = "first_year_db";
$db = mysqli_connect($servername, $username, $password,$database);
if (!$db) {
      die("Connection failed: " . mysqli_connect_error());
}
else{
echo "Connected successfully";
}
?>

