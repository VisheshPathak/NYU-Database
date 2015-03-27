<?php 
 
  
  session_start();
 
?>
<!DOCTYPE html>
<html>
        <form action="artistlogin1.php" method="post">
            
           <br /> Login for Current Artists <br />
              Username:<input type="text" name="un"><br />
              Password:<input type="password" name="pwd"><br />
             
              <input type="submit" value="Submit">
        </form>
    
    
    
        <form action="artistlogin2.php" method="post">
            
           <br /> Sign Up for New Artists <br />
              Username:<input type="text" name="un"><br />
              Password:<input type="password" name="pwd"><br />
              Date of Birth:<input type="date" name="dob"><br />
              Email:<input type="text" name="e"><br />
              City:<input type="text" name="c"><br />
              First Name:<input type="text" name="fn"><br />
              Last Name:<input type="text" name="ln"><br />
            Hyperlink:<input type="text" name="hl"><br />
            
              <input type="submit" value="Submit">
        </form>
 </html>

