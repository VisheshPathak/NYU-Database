<?php 
 
  
  session_start();
 
?>
<!DOCTYPE html>
<html>
       <form action="k3_1_1.php" method="post">
            
           <br /> Add new concert <br />
              Concert ID:<input type="text" name="c"><br />
              Concert Name:<input type="text" name="cn"><br />
              Artist Name:<input type="text" name="an"><br />
              Music Type:<input type="text" name="mt"><br />
              Concert Date:<input type="date" name="cd"><br />
              Place:<input type="text" name="p"><br />
              Concert City:<input type="text" name="cc"><br />
           Duration:<input type="text" name="d"><br />
           Price :<input type="text" name="price"><br />
           Total tickets:<input type="text" name="t"><br />
           
           
           
           
            
              <input type="submit" value="Add Concert !">
        </form>

    
    
    
    
</html>