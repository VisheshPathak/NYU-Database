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

echo "<br />Welcome To Music Mania  ".$_SESSION['username']."! These are your upcoming Concerts!<br/>";


echo "<br/><table cellpadding = '20' border='1'><tr><th>Concert ID</th><th>Concert Date</th></tr>";

$u=$_SESSION['username'];

$sql1 = "select concert_id,concert_date from concert,likes where concert.music_type = likes.music_type and u_name = '".$u."' and concert_date>now() ";


$result = $conn->query($sql1);

while($row = $result->fetch_assoc()) {

    $cid=$row["concert_id"];
    $cdate=$row["concert_date"];

 echo "<tr><td>".$cid."</td><td>".$cdate."</td></tr>";
 
 
 
 }




$sql2 ="select concert_id,concert_date from concert,fan_of where concert.a_name=fan_of.a_name and fan_of.u_name='".$u."' and concert_date>now()";




$result = $conn->query($sql2);

while($row = $result->fetch_assoc()) {

    $cid=$row["concert_id"];
    $cdate=$row["concert_date"];

 echo "<tr><td>".$cid."</td><td>".$cdate."</td></tr>";
 
 }

$sql3 ="select concert_id,concert_date from list_of_user,follows_artist where list_of_user.u_name = follows_artist.following and follows_artist.follower = '".$u."' and concert_date>now()";


$result = $conn->query($sql3);

while($row = $result->fetch_assoc()) {

    $cid=$row["concert_id"];
    $cdate=$row["concert_date"];

 echo "<tr><td>".$cid."</td><td>".$cdate."</td></tr>";
 
 }





 echo "</table>";


?> 
                    
<form action="f3_x.php" method="post">
            
           <br /> Fill this form to Add new concert in your Recommendation list <br /><br/>
		   
		   
              Concert ID:<input type="text" name="cid"><br /><br/>
              Number of Tickets:<input type="text" name="nt"><br /><br/>
                
             
            



<input type="submit" value="Purchase Tickets!">
</form>
                    
</html>






