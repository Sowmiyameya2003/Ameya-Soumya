<?php
session_start();
include("connection.php");
$appid=$_GET['App_id'];
$sql=mysqli_query($conn,"select Emp_name,Emp_desig,Emp_dept,Emp_email,Emp_phone,employee.Emp_id,app_date,type,star_date,end_date,ldesc from  application 
inner join  employee on application.Emp_id=employee.Emp_id where App_id='$appid'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<div class="navbar"> 
<img src="logo.png">
<p> iLeave</p>
</div>
  <meta charset="UTF-8" />
  <title>Applicationview</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="./pic/logo.jpg">
          <span class="nav-item">DEPARTMENT HEAD</span>
        </a></li>
        <li>
          <i class="fas fa-men  orah"></i>
          <span class="nav-item">DASHBOARD</span>
        </li>
        <li><a href="#">
          <i class="fas fa-comment"></i>
          <span class="nav-item">VIEW</span></a></li>
        <li><a href="#">
          <i class="fas fa-database"></i>
          <span class="nav-item">MY PROFILE</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">UPDATE REQUESTS</span>
        </a></li>

        <li><a href="#" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
    <section class="attendance">
        <div class="attendance-list">
          <h1>Application details</h1>

          <table class="table">

            <thead>
              <tr>
              <th>Employee Id</th>
                <th>Full Name</th>
                <th>designation</th>
                <th>Departmentt</th>
                <th>Email Id</th>
                <th>Phone number</th>
                <th>Leave applied on</th>
                <th>Leave type</th>
                <th>Start date</th>
                <th>End date</th>
                <th>Description</th>
                
              </tr>
            </thead>
            <?php
            while($row=mysqli_fetch_assoc($sql))
            {
              ?>
            <tbody>
            <tr>
            <td><?php echo$row['Emp_id']; ?></td>
              <td><?php echo$row['Emp_name']; ?></td>
              <td><?php echo$row['Emp_desig']; ?></td>
              <td><?php echo$row['Emp_dept']; ?></td>
              <td><?php echo$row['Emp_email']; ?></td>
              <td><?php echo$row['Emp_phone']; ?></td>
              <td><?php echo$row['app_date']; ?></td>
              <td><?php echo$row['type']; ?></td>
              <td><?php echo$row['star_date']; ?></td>
              <td><?php echo$row['end_date']; ?></td>
              <td><?php echo$row['ldesc']; ?></td>
            
            </tr>
            </tbody>
           <?php
            }  
            ?>



          </table>
        </div>
      </section>
</head>
</html>