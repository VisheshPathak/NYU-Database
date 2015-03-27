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







          
        #$sql = "INSERT into phplogin values(".$id.",'".$user."','".$pass."')";
          $sql = "INSERT into user_reg values('".$user."','".$dob."','".$email."','".$pass."','".$city."',now(),'".$first."','".$last."')";
           $qury = $conn->query($sql);
 
        #  INSERT into phplogin values(
        #   1,
        #   'satish',
        #   'satish');
 
        if(!$qury)
        {
                  echo "User creation Failed!! The username or email already exists!! Please enter a different username ".mysql_error();
                 
        }
        else
        {
			
                  echo "Registration Successful ";
				  echo "<br /><a href='userlogin.php'>Click here to Login</a>";
		   
		   
                 
        }
?>

