<?php

session_start();
?>


<html>
              
              
                    
<form action="f3_2_1.php" method="post">
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





$sql = "SELECT first_name,last_name,city,email,u_name FROM user_reg  WHERE first_name LIKE('%".$_POST["first"]."%') and last_name LIKE('%".$_POST["last"]."%')";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table cellpadding = '20' border='1'><tr><th>User First Name</th><th>
    
    
    User Last Name</th><th>City</th><th>Email</th></tr>";
    // output data of each row
	$i= 1;
	$j= 0;
	$temp = array();
	
    while($row = $result->fetch_assoc()) {
	    $temp[$j++] = $row["u_name"];
		
      
        $_SESSION['follow'] = $row["u_name"];
		
       # $sql = "SELECT prize FROM menu WHERE sname = '".$row["sname"]."' and size = 'Large'";
		#$result1 = $conn->query($sql);
	#	$row1 = $result1->fetch_assoc();
		#$price2 = $row1["prize"];
		
		
        echo "<tr><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["city"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
    
    
    
    
    
    
} else {
    echo "No results Found!!";
}


?> 

<input type="submit" value="Follow this user!">
</form>
                    
          
                    
                 
              </html>