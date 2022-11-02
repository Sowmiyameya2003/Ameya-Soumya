<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db='miniprojects';
$conn = new mysqli($servername,$username, $password,$db);
if(!$conn){
echo "connection failed";
}

?>