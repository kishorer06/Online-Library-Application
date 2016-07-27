<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome</title>
	<link rel="shortcut icon" href="css/images/favicon.ico" type="image/ico" />
<link rel="stylesheet" href="css/font-awesome.min.css"/>
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald|Lora' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/default.css"  />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </head>  
<body>
<div>
<div class="header">
  <h1>Welcome to </h1>
	<img src="css/images/Logo1.jpg"  width="250px" height="100px" />
  </div>
  <nav>
	<ul>
		<a href="default.php"><li>Home</li></a>
		<a target="_blank" href="Exp.php"><li>Professional Experience</li></a>
		<a target="_blank" href="OLS.php"><li>My Projects</li></a>
	</ul> 
	<div class="collapse"><b> MENU </b></div>
  </nav>
 <section></section>
 <script>
	$('.collapse').on('click', function(){
		$('nav ul').toggleClass('showing');	
	});
 </script>
 </div>
</body>
</html>