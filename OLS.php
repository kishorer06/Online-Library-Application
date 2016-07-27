<html>
<head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online Library System</title>
<link rel="icon" type="image/x-icon" href="css/images/icon.ico" />
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald|Lora' rel='stylesheet' type='text/css'>
<link href="css/home.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/library.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body onload="startTime()">
<div>
<img class="logo" src="css/images/logo.png" alt="logo"/><br><br>
   <nav>
       <ul>
		   <li><a href="default.php">Home</a></li>
	       <li><a href="OLS.php">Login <span class="dropdown">&#8711 </span></a>
		       <ul>
				 <li><a href="login_user.php">User</a></li>
				 <li><a href="login_admin.php">Admin</a></li>
		       </ul>
	       </li>
		    <li><a href="userdetails.php">Create Profile</a></li>
      </ul> 
	  <div class="collapse"><b> MENU </b></div>
  </nav>&nbsp
 <script>
	$('.collapse').on('click', function(){
		$('nav ul').toggleClass('showing');	
	});
 </script>
 <?php include('slideshow.php');?>
<?php include('footer.php');?>
 </div>
</body>
</html>