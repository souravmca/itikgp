<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "testdb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$txtname = mysqli_real_escape_string($link, $_REQUEST['txtname']);
$txtemail = mysqli_real_escape_string($link, $_REQUEST['txtemail']);
$txtsubject = mysqli_real_escape_string($link, $_REQUEST['txtsubject']);
$txtmessage = mysqli_real_escape_string($link, $_REQUEST['txtmessage']);
 
// attempt insert query execution
$sql = "INSERT INTO contacttab (name, email, subject, message) VALUES ('$txtname', '$txtemail', '$txtsubject','$txtmessage')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>