<?php

session_start();
?>


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



    $u = $_SESSION['username'];
     $f = $_SESSION['follow'];

$sql = "insert into follows_artist values('".$u."','".$f."') ";
 
 
#     SELECT count(*) FROM phplogin WHERE(
#     username='$uname' and  password='$pass');
 
      
 
      $result = $conn->query($sql);

    echo "You are now following '".$f."'";


?> 

         
    </html>