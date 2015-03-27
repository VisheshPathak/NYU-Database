<?php
include_once("database.php"); 
session_start();
?>

<html>
<body>
<form action="order.php" method="post">
<?php

echo "<br />Welcome ".$_SESSION['userName']."!";


echo "
<h2>What you want to do</h2>

<ul style="list-style-type:disc">
 <li><br /><a href='search_artist.php'>Search Artist</a></li>
 <li><br /><a href='search_user.php'>Search User</a></li>
 <li><br /><a href='rating_review.php'>Give rating and review</a></li>
 <li><br /><a href='reco_list.php'>Recommend List</a></li>
 <li><br /><a href='add_new_concert.php'> Add New Concert</a></li>
 <li><br /><a href='search.php'>Search</a></li>
</ul> ";









$sql = "SELECT sname,description FROM sandwich  WHERE description LIKE('%".$_POST["keyword"]."%')";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table cellpadding = '20' border='1'><tr><th>Sandwich Name</th><th>Description</th><th>Size</th><th>Price</th></tr>";
    // output data of each row
	$i= 0;
	$j= 0;
	$sandwich = array();
	
    while($row = $result->fetch_assoc()) {
	    $sandwich[$j++] = $row["sname"];
		$sql = "SELECT prize FROM menu WHERE sname = '".$row["sname"]."' and size = 'Small'";
		$result1 = $conn->query($sql);
		$row1 = $result1->fetch_assoc();
		$price1 = $row1["prize"];
		$sql = "SELECT prize FROM menu WHERE sname = '".$row["sname"]."' and size = 'Large'";
		$result1 = $conn->query($sql);
		$row1 = $result1->fetch_assoc();
		$price2 = $row1["prize"];
		
		
        echo "<tr><td>".$row["sname"]."</td><td>".$row["description"]."</td><td ><input type='radio' name='size' value='".$i++."'>Small<br>
<input type='radio' name='size' value='".$i++."'>Large</td><td>".$price1." <br> ".$price2."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$_SESSION["slist"] = $sandwich;
$_SESSION["contact"] = $_POST["contact"];

?> 

<input type="submit">
</form>
    
    ?>
</body>
</html> 
