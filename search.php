<?php
require_once('init.php');
if(!isset($_SESSION['valid_user'])){
	$msg= "please Login to Access Online Library";
	echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
header("location:OLS.php");}
?>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome to Online Library Search!!!</title>
  <link href='css/search.css' rel='stylesheet' type='text/css' />
<script type='text/javascript' src='js/library.js'></script>
</head>
<body onload="startTime()">
  <h1>Welcome to Online Library Search!!! <?php echo $_SESSION["valid_user"]; ?></h1>
  <nav align="right"><a class="navi" href="logout_user.php">Logout</a></nav>
<div>
<p><a class="home" href="book.php">Home</a></p>
  <center>
  <form action="results.php" method="post">
    Choose Search Type &nbsp
    <select name="searchtype">
      <option value="author">Author</option>
      <option value="title">Title</option>
      <option value="isbn">ISBN</option>
    </select>
    <br /><br />
    Enter Search Term &nbsp
    <input name="searchterm" type=""text" size="20"/>
    <br /><br/>
    <input class="search" type="submit" name="submit" value="Search"/>
  </form>
</center>
</div>
<?php include('footer.php'); ?>
</body>
</html>