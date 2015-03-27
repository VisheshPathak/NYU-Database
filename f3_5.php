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

echo "The following your Recommendation list ";
echo "<table cellpadding = '20' border='1'><tr><th>Concert ID</th><th>Concert Date</th></tr>";


$sql = "SELECT concert_id, concert_date FROM list_of_user  WHERE u_name='".$_SESSION['username']."' ";
 
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {

    $cid=$row["concert_id"];
    $cdate=$row["concert_date"];

 echo "<tr><td>".$cid."</td><td>".$cdate."</td></tr>";
 
 }
 
 echo "</table>";


?> 
                    
<form action="f3_5_1.php" method="post">
            
           <br /> Fill this form to Add new concert in your Recommendation list <br />
              Concert ID:<input type="text" name="cid"><br />
              Concert Date:<input type="date" name="cd"><br />
                
             
            



<input type="submit" value="Add Concert to Recommendation List!">
</form>
                    
</html>


