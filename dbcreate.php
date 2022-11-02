<?php
session_start();
require 'connection.php';
$sql="create database miniprojects;";
$data=mysqli_query($conn,$sql);
if($data)
{
echo "created";
}
