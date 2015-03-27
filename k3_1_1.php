<?php 
 
session_start();
?>
 
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_projects";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



            $cid = $_POST['c'];
            $cname = $_POST['cn'];
            $aname = $_POST['an'];

            $u =$_SESSION['username'];
            $muc = $_POST['mt'];
            $cdate = $_POST['cd'];
            $place= $_POST['p'];
            $concertcity= $_POST['cc'];
            $dur = $_POST['d'];
            $pri=$_POST['price'];
            $tt=$_POST['t'];


       

           


      
        #$sql = "INSERT into phplogin values(".$id.",'".$user."','".$pass."')";
          $sql = "INSERT into concert values('".$cid."','".$cname."','".$aname."','".$muc."','".$cdate."','".$place."','".$concertcity."','".$dur."','".$pri."','".$tt."',now())";
           $qury = $conn->query($sql);
 
}





 
        
?>

