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


           $user = $_POST['un'];
           $pass = $_POST['pwd'];
            $dob = $_POST['dob'];
            $email = $_POST['e'];
            $city = $_POST['c'];
            $first = $_POST['fn'];
            $last = $_POST['ln'];
            $hype= $_POST['hl'];







          
        #$sql = "INSERT into phplogin values(".$id.",'".$user."','".$pass."')";
          $sql = "INSERT into artist_reg values('".$user."','".$pass."','".$city."','".$email."','".$dob."','".$first."','".$last."','".$hype."',now())";
           $qury = $conn->query($sql);
 
        #  INSERT into phplogin values(
        #   1,
        #   'satish',
        #   'satish');
 
        if(!$qury)
        {
                  echo "Failed ".mysql_error();
                 
        }
        else
        {
                  echo "Successful";
           echo "<br /><a href='artistlogin.php'>Go To Profile</a>";
                 
        }
?>

