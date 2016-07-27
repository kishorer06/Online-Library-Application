<?php
function register ($f_name, $l_name, $u_name, $p_word, $email, $dob, $phone, $address) {
// register new person with db
// return true or error message
// connect to db
$conn = db_connect();
// check if username is unique
$result = $conn->query("select * from register where uname='".$u_name."'");
if (!$result) {
throw new Exception('Could not execute query');
}
if ($result->num_rows>0) {
throw new Exception('That username is taken - go back and choose another one.');
}
// if ok, put in db
$result = $conn->query("insert into register (fname, lname, uname, pword, email, dob, phone, address) values ('$f_name', '$l_name', '$u_name', '$p_word', '$email', '$dob', '$phone', '$address')");
if (!$result) {
throw new Exception('Could not register you in database - please try again later.');
}
return true;
}


function login($uname,$pword) {
// check username and password with db
// if yes, return true
// else throw exception
// connect to db
$conn = db_connect();
// check if username is unique
$p_hash=sha1($pword);
$result = $conn->query("select * from register where uname='$uname' and pword ='$p_hash'");
if (!$result) {
throw new Exception('Could not log you in.');
} 
else {
if ($result->num_rows>0) {
	$_SESSION['valid_user']=$uname;
return true;
} else {
throw new Exception('Could not log you in.');
}
}
}
?>