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





    $uname = $_POST['un'];
     $pass = $_POST['pwd']; 

$sql = "SELECT count(*) FROM artist_data WHERE(
     a_name='".$uname."' and  a_password='".$pass."')";
 
 
#     SELECT count(*) FROM phplogin WHERE(
#     username='$uname' and  password='$pass');
 
      
 
      $result = $conn->query($sql);
 
      if($result->num_rows > 0)
      {
        
        $_SESSION['username'] = $uname;
        echo "<br />Welcome ".$_SESSION['username']."!";
        echo "<br /><a href='artistprofile.php'>Go To Profile</a>";
        
        
        
      }
      else
      {
        echo "Login Failed ! Please check the Username or Password";
          echo "<br /><a href='artistlogin.php'>Artist Login</a>";
        
      }
?>



