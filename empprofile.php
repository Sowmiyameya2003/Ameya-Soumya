<?php
session_start();
 require('connection.php');
 $cemp=$_SESSION['curemp'];
 $sql=mysqli_query($conn,"select * from employee where Emp_id = '$cemp'");
?>

<html>
<head>
 <link rel="stylesheet" type="text/css" href="style4.css" />
 <title>profile</title>
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
<?php
            while($row=mysqli_fetch_assoc($sql))
            {
              ?>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Employee id:</div> </td>
<td class="tl-1">  <?php echo$row['Emp_id']; ?></td>

</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Name:</div></td>
<td class="tl-1"><?php echo$row['Emp_name']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Designation:</div></td>
<td class="tl-1"><?php echo$row['Emp_desig']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Department:</div></td>
<td class="tl-1"><?php echo$row['Emp_dept']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email:</div></td>
<td class="tl-1"><?php echo$row['Emp_email']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">phone number:</div></td>
<td class="tl-1"><?php echo$row['Emp_phone']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">date of joining:</div></td>
<td class="tl-1"><?php echo$row['Emp_doj']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">salary:</div></td>
<td class="tl-1"><?php echo$row['Emp_sal']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Address:</div></td>
<td class="tl-1"><?php echo$row['Emp_add']; ?></td>
</tr>
<?php
}
?>
</table>
</div>
</div>
</div>
</div>
</div>
</br>
</body>
</html>