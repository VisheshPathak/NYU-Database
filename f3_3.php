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

echo "You have attended the following concerts<br/>";
echo "</br><table cellpadding = '20' border='1'><tr><th>Concert ID</th></tr>";


$sql = "SELECT concert_id FROM is_going  WHERE u_name='".$_SESSION['username']."' and is_going=1";
 
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {

    $cid=$row["concert_id"];

 echo "<tr><td>".$cid."</td></tr>";
 
 }
 
 echo "</table>";


?> 
                    
<form action="f3_3_1.php" method="post">
            
           <br /> Fill this form to post rating and review  <br /><br/>
              Concert ID:<input type="text" name="cid"><br /><br/>
              Rating out of 10:<input type="text" name="rate"><br /><br/>
                Review:<input type="text" name="review"><br /><br/>
        
             
            



<input type="submit" value="Submit Rating and Review!">
</form>
                    
</html>


