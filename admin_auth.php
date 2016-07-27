<?php
require_once('admin_init.php');

$aid=($_POST['aid']);
$pword=($_POST['pword']);
try{
   $issuccess=login($aid, $pword);
}catch(Exception $e){
	$error = $e->getMessage();
	$issuccess=false;
}
if($issuccess)
{
	// to show login details in url 
	echo"<html><head><meta charset='UTF-8'> <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'></head><body><center> <h2>Successfully logged in <br><a style='color:orange' href='admin_bookstore.php'>Please click to enter Online Library</a></h2></center></body></html>";
}
else{
	echo "<center>Login failed &nbsp <a style='color:orange' href='login_admin.php'>Please try Again</a></center>";
}
 
?>