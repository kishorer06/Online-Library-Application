<?php
// include function files for this application
require_once('init.php');
if(!isset($_SESSION['valid_user'])){
	$msg= "please Login to Access Online Library";
	echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
	header("location:OLS.php");
}
$old_user = $_SESSION['valid_user'];
// store to test if they *were* logged in
unset($_SESSION['valid_user']);
$result_dest = session_destroy();
// start output html
if (!empty($old_user)) {
if ($result_dest) {
// if they were logged in and are now logged out
echo "<html><head><meta charset='UTF-8'> <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'></head><body><center><h1>Logged out.<br /> <a href='login_user.php'><button>Login</button></a>&nbsp<a  href='OLS.php'><button>Home</button></a> <h1></center></body></html>";
} else {
// they were logged in and could not be logged out
echo "<html><head><meta charset='UTF-8'> <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'></head><body>Could not log you out.<br /></body></html>";
}
} else {
// if they weren't logged in but came to this page somehow
echo "<html><head><meta charset='UTF-8'> <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'></head><body><center>You were not logged in, and so have not been logged out.<br /> <a href='login_user.php'><button>Login</button></a></center></body></html>";
}
?>