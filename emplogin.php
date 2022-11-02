<?php
session_start();
include("connection.php");
?>
<html>

    <head>
        <link rel="stylesheet" href="style2.css" />
        <title>Home page</title>
      
    </head>
    <body>
    <div class="background-image"></div>
<div class="navbar"> 


    <img src="logo.png">
    <p> iLeave</p>
    <div class="items"> 
    <a href="About.php"> About </a>
      <a href="#"> Contact </a>
     
    </div>
    </div>
        <div class="full">
            <div class="formbg">
                <div class="formbox">
                   <form name="login1" class="form1" method="POST" action="empdir.php">
                      <input type="text" placeholder="username" name="uname" id="uname"></br></br>
                      <input type="password" placeholder="password" name="password" id="password"></br>
                      <div class="check">
                         <input type="checkbox">
                          Remember me
                      </div><br><br>
                      <button>Login</button>
                     <label>
                     <p><a href="forgotpass.php" style="font-size: 15px;">Forgot password</a></p>
                     </label>   
                    </form>
               </div>
            </div>
        </div>
    </body>
</html>    
      