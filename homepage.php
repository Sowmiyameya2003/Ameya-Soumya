<?php
session_start();
include("connection.php");
?>
<html>

    <head>
        <link rel="stylesheet" href="style5.css" />
        <title>Home page</title> 
    </head>
    <body>
    <div class="background-image"></div>
<div class="navbar"> 


    <img src="logo.png">
    <p> iLeave</p>
    <div class="items"> 
     
    </div>
    </div>
        <div class="full">
            <div class="formbg">
                <div class="formbox">
                      <a href="./adminlogin.php"><button class="btn-gray">HR</button></a>
                      <a href="./emplogin.php"><button class="btn-gray">EMPLOYEE</button></a>
                    
               </div>
            </div>
        </div>
    </body>
</html>