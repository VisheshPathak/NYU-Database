  
    <?php

session_start();
    echo "Welcome to Music Mania ".$_SESSION['username']."!";
	echo "</br>";
    
?>
<!DOCTYPE html>
<html>

<form action="logout.php" target="workspace,sidebar" method="post">


             
              <input type="submit" value="Logout!">
        
    </form>
    
</html>