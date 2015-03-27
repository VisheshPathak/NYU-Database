<?php

session_start();
?>


<html>
            <head></head>  
              <frameset rows="55,*" name="topbar">>
                  
              <frame src="f1.php">
                <frameset cols="25%,85%">
                <frame src="f2.php" name="sidebar">>
                <frame src="f3.php" name="workspace">
                </frameset>
              </frameset>
              </html>