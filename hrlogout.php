<?php
session_start();
if(session_destroy()) {
 header("adminlogin.php");
}
?>