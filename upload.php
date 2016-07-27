<?php
require_once('admin_init.php');
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
<title>Book Registration</title>
<link href="css/book_registration.css" rel='stylesheet' type='text/css' />
<script type="text/javascript" src="js/library.js"></script>
</head>
<body onload="startTime()">
<div>
<h3>Welcome to Book Registration!!! <?php echo $_SESSION["valid_user"]; ?></h3>
<a href="admin_bookstore.php"><img class="logo" src="css/images/logo.png" alt="logo"/></a>
<p align='right'><a class='logout' href='admin_logout.php'>Logout</a></p>
<p><a class='home' href='admin_bookstore.php'>Home</a></p>
<form  action="book_registration.php" method="post" enctype="multipart/form-data" > 
<center><table>
<tr><th>Select file to upload</th><td><input type="file" name="file" value="" id="file" /></td></tr>
<tr><th></th><td><center><input type="submit" value="Register" name="submit" class="register"/></center></td></tr>
</table></center>
</form>
<?php include('footer.php'); ?>
</div>
</body>
</html>