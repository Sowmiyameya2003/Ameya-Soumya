<?php
session_start();
include("connection.php");
$sql=mysqli_query($conn,"SELECT Emp_id,Emp_password,Emp_desig from employee;");
while($row=mysqli_fetch_assoc($sql)){
    $Emp_id=$row['Emp_id'];
    $Emp_password=$row['Emp_password'];
    $Emp_desig=$row['Emp_desig'];
    if($_POST['uname']==$Emp_id && $_POST['password']==$Emp_password)
    {
        $curemp=$row['Emp_id'];
        $_SESSION['curemp']=$curemp;
        if($Emp_desig=="HOD")
        {
            header("location:http://localhost/leave%20management%20system/dhhome.php");
        }
        else if(($Emp_desig=="Staff")) 
        {
            $curemp=$row['Emp_id'];
            $_SESSION['curemp']=$curemp;
            header("location:http://localhost/leave%20management%20system/staffhome.php");
        }
        else{
            echo '<script type ="text/JavaScript">';  
echo 'alert(" invalid user")';  
echo '</script>';
        }
    }
    else
    {
        echo '<script type ="text/JavaScript">';  
echo 'alert(" invalid user")';  
echo '</script>';
    }

}
