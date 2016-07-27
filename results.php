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
  <title>Search Results</title>
</head>
<link href="css/results.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/library.js"></script>
<body onload="startTime()">
<h2 style="color:white;font-family:verdana" align="right">Hello <?php echo $_SESSION["valid_user"]; ?></h2><br>
<p><a class="search" href="search.php">Books <img src="css/images/search.icon.png" width="16px" height="15px" /></a></p>
<center>
<table border='1' width="80%" cellpadding="0" cellspacing="0">
<tr>
	 <th >S.NO</th>
	 <th>Book Title</th>
	 <th>Category</th>
	 <th>ISBN</th>
	 <th>Author</th>
	 <th>Total Pages</th>
	 <th>File</th>
	 </tr>
<?php
  // create short variables
  $searchtype=$_POST['searchtype'];
  $searchterm=trim($_POST['searchterm']);

  if (!$searchtype || !$searchterm) {
     echo "<p align='center'><span style='font-size:20px'>You have not entered search details.</span> <span style='Color:orange;font-size:25px' > Please go back and try again.</span></p>";
     exit;
  }

  if (!get_magic_quotes_gpc()){
    $searchtype = addslashes($searchtype);
    $searchterm = addslashes($searchterm);
  }
@ $db = new mysqli("localhost","root","","ols");
  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }
  $query = "select * from book_register where ".$searchtype." like '%".$searchterm."%'";
  $result = $db->query($query);

  $num_res = $result->num_rows;
  echo "<p><b><span style='Color:orange;font-size:25px'>Number of books found: </span></b><span style='font-size:25px'>".$num_res."</span></p>";
  ?>
<?php $i=1;
	while ($row = $result->fetch_assoc()){ 
		?>
	<tr align="center">
	<td><?php echo $i++ ; ?></td>
	 <td><?php echo stripslashes($row['title']);?></td>
	 <td><?php echo stripslashes($row['category']);?></td>
	 <td><?php echo stripslashes($row['isbn']);?></td>
	 <td><?php echo stripslashes($row['author']);?></td>
	 <td><?php echo stripslashes($row['pages']);?></td>
	 <td><a href=""><?php echo stripslashes($row['file']);?></a></td>
	 </tr>
	 <?php
   } 
	$result->free();
  $db->close();
?></table></center>
<p class="footer"><?php include('footer.php'); ?></p>
</body>
</html>