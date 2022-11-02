<?php
session_start();
 include('connection.php');
 $sql=mysqli_query($conn,"select * from employee;")
?>

<html>
<head>
 <link rel="stylesheet" type="text/css" href="style4.css" />
 <title>adminprofile</title>
</head>
<body>
<header>
 <nav>
  <ul>
   <li><a href="https://7topics.com/creating-user-profile-page-using-php-and-mysql.html">iLeave</a></li>
  </ul>
 </nav>
</header>

<div id="signup">
<div id="signup-st">

<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">My Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Employee id:</div> </td>
<td class="tl-1">2022ilhr</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Name:</div></td>
<td class="tl-1">Steve John</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Designation:</div></td>
<td class="tl-1">HR</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email:</div></td>
<td class="tl-1">steve@gmail.com</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">phone number:</div></td>
<td class="tl-1">9075084600</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">date of joining:</div></td>
<td class="tl-1">20/08/2018</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">salary:</div></td>
<td class="tl-1">1000000</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Address:</div></td>
<td class="tl-1">banglore</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
</br>
</body>
</html>