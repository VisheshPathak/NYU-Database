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
$tickets = $_POST['nt'];
$u=$_SESSION['username'];
   $g=1;  



$sql = "INSERT into is_going values('".$u."','".$c."',".$g.")";
           $qury = $conn->query($sql);
 
$sql1 = "Update  concert set total_tickets=total_tickets-'".$tickets."' where concert_id='".$c."'";
           $qury1 = $conn->query($sql1);
 
#     SELECT count(*) FROM phplogin WHERE(
#     username='$uname' and  password='$pass');
 
      
 
      

    echo "Thank you for your purchase!!";


?> 

