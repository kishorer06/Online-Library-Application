<?php
require_once('admin_init.php');
if(!isset($_SESSION['valid_user'])){
	//$msg= "please Login to Access Online Library";
	//echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
header("location:OLS.php");
}?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
<form  action="book_registration.php" method="post" > 
<center><table>
<tr><th>Book Tile</th><td><input  type="text" name="title" value="" class="booktitle"/></td></tr>
<tr><th>Category</th><td><select  name="category" class="field">   
	<option value="Computer Science" selected>Computer Science</option>
    <option value="Mechanical Engineering">Mechanical Engineering</option>
    <option value="Electrical Engineering">Electrical Engineering</option>
    <option value="Civil Engineering">Civil Engineering</option>
	</select><!--<input  type="text" name="lname" value="" class="userdetails"/>--></td></tr>
<tr><th>ISBN</th><td><input  type="text" name="isbn" value="" class="isbn"/></td></tr>
<tr><th>Author Name</th><td><input  type="text" name="author" value="" class="athname" /></td></tr>
<tr><th>Total Pages</th><td><input  type="text" name="pages" value="" class="tlpages" /></td></tr>
<tr><th>Select file to upload</th><td><input enctype="multipart/form-data" type="file" name="file" value="" id="file" /></td></tr>
<tr><th></th><td><center><input type="submit" value="Register" class="register"/></center></td></tr>
</table></center>
</form>
<?php include('footer.php'); ?>
</div>
</body>
</html>