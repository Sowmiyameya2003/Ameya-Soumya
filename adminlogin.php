<?php
session_start();
include("connection.php");
$sql=mysqli_query($conn,"SELECT Emp_id,Emp_password from employee;");
while($row=mysqli_fetch_assoc($sql)){
    $Emp_id=$row["Emp_id"];
    $Emp_password=$row["Emp_password"];
}
?>
<html>

    <head>
        <link rel="stylesheet" href="style.css" />
        <title>Home page</title>
        <script>
            function validate()
            {
                let x = document.forms["login"]["uname"].value;
                let y = document.forms["login"]["password"].value;
                if(x=="2022ilhr" && y=="newyork!@#$%" )
                {
                    window.location="hrhome.php";
                    alert("welcome");
                    
  }
  else
  {
    alert("incorrect username or password");
    window.location="adminlogin.php";
  }
}
</script>
      
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
                   <form name="login" class="form1" action="hrhome.php" >
                      <input type="text" placeholder="username" name="uname" id="uname"></br></br>
                      <input type="password" placeholder="password" name="password" id="password"></br>
                      <div class="check">
                         <input type="checkbox">
                          Remember me
                      </div><br><br>
                      <button  onclick="validate()">Login</button>   
                    </form>
               </div>
            </div>
        </div>
    </body>
</html>