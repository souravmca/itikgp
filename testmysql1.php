<?php
/*    Using "mysqli" instead of "mysql" that is obsolete.
*     Utilisation de "mysqli" à la place de "mysql" qui est obsolète.
* Change the value of parameter 3 if you have set a password on the root userid
* Changer la valeur du 3e paramètre si vous avez mis un mot de passe à root
*/
$mysqli = new mysqli('127.0.0.1', 'root', '','testdb');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo 'Connection OK';
$sql = "SELECT roll,name,sub1,sub2 FROM testtab";
$result = $mysqli->query($sql);
ECHO "<table border=1>";
ECHO "<tr><td>ROLL<TD>NAME<TD>SUB1<TD>SUB2";

if ($result->num_rows > 0) {
    // output data of each row
while ($row = $result->fetch_assoc()){

echo "<TR>"."<TD>".$row['roll']."<TD>".$row['name']."<TD>".$row['sub1']."<TD>".$row['sub2'];
}
  
} else {
    echo "0 results";
}
ECHO"</TABLE>";
$mysqli->close();
?>
