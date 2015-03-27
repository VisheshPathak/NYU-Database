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
     $a = $_SESSION['artist'];

$sql = "insert into fan_of values('".$u."','".$a."') ";
 
 
#     SELECT count(*) FROM phplogin WHERE(
#     username='$uname' and  password='$pass');
 
      
 
      $result = $conn->query($sql);

    echo "You Became a Fan of '".$a."'";


?> 

         
    </html>