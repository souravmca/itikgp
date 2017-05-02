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
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$sub1 = mysqli_real_escape_string($link, $_REQUEST['sub1']);
$sub2 = mysqli_real_escape_string($link, $_REQUEST['sub2']);
 
// attempt insert query execution
$sql = "UPDATE testtab SET name='$name',sub1='$sub1',sub2='$sub2' where roll='$roll'";
if(mysqli_query($link, $sql)){
    echo "Records updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>