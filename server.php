<?php
session_start();
$db = mysqli_connect("192.168.121.187", "first_year", "first_year", "first_year_db");
$iusername="";
$iemail="";
$igender="";
$iname="";
$ipassword_1="";
$icontact="";
$error= array();
// REGISTER USER

if (isset($_POST['yash_userinfo']))
{
 $iusername = mysqli_real_escape_string($db, $_POST['Username']);
 $icontact = mysqli_real_escape_string($db, $_POST['contact']);
 $igender =  mysqli_real_escape_string($db, $_POST['gender']);
 $iname = mysqli_real_escape_string($db, $_POST['name']);
 $iemail = mysqli_real_escape_string($db, $_POST['eMail']);
 $ipassword_1 = mysqli_real_escape_string($db, $_POST['password']);
 $ipassword_2 = mysqli_real_escape_string($db, $_POST['password_2']);

            if (empty($iusername)) { array_push($errors, "Username is required"); }
            if (empty($iemail)) { array_push($errors, "Email is required"); }
            if (empty($ipassword_1))
            { array_push($errors, "Password is required"); }
            if ($ipassword_1 != $ipassword_2)  { array_push($errors, "The two passwords do not match");}

            $user_check_query = "SELECT * FROM yash_userinfo WHERE username='$iusername' OR email='$iemail' LIMIT 1";
                      $result = mysqli_query($db, $user_check_query);
                        $user = mysqli_fetch_assoc($result);

                          if ($user)
                              {
                                if ($user['username'] === $iusername)
                                {
                                 array_push($errors, "Username already exists");
                                }

                                if ($user['email'] === $email)
                                {
                                 array_push($errors, "email already exists");
                                }
                              }
}

 if (count($error) == 0)
{
  $query = "INSERT INTO yash_userinfo (Username, password, Name, Contact, eMail ,Gender)  VALUES('$iusername', '$ipassword_1', '$iname' , '$icontact' , '$iemail', '$igender')";
      mysqli_query($db, $query);
      $_SESSION['Username'] = $iusername;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
 }

 ?>
