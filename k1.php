  
    <?php

session_start();
    echo "Welcome ".$_SESSION['username']."!";
    
?>
<!DOCTYPE html>
<html>

<form action="logout.php" target="workspace,sidebar" method="post">


             
              <input type="submit" value="Logout!">
        
    </form>
    
</html>