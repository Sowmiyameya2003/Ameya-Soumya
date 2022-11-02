<?php
session_start();
include("connection.php");
if($_POST['uname']=="2022ilhr" && $_POST['password']="newyork!@#$%")
{
    header("http://localhost/leave%20management%20system/hrhome.php");
}
else
{
$sql=mysqli_query($conn,"SELECT Emp_id,Emp_password,Emp_desig from employee;");
while($row=mysqli_fetch_assoc($sql)){
    $Emp_id=$row['Emp_id'];
    $Emp_password=$row['Emp_password'];
    $Emp_desig=$row['Emp_desig'];
    if($_POST['uname']=="$Emp_id" && $_POST['password']="$Emp_password")
    {
        if($Emp_desig="dh")
        {
            header("http://localhost/leave%20management%20system/dhview.php");
        }
        else
        {
            header("http://localhost/leave%20management%20system/dhview.php");
        }
    }

}
}