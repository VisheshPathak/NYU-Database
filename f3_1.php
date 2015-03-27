<?php

session_start();
?>


<html>
              
              
                    
<form action="f3_1_1.php" method="post">
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





$sql = "SELECT a_fname,a_lname,a_city,hyperlink,a_name FROM artist_data  WHERE a_fname LIKE('%".$_POST["fn"]."%') and a_lname LIKE('%".$_POST["ln"]."%')";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table cellpadding = '20' border='1'><tr><th>Artist First Name</th><th>
    
    
    Artist Last Name</th><th>City</th><th>Website</th><th>Concerts</th></tr>";
    // output data of each row
	$i= 1;
	$j= 0;
	$temp = array();
	
    while($row = $result->fetch_assoc()) {
	    $temp[$j++] = $row["a_name"];
		
        $sql = "SELECT concert_name,music_type,concert_date,place,concert_city,duration FROM concert WHERE a_name = '".$row["a_name"]."'";
		$result1 = $conn->query($sql);
		$row1 = $result1->fetch_assoc();
		$concert_name1 = $row1["concert_name"];
        $music_type1 = $row1["music_type"];
        $concert_date1 = $row1["concert_date"];
        $place1 = $row1["place"];
        $concert_city1 = $row1["concert_city"];
        $concert_duration1 = $row1["duration"];
        $_SESSION['artist'] = $row["a_name"];
		
       # $sql = "SELECT prize FROM menu WHERE sname = '".$row["sname"]."' and size = 'Large'";
		#$result1 = $conn->query($sql);
	#	$row1 = $result1->fetch_assoc();
		#$price2 = $row1["prize"];
		
		
        echo "<tr><td>".$row["a_fname"]."</td><td>".$row["a_lname"]."</td><td>".$row["a_city"]."</td><td>".$row["hyperlink"]."</td><td>".$concert_name1." <br> ".$music_type1." <br> ".$concert_date1." <br> ".$place1." <br> ".$concert_city1." <br> ".$concert_duration1."</td></tr>";
    }
    echo "</table>";
    
    
    
    
    
    
} else {
    echo "0 results";
}


?> 

<input type="submit" value="Become Fan !">
</form>
                    
          
                    
                 
              </html>