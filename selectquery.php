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
$sql = "SELECT roll,name,sub1,sub2 FROM testtab where roll='$roll'";
//$retval = mysql_query( $sql, $link );
if($result=mysqli_query($link, $sql)){
	if(mysqli_num_rows($result)>0){
	ECHO "<table border=1>";
ECHO "<tr><td>ROLL<TD>NAME<TD>SUB1<TD>SUB2";
while ($row = mysqli_fetch_array($result)){

echo "<TR>"."<TD>".$row['roll']."<TD>".$row['name']."<TD>".$row['sub1']."<TD>".$row['sub2'];

} 
ECHO"</TABLE>";
        // Free result set

        mysqli_free_result($result);
	}
	else {
		        echo "No records matching your query were found.";

    }
}
else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
// close connection
mysqli_close($link);
?>