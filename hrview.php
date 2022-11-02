<?php
session_start();
include("connection.php");
$sql=mysqli_query($conn,"select *from employee");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<div class="navbar"> 
<img src="logo.png">
<p> iLeave</p>
</div>
  <meta charset="UTF-8" />
  <title>hrview</title>
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
          <span class="nav-item">HR</span>
        </a></li>
        <li>
          <i class="fas fa-men  orah"></i>
          <span class="nav-item">DASHBOARD</span>
        </li>
        <li><a href="hrview.php">
          <i class="fas fa-comment"></i>
          <span class="nav-item">VIEW</span></a></li>
        <li><a href="adminprofile.php">
          <i class="fas fa-database"></i>
          <span class="nav-item">MY PROFILE</span>
        </a></li>
        <li><a href="updaterequests.php">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">UPDATE REQUESTS</span>
        </a></li>

        <li><a href="adminlogin.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
    <section class="attendance">
        <div class="attendance-list">
          <h1>Employee details</h1>

          <table class="table">

            <thead>
              <tr>
              <th>Employee Id</th>
                <th>Full Name</th>
                <th>designation</th>
                <th>Departmentt</th>
                <th>Email Id</th>
                <th>Phone number</th>
                <th>Date of joining</th>
                <th>Salary</th>
                <th>Permanent address</th>
                <th>leave history</th>
                
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
              <td><?php echo$row['Emp_doj']; ?></td>
              <td><?php echo$row['Emp_sal']; ?></td>
              <td><?php echo$row['Emp_add']; ?></td>
              <td><button action="leavehistory.php">view</button></td>
            
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