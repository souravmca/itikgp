<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "testdb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$roll = mysqli_real_escape_string($link, $_REQUEST['roll']);

 
// attempt insert query execution
$sql = "DELETE FROM testtab where roll='$roll'";

if(mysqli_query($link, $sql)){
    echo "Records deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>