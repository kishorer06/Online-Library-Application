<?php 
// include function files for this application
require_once('admin_init.php');
//create short variable names
$isbn=($_POST['isbn']);
try {
// check forms filled in
if (!filled_out($_POST)) {
throw new Exception("<html><head><meta charset='UTF-8'> <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'></head><body><center><h3> You have not filled the form out correctly <br><a style='font-size:20px;color:orange' href='add_book.php'>Please try again.</a><h3></center></body></html>");
}
// attempt to register
// this function can also throw an exception
book_deletion($isbn);
// register session variable
//$_SESSION['valid_user'] = $aid;
// provide link to members page
echo "<html><head><meta charset='UTF-8'> <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'></head><body><center>Your Book is Deleted.<br> Please Go <a style='font-size:20px;color:orange' href='admin_bookstore.php'>Back</a></center></body></html>";
// end page
}
catch (Exception $e) {
echo $e->getMessage();
exit;
}