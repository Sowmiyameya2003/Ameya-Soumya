<?php
session_start();
$cemp=$_SESSION['curemp'];

include("connection.php");
$sql=mysqli_query($conn,"select App_id,Emp_name,Emp_desig,Emp_dept,Emp_email,Emp_phone,employee.Emp_id from  application 
inner join  employee on application.Emp_id=employee.Emp_id WHERE employee.Emp_id != '$cemp'");

$esql=mysqli_query($conn,"select Emp_name,Emp_desig,Emp_dept,Emp_email,Emp_phone,employee.Emp_id from
employee WHERE Emp_id = '$cemp'");

$get_status = mysqli_query($conn,"select * from application WHERE Emp_id = '$cemp'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<div class="navbar"> 
<img src="logo.png">
<p> iLeave</p>
</div>
  <meta charset="UTF-8" />
  <title>dhhome</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
    
      <ul>
        <li><a href="#" class="logo">
          <span class="nav-item">DEPARTMENT HEAD</span>
        </a></li>
        <li>
          <span class="nav-item">DASHBOARD</span>
        </li>
        <li><a href='dhview.php'>
          <i class="fas fa-comment"></i>
          <span class="nav-item" >VIEW</span>
        </a></li>
        <li><a href="leavehistory.php">
          <i class="fas fa-comment"></i>
          <span class="nav-item" >VIEW LEAVE TYPES</span>
        </a></li>
        <li><a href="empprofile.php">
          <i class="fas fa-database"></i>
          <span class="nav-item">MY PROFILE</span>
        </a></li>
        <li><a href="updaterequests.php">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">UPDATE REQUESTS</span>
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
      <div class="main-down">
        <h1>MY LEAVES</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class='users'>
      <?php

              while($user_status = mysqli_fetch_assoc($get_status)){
                
              ?>
      <?php
            while($row=mysqli_fetch_assoc($esql))
            {
              
              ?>
             
                <div class='card'>
                  <h4><?php echo$row['Emp_name']; ?></h4>
                  <p><?php echo$row['Emp_desig']; ?></p>
                  <p><?php echo$row['Emp_dept']; ?></p>
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
                  <button><?php echo $user_status['Status']; ?></button>
                </div>
            <?php  
            };
            ?>
              <?php
             
            };
            
      
      ?></div>
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

<?php }
} 

?>
 </table>
    
    </section>
    
  </div>
  

</body>
</html>

</div>

    </body>
</html>

