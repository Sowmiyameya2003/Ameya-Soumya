<?php
session_start();
include("connection.php");
if(isset($_POST['respass']))
{

    if(isset($_POST['pass']) && isset($_POST['conpass']))
    {
        $id=$_POST['empid'];
        $pass=$_POST['pass'];
        $conpass=$_POST['conpass'];
        if($pass==$conpass)
        {
            $sql=mysqli_query($connx,"update employee set Emp_password='$pass' where Emp_id='$id'");
            
            if($sql)
            {
                
                echo'<script>alert("Sucessfully Resetted"); window.location="emplogin.php";</script>';
            }
        }
        else{
            echo'<script>alert("Password Confirmation Failed")</script>';
            
        }
   
    }
}
?>
<html>
<title>forget</title>
    <head>
        <link rel="stylesheet" href="style2.css" />
        <title>Home page</title>
      
    </head>
    <body>
    <div class="background-image"></div>
<div class="navbar"> 


    <img src="logo.png">
    <p> iLeave</p>
    </div>
        <div class="full">
            <div class="formbg">
                <div class="formbox">
                <form class="box"  method="POST">
 
 <h1 class="heading" >Password Reset<h1>
    <form class="form1">
 <input type="text"  name="empid"id="empid" placeholder="Employee ID" required/>
<input type="password"  name="pass"id="pass" placeholder="Password" required/>
<input type="password"  name="conpass" id="cpass" placeholder="Confirm Password" required/>

<i class="fa fa-eye" aria-hidden="true" id="eye" onclick="myFunction()"></i>
<input type="submit" value="Reset Password" name="respass" >
<a class="signadmin" href= "emplogin.php" > <- Go Back </a>
</form>
               </div>
            </div>
        </div>
    </body>
</html>    
      