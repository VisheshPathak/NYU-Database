<?php

session_start();
?>

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



$m = $_POST['mt'];


$u=$_SESSION['username'];
     




$sql = "INSERT into likes values('".$u."','".$m."')";
           $qury = $conn->query($sql);
 
 
#     SELECT count(*) FROM phplogin WHERE(
#     username='$uname' and  password='$pass');
 
      
 
      

    echo "New Music Type Posted ! Thank you :)";


?> 

