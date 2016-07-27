<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Login</title>
<link rel="icon" type="image/x-icon" href="css/images/icon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/login_user.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/library.js"></script>
</head>
<body onload="startTime()">
<div>
<a href="OLS.php"><img class="logo" src="css/images/logo.png" alt="logo"/></a><hr>
<nav><a class="home" href="OLS.php">Home</a></nav>
<form name="Login" action="auth_user.php" method="post">
<table align="center">
<tr><th>User name</th><td><input  type="text" name="uname" value=""/></td></tr>
<tr><th>Password</th><td><input  type="password" name="pword" value=""/></td></tr>
<tr><th></th><td><center><input type="submit" name="login" value="Login" class="login"/></td></tr>
</table></center>
</form>
</div>
<?php
include('footer.php');
?>
</body>
</html>