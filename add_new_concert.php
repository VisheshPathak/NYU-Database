<?php
include_once("db.php"); 
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


   
    ?>
</body>
</html> 


