<?php
session_start();
include("connection.php");
?>
<html>
    <title>insertform</title>
    <head>
    <link rel="stylesheet" type="text/css" href="style4.css" />
</head>
<header>
 <nav>
  <ul>
   <li><a href="https://7topics.com/creating-user-profile-page-using-php-and-mysql.html">iLeave</a></li>
  </ul>
 </nav>
 <body>
</header>
<div id="signup">
<div id="signup-st">

<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Employee Registeration</div>
<form method="POST"> 
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1">  <span class="details">EMPLOYEE ID</span><input type="text" name="eid"> 
 </td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div class="input-box">
                        <span class="details">FULL NAME</span>
                        <input type="text" name="fname">
                    </div>
                    </td>
</tr> 
                     <div class="input-box">
</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div class="input-box">
                       <select name="desig" id="desig">
                           <option disabled selected>Designation</option>
                           <option >HOD</option>
                           <option >Staff</option>
</select>
</td></tr>
                   </div>
                   <tr id="lg-1">
                   <td class="tl-1"><div class="input-box">
                        <span class="details">DEPARTMENT NAME</span>
                        <input type="text" name="dept">    
                    </div>
                    <tr id="lg-1">
                    <td class="tl-1"><div class="input-box">
                        <span class="details">EMAIL</span>
                        <input type="text" name="email"> 
                    </div>
                    <tr id="lg-1">
                    <td class="tl-1"> <div class="input-box">
                        <span class="details">PHONE NUMBER</span>
                        <input type="text" name="pnum" > 
                    </div>
                    <tr id="lg-1">
                    <td class="tl-1"> <div class="input-box">
                        <span class="details">DATE OF JOINING</span>
                        <input type="date" name="doj"> 
                        <span style='color:red;font-size:small;'><?php if(isset($doj))echo $dojerror ?><br></span>

                    </div>

                    </div>
                    <tr id="lg-1">
                    <td class="tl-1"><div class="input-box">
                        <span class="details">SALARY</span>
                        <input type="text" name="sal"> 
                    </div>
                    <tr id="lg-1">
                    <td class="tl-1"><div class="input-box">
                        <span class="details">ADDRESS</span>
                        <input type="text" name="address" placeholder="Address line"> 
                        <span style='color:red;font-size:small;'>
                    </div>
                   
                    <tr id="lg-1">
                    <td class="tl-1"><div class="input-box">
                        <span class="details">PASSWORD</span>
                        <input type="text" name="upassword"> 
                    </div>
                    <tr id="lg-1">
                    <td class="tl-1"><div class="input-box">
                        <span class="details">CONFIRM PASSWORD</span>
                        <input type="text" name="cpassword"> 
                    </div>
                    <tr id="lg-1">
                    <td class="tl-1"><div class="box" style="background: #2d3e3f">
    				<input type="Submit" name="submit" class="submit" value="REGISTER">
    		</div>
</div>

                    
</div>
</form>
</body>
</html>
<?php
   if(isset($_POST['submit']))
   {
    $eid=$_POST['eid'] ;           
   $fname=$_POST['fname'];
   $desig=$_POST['desig'];
   $dept=$_POST['dept'];
   $email=$_POST['email'];
   $pnum=$_POST['pnum'];
   $doj=$_POST['doj'];
   $sal=$_POST['sal'];
   $address=$_POST['address'];
   $upassword=$_POST['upassword'];
   $sql="insert into employee(Emp_id,Emp_name,Emp_desig,Emp_dept,Emp_email,Emp_phone,Emp_doj,Emp_sal,Emp_add,Emp_password)
   values('$eid','$fname','$desig','$dept','$email','$pnum','$doj','$sal','$address','$upassword');";
   $data=mysqli_query($conn,$sql);
   if($data)
   {
   echo "inserted successfully";
   }
}
   
   ?>         