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
$r = $_POST['rate'];
$rev = $_POST['review'];
$u=$_SESSION['username'];
     




$sql = "INSERT into concert_review values('".$c."','".$u."','".$rev."','".$r."')";
           $qury = $conn->query($sql);
 
 
#     SELECT count(*) FROM phplogin WHERE(
#     username='$uname' and  password='$pass');
 
      
 
      

    echo "Review Posted ! Thank you :)";


?> 

