<?php

$connx=mysqli_connect("localhost","root","","miniprojects");

 
$id =  $_GET["App_id"];

$sql = "update application set Status='Denied' WHERE App_id = '$id' ";
if($sql)
{
    header("location:updaterequests.php");
}
mysqli_query($connx,$sql); 


?>