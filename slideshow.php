<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/jquery.js"></script>
<script src="js/bxslider.js"></script>
<link rel="stylesheet" href="css/bxslider.css"/>
<link/>
<style>
#main{
	width:600px;
	}	
@media screen and (max-width:760px){
	#main{
		width:100%;
	}
}
</style>
<script>
$(document).ready(function(){
	$('#slideshow').bxSlider({
		mode: 'fade',
		speed: 2500,
  auto: true,
  pager:false,
  pause: 2000
	});	
	});
</script>
</head>
<body>
<center>
<div id="main">
<ul id="slideshow">
<li><img src="css/images/slideshow1.jpg"  alt="slideshow images" width="800px" height="400px" /></li>
<li><img src="css/images/slideshow2.jpg"  alt="slideshow images" width="800px" height="400px"/></li>
<li><img src="css/images/slideshow3.jpg" alt="slideshow images" width="800px" height="400px"/></li>
<li><img src="css/images/slideshow4.jpg"  alt="slideshow images" width="800px" height="400px"/></li>
<ul>
</div></center>
</body>
</html>