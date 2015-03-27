 <?php

session_start();
?>

<!DOCTYPE html>
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

echo "The following your Favourite Music Type list ";
echo "<table cellpadding = '20' border='1'><tr><th>Music Type</th></tr>";


$sql = "SELECT music_type FROM likes  WHERE u_name='".$_SESSION['username']."' ";
 
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {

    $mt=$row["music_type"];
   

 echo "<tr><td>".$mt."</td></tr>";
 
 }
 
 echo "</table>";


?> 
                    
<form action="f3_6_1.php" method="post">
            
           <br /> Fill this form to Add new Music Type in your list <br />
              Music Type:<input type="text" name="mt"><br />
              
                
             
            



<input type="submit" value="Add new Music Type!">
</form>
                    
</html>


