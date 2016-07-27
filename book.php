<?php
require_once('init.php');
if(!isset($_SESSION['valid_user'])){
	//$msg= "please Login to Access Online Library";
	//echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
header("location:OLS.php");
}?>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Online Library System</title>
<link rel="icon" type="image/x-icon" href="css/images/icon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/OLS.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/library.js"></script>
</head>
<body onLoad="startTime()">
<div>
  <h2 style="color:white;font-family:verdana" align="right">Hello <?php echo $_SESSION["valid_user"]; ?></h2><br>
<img class="logo" src="css/images/logo.png" alt="logo"/>&nbsp
<nav><a class="navi" href="logout_user.php">Logout</a></nav>
<center><h1 style="color:white">Welcome to Online Library</h1></center>
<div>
	<p align="center"><a class="search" href="search.php">Books <img src="css/images/search.icon.png" width="16px" height="15px" /></a></p>
	</div> 
	<center><h2 style="color:white"> Please select field</h2>
	<form action="selectfield_display.php" method="post">
	<select class="field" name="srchtype">   
	<option value="Computer Science" selected>Computer Science</option>
    <option value="Mechanical Engineering">Mechanical Engineering</option>
    <option value="Electrical Engineering">Electrical Engineering</option>
    <option value="Civil Engineering">Civil Engineering</option>
	</select><br><br>
	<input name="submit" class ="submit" type="submit" value="Submit"/>
	</form></center>
	</div>
	<?php
include('footer.php');
?>
</body>
</html>