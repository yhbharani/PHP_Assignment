<?php

include('includedb.php');

session_start();
$user_check= $_SESSION['login_user'];
$ses_sql= mysqli_query($db,"select Username from yash_userinfo where Username='$user_check'");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
$login_session= $row['Username'];

if(!isset($_SESSION['login_user']))
{
  header("location: index.php");
}

?>

