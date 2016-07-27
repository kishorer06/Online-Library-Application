<?php
function filled_out($form_vars) {
// test that each variable has a value
foreach ($form_vars as $key => $value) {
if ((!isset($key)) || ($value == '')) {
return false;
}
}
return true;
}
function valid_email($address) {
// check an email address is possibly valid
if (preg_match('/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/', $address)) {
return true;
} else {
return false;
}
}
function check_valid_user() {
// see if somebody is logged in and notify them if not
if (isset($_SESSION['valid_user'])) {
echo "<html><head><meta charset='UTF-8'> <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'></head><body><p>Logged in as ".$_SESSION['valid_user'].".</p><br /><body></html>";
} else {
// they are not logged in
echo "<html><head><meta charset='UTF-8'> <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'></head><body><center><p>You are not logged in </p><br /> <a href='login_user.php'>Please try again</a></center></body></html>";
exit;
}
}
?>