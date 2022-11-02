<?php
session_start();
include("connection.php");
?>
<html>
    <body>
        <title>deleteform</title>
<form action="#" method="POST"> 
     <head>
        <h1>STAFF DELETION </h1>
        <div class="input-box">
                        <span class="details">FULL NAME</span>
                        <input type="text" name="fname"> 
                    </div>
                    <div class="input-box">
                        <span class="details">DEPARTMENT NAME</span>
                        <input type="text" name="dept">    
                    </div>
                    <div class="input-box">
                        <span class="details">EMAIL</span>
                        <input type="text" name="email"> 
                    </div>
                    <div class="input-box">
                       
                        <select name="hod" id="hod">
                            <option disabled selected>Designation</option>
                            <option >HOD</option>
                            <option >Staff</option>
</select>

</div>
                    <div class="box">
    				<input type="Submit" name="submit" class="submit" value="DELETE">
    		</div>
</div>

                    
</div>
</form>
</body>
</html>
<?php
   if(isset($_POST['submit']))
   {
                   
   $fname=$_POST['fname'];
   $dept=$_POST['dept'];
   $hod=$_POST['hod'];
   $email=$_POST['email'];
   $sql="delete from employee where Emp_email='$email';";
   $data=mysqli_query($conn,$sql);
   if($data)
   {
   echo "deleted successfully";
   }
}
   
   ?>         