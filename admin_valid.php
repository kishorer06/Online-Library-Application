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
function check_valid_user() {
// see if somebody is logged in and notify them if not
if (isset($_SESSION['valid_user'])) {
echo "<html><head><meta charset='UTF-8'> <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'></head><body><p>Logged in as ".$_SESSION['valid_user'].".</p><br />";
} else {
// they are not logged in
echo "'You are not logged in.<br /> <a href='login_admin.php'>Please try again</a></body></html>";
exit;
}
}
?>