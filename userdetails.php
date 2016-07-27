<html>
<head>
<meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Signup</title>
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald|Lora' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/x-icon" href="css/images/icon.ico" />
<link type="text/css" rel="stylesheet" href="css/userdetails.css"/>
<script type="text/javascript" src="js/library.js"></script>
<style> 
nav .home{
display:block;
width:75px;
height:40px;
text-align: center;
line-height:40px;
	border-right: 3px solid #B82E00;
	border-left	: 3px solid #B82E00;
	font-family: 'Oswald', sans-serif;
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
<a href="OLS.php"><img class="logo" src="css/images/logo.png" alt="logo"/></a><hr> 
<div>
<nav><a class="home" href="OLS.php">Home</a></nav>
<form  action="signup.php" method="post"> 
<center><table>
<tr><th>First Name</th><td><input  type="text" name="fname" value="" class="userdetails"/></td></tr>
<tr><th>Last Name</th><td><input  type="text" name="lname" value="" class="userdetails"/></td></tr>
<tr><th>User Name</th><td><input  type="text" name="uname" value="" class="userdetails"/></td></tr>
<tr><th>Password</th><td><input  type="password" name="pword" value="" class="userdetails" /></td></tr>
<tr><th>Confirm Password</th><td><input  type="Password" name="c_p_word" value="" class="userdetails" /></td></tr>
<tr><th>Email</th><td><input  type="text" name="email" value="" class="userdetails" /></td></tr>
<tr><th>Date Of Birth</th><td><input  type="text" name="dob" value="" class="userdetails" /></td></tr>
<tr><th>Phone Number</th><td><input  type="text" name="phone" value="" class="userdetails" /></td></tr>
<tr><th>Address</th><td><textarea  rows="4" cols="20" name="address" value="" class="userdetails" ></textarea></td></tr>
<tr><th></th><td><center><input type="submit"  value="Signup" class="signup"/></td></tr>
</table></center>
</form>
</div>
<?php include('footer.php');?>
</body>
</html>