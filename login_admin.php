<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Login</title>
<link rel="icon" type="image/x-icon" href="css/images/icon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/login_user.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="library.js"></script>
<style>
nav .home{
display:block;
width:75px;
height:40px;
text-align: center;
line-height:40px;
	border-right: 3px solid #B82E00;
	border-left	: 3px solid #B82E00;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size:18px;
	color: #fff;
	background:#000;
	text-decoration: none;
	list-style-type:none;
}
nav .home:hover{
		background: #19c589;
}
</style>
</head>
<body onload="startTime()">
<div>
<a href="OLS.php"><img class="logo" src="css/images/logo.png" alt="logo"/></a><hr>
<nav><a class="home" href="OLS.php">Home</a></nav>
<center><table>
<form action="admin_auth.php" method="post">
<tr><th>Admin ID</th><td><input type="text" name="aid" value=""/></td></tr>
<tr><th>Password</th><td><input type="Password" name="pword" value=""/></td></tr>
<tr><th></th><td><center><input type="submit"  name="login" value="Login" class="login"/></td></tr>
</table></center>
</form>
</div>
<?php include('footer.php');?>
</body>
</html>