 <?php

session_start();
?>

<!DOCTYPE html>
<html>
              
              

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}       

echo "<br />Welcome ".$_SESSION['username']."! These are your upcoming Concerts :)";


echo "<table cellpadding = '20' border='1'><tr><th>Concert ID</th><th>Concert Date</th></tr>";

$u=$_SESSION['username'];

$sql1 = "select concert_id,concert_date from concert where a_name = '".$u."' and concert_date>now() ";


$result = $conn->query($sql1);

while($row = $result->fetch_assoc()) {

    $cid=$row["concert_id"];
    $cdate=$row["concert_date"];

 echo "<tr><td>".$cid."</td><td>".$cdate."</td></tr>";
 
 }










 echo "</table>";


?> 
                    
                    
</html>






