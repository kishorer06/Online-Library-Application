<?php
function book_register($title, $category, $isbn, $author, $pages,$file) {
// register new person with db
// return true or error message
// connect to db
$conn = db_connect();
// check if username is unique
/*$result = $conn->query("select * from register where uname='".$u_name."'");
if (!$result) {
throw new Exception('Could not execute query');
}*/
/*if ($result->num_rows>0) {
throw new Exception('That username is taken - go back and choose another
one.');
}*/
// if ok, put in db
$result = $conn->query("insert into book_register (title, category, isbn, author, pages,file) values ('$title', '$category', '$isbn', '$author', '$pages','$file')");
if (!$result) {
throw new Exception('Could not register book in database - please try again later.');
}
return true;
}
function book_deletion($isbn) {
// delete a book with isbn number
// return true or error message
// connect to db
$conn = db_connect();
// if ok, put in db
$result = $conn->query("DELETE from book_register WHERE  isbn='$_POST[isbn]'");
if (!$result) {
throw new Exception('Could not delete a book from database - please try again later.');
}
return true;
}

function login($aid, $pword) {
// check username and password with db
// if yes, return true
// else throw exception
// connect to db
$conn = db_connect();
// check if username is unique
$p_hash=sha1($pword);
$result = $conn->query("select * from admin where aid='$aid' and pword ='$p_hash'");
if (!$result) {
throw new Exception('Could not log you in.');
} 
else {
if ($result->num_rows>0) {
	$_SESSION['valid_user']=$aid;
return true;
} else {
throw new Exception('Could not log you in.');
}
}
}
?>