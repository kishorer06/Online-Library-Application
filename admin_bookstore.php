<?php
require_once('admin_init.php');
if(!isset($_SESSION['valid_user'])){
header("location:OLS.php");
}
function book_reg($book_title,$category,$isbn,$auth_name,$no_pages,$file){
$conn = db_connect();
$bid=$_GET['bid'];
$result = $conn->query("select * form book_register WHERE bid='$bid'");
if (!$result) {
throw new Exception('Could not display book from database - please try again later.');
}
return true;
}
?>
<html>
<head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome Admin</title>
<link href='css/admin_bookstore.css' rel='stylesheet' type='text/css' />
<script type='text/javascript' src='js/library.js'></script>
</head>
<body onload='startTime()'>
<div>
<h2>Welcome to Online Library!!! <?php echo $_SESSION["valid_user"]; ?> </h2>
<p align='right'><a class='logout' style="margin-right:2em " href='admin_logout.php'>Logout</a></p>
<center>
<!-- <h3>List Of Books</h2>
<table style='width:50%'>
<tr>
<th>S.No</th>
<th>Name of the BOOK</th>
<th>Author</th>
<th>Category</th>
<th>ISBN</th>
<th>Total Pages</th>
<th>View File</th>
</tr>

</table>-->
<p align='center'><a class='book' href='add_book.php'>Add Book</a> &nbsp <a class='book' href='delete.php'>Delete Book</a></p>
</center>
<?php include('footer.php'); ?>
</div>
</body>
</html>