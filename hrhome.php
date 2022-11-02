<?php
SESSION_start();
include("connection.php");
$sql=mysqli_query($conn,"select App_id,Emp_name,Emp_desig,Emp_dept,Emp_email,Emp_phone,employee.Emp_id from  application 
inner join  employee on application.Emp_id=employee.Emp_id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<div class="navbar"> 
<img src="logo.png">
<p> iLeave</p>
</div>
  <meta charset="UTF-8" />
  <title>hrhome</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <span class="nav-item">HR-ADMIN</span>
        </a></li>
        <li>
          <i class="fas fa-men  orah"></i>
          <span class="nav-item">DASHBOARD</span>
        </li>
        <li><a href="hrview.php">
          <i class="fas fa-comment"></i>
          <span class="nav-item" >VIEW</span>
        </a></li>
        <li><a href="adminprofile.php">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">MY PROFILE</span>
        </a></li>
        <li><a href="updaterequests.php">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">UPDATE REQUESTS</span>
        </a></li>
        <li>
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">EDIT PROFILE</span>
          </li>
          <li><a href="insertform.php">
          <span class="nav-item">ADD</span>
        </a></li>
        <li><a href="deleteform.php">
          <span class="nav-item">DELETE</span>
        </a></li>

        <li><a href="adminlogin.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>LEAVE REQUESTS</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
      <?php
            while($row=mysqli_fetch_assoc($sql))
            {
              $appid=$row['App_id'];
              ?>
    
        <div class="card">
        <h4><?php echo$row['Emp_name']; ?></h4>
          <p><?php echo$row['Emp_desig']; ?></p>
          <p><?php echo$row['Emp_dept']; ?></p>
          <div class="per">
            <table>
              <tr>
                <td><span>85%</span></td>
                <td><span>87%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <td>
          <?php echo"<a href='applicationview.php?App_id={$appid}'><button>APPLICATION</button></a>" ?> </td>
         
            </a>
        </div>
     
      <?php } ?>
      </div>
    </section>
  </div>

</body>
</html>

</div>

    </body>
</html>

