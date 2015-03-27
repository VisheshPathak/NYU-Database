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



$c = $_POST['cid'];
$cdate = $_POST['cd'];

$u=$_SESSION['username'];
     




$sql = "INSERT into list_of_user values('".$u."','".$c."','".$cdate."')";
           $qury = $conn->query($sql);
 
 
#     SELECT count(*) FROM phplogin WHERE(
#     username='$uname' and  password='$pass');
 
      
 
      

    echo "Concert Posted ! Thank you :)";


?> 

