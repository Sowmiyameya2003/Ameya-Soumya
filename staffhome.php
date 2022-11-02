
<!DOCTYPE html>
<html lang="en">
<head>
<div class="navbar"> 
<img src="logo.png">
<p> iLeave</p>
</div>
  <meta charset="UTF-8" />
  <title>staffhome</title>
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
          <span class="nav-item">STAFF</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-men  orah"></i>
          <span class="nav-item">DASHBOARD</span>
        </a></li>
        <li><a href="leavehistory.php">
          <i class="fas fa-comment"></i>
          <span class="nav-item" >VIEW LEAVE TYPES</span>
        </a></li>
        <li><a href="empprofile.php">
          <i class="fas fa-database"></i>
          <span class="nav-item">MY PROFILE</span>
        </a></li>
        <li><a href="application.php">
          <i class="fas fa-cog"></i>
          <span class="nav-item">APPLY FOR LEAVE</span>
        </a></li>

        <li><a href="emplogout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>APPLIED LEAVES</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
      <?php       
      session_start();
      
      require('connection.php');
      $cemp=$_SESSION['curemp'];

      $get_data = "SELECT * FROM application ;";
      $esql=mysqli_query($conn,"select Emp_name,Emp_desig,Emp_dept,Emp_email,Emp_phone,employee.Emp_id from
      employee WHERE Emp_id = '$cemp'");
      
      $res = mysqli_query($conn,$get_data);
      $data = mysqli_num_rows($res);

      if($data>0){
        while ($box = mysqli_fetch_assoc($res))
        {
          ?>
           <?php
            while($row=mysqli_fetch_assoc($esql))
            {
              
              ?>
          echo "<div class='card'>

         <h4><?php echo$row['Emp_name']; ?></h4>
          <p><?php echo$row['Emp_desig']; ?></p>
          <p><?php echo$row['Emp_staff']; ?></p>
          <div class='per'>
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
          <button>{$box['Status']}</button>
        </div>";
        }
      }
      else{
        echo "failed";
      }
      <?php
    }

?>
    <?php
    }

?>
    
  </div>
  <h1>LEAVE HISTORY</h1>

  <table class="table">
    <tr>
      <th>Leave Type</th>
      <th>Leaves Taken</th>
      <th>Remaining</th>
    </tr>
    
  <?php 
  $cemp=$_SESSION['curemp'];
  $get_leave_count = "SELECT * from application WHERE Emp_id = '$cemp'";

  $get_count_data = mysqli_query($conn,$get_leave_count);

  if($get_count_data){
    while($data = mysqli_fetch_assoc($get_count_data)){

      $leave_type = $data['type'];
      $sql_count_leave = "SELECT count(type) from application WHERE Emp_id = '$cemp'";

      $sql_count = mysqli_query($conn,$sql_count_leave);

      $count = mysqli_num_rows($sql_count);

      $medical_total = 20 - $count;
      
  
?>
    <tr>
      <td><?php echo $data['type']; ?></td>
      <td>
        <?php echo $count ; 

        ?>
      </td>
      <td><?php 
        if($data['type'] == "medical"){
            echo $medical_total;
        }
      ?></td>
    
    </tr>
 
<?php 
  } 

  ?>
   </table>
</body>
</html>

</div>

    </body>
</html>

