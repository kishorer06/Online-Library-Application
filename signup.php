<?php 
// include function files for this application
require_once('init.php');
//create short variable names
$f_name=($_POST['fname']);
$l_name=($_POST['lname']);
$u_name=($_POST['uname']);
$p_word=($_POST['pword']);
$c_p_word=($_POST['c_p_word']);
$email=($_POST['email']);
$dob=($_POST['dob']);
$phone=($_POST['phone']);
$address=($_POST['address']);
// start session which may be needed later
// start it now because it must go before headers
try {
// check forms filled in
if (!filled_out($_POST)) {
throw new Exception("<html><head> <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'></head><body><center>You have not filled the form out correctly <br>
<a style='font-size:20px;  color:orange' href='userdetails.php'>Please try again.</a></center></body></html>");
}
// email address not valid
if (!valid_email($email)) {
throw new Exception("<html><head><meta charset='UTF-8'> <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'></head><body><p>That is not a valid email address.
Please go back and try again.</p></body></html>");
}
// passwords not the same
if ($p_word != $c_p_word) {
throw new Exception("<html><head><meta charset='UTF-8'> <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'></head><body><p>The passwords you entered do not match</p> <br>
<a style='font-size:20px;color:orange' href='userdetails.php'>Please try again.</a></body></html>");
}
// check password length is ok
// ok if username truncates, but passwords will get
// munged if they are too long.
if ((strlen($p_word) < 6) || (strlen($p_word) > 16)) {
throw new Exception("Your password must be between 6 and 16 characters.<br>
<a style='	font-size:20px;color:orange' href='userdetails.php'>Please try again.</a>");
}
// attempt to register
// this function can also throw an exception
$p_hash=sha1($p_word);
register($f_name, $l_name, $u_name, $p_hash, $email, $dob, $phone, $address);
// register session variable
$_SESSION['valid_user'] = $u_name;
// provide link to members page
echo "<html><head><meta charset='UTF-8'> <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'></head><body><center><h3>Your registration was successful.<br> Please click on <a style='font-size:20px;color:orange' href='login_user.php'>Login</a></h3></center></body></html>";
// end page
}
catch (Exception $e) {
echo $e->getMessage();
exit;
}
?>