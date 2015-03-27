<?php 
 
  
  session_start();
 
?>
<!DOCTYPE html>
<html>
        <form action="userlogin1.php" method="post" style = "text-align:center">
            
           <br /> Sign In <br /></br>
              Username:<input type="text" name="un"><br /></br>
              Password:<input type="password" name="pwd"><br /></br>
             
              <input type="submit" value="Submit">
        </form>
    <br>
	
	<?php
		
		echo "=====================================================================================================================================================";
	
	?>
	
    
    
        <form action="userlogin2.php" method="post" style = "text-align:center">
            
           <br /> Sign Up for New Users <br /><br />
			  Username:<input type="text" name="un"><br /><br />
              Password:<input type="password" name="pwd"><br /><br />
              Date of Birth (yyyy-dd-mm) :<input type="date" name="dob"><br /><br />
              Email:<input type="text" name="e"><br /><br />
              City:<input type="text" name="c"><br /><br />
              First Name:<input type="text" name="fn"><br /><br />
              Last Name:<input type="text" name="ln"><br /><br />
            
              <input type="submit" value="Submit">
        </form>
 </html>

