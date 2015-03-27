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

$sql="select reg_date from user_reg where u_name='".$u ."'";
  $result = $conn->query($sql);
$row = $result->fetch_assoc()
  $temp=  $row["reg_date"];
 

if ($result->num_rows > 0) {

           select * from user_Reg where u_name=$u and reg_date=

sql1="SELECT TIMESTAMPDIFF(YEAR,'".$temp."',now()) as score";
    
    $result1 = $conn->query($sql1);
    $row = $result->fetch_assoc()
  $temp=  $row["score"];
    
      
    if($temp>1)
        #$sql = "INSERT into phplogin values(".$id.",'".$user."','".$pass."')";
          $sql = "INSERT into concert values('".$cid."','".$cname."','".$aname."','".$muc."','".$cdate."','".$place."','".$concertcity."','".$dur."','".$pri."','".$tt."',now())";
           $qury = $conn->query($sql);
		   
		   echo "Concert Details have been added Successfully";
 
}





 
        
?>

