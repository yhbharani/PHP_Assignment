<?php

include('logincheck.php');


?>

<head>
<title>Welcome</title>
</head>
<body>
<h1> Welcome <?php echo $login_session; ?></h1>
<h2><a href = "signout.php">Sign Out</a></h2>
</body>
</html>

