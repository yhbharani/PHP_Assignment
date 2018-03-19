<html>
<head>
 <title>Sign Up</title>
</head>

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


<body>

<h1>Sign Up</h1>
 <div class="container">
  <form action = "server.php" method ="post">
  <?php include('error.php'); ?>
  <label for="Username"><b>Username</b></label>
  <input type="text" placeholder="Enter Username" name="Username"  required>

  <label for="password"><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="password"  required>
  <label for="password_2"><b>Confirm Password</b></label>
  <input type="password" placeholder="Enter Password" name="password_2"  required>
  <label for="name"><b>Name</b> </label>
  <input type = "text" placeholder="Enter Name" name = "name"  required >
  <label for="contact"><b>Contact</b> </label>
  <input type = "text" placeholder="Contact No." name = "contact"  >
  <label for="eMail"><b>eMail</b> </label>
  <input type = "text" placeholder="Enter Email" name = "eMail" >
  <label for="gender"><b>Gender</b> </label>
  <input type = "text" placeholder="Male/Female/Other" name = "gender"  >
  <button type="submit" name="yash_userinfo">Sign Up</button>
  <label>
  <input type="checkbox" checked="checked" name="remember"> Remember me
  </label>
  </div>
</body>
</html>
