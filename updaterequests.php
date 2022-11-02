<?php
session_start();
include("connection.php");

$sql=mysqli_query($conn,"select Status,App_id,Emp_name,Emp_desig,Emp_dept,Emp_email,Emp_phone,employee.Emp_id,app_date,type,star_date,end_date,ldesc from  application 
inner join  employee on application.Emp_id=employee.Emp_id WHERE Status ='pending'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<div class="navbar"> 
<img src="logo.png">
<p> iLeave</p>
</div>
  <meta charset="UTF-8" />
  <title>updaterequest</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <style>
    .act-btns span{
      background:aqua;
      color:crimson;
      border-radius:10px;
      padding:5px;
      letter-spacing:2px;
      border:2px solid black;
    }
    .act-btns2 span{
      padding:5px;

      border:2px solid black;
      border-radius:10px;
      letter-spacing:2px;
right:200px;
position:relative;
      background:yellow;
      color:black;
    }
    .act-btns span:hover{
      
     background:black;
     color:white;
      
    }
    .act-btns2 span:hover{
      background:black;
     color:white;
    }
    .notifi-table thead th{
      
      text-align:center;
      margin-left:200px;
      font-size:1.2rem;
      padding:6px;
      
    }
    .notifi-table tbody td,thead th{
font-size:1.2rem;   

  }
  
  </style>  
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
          <h1 style="width:400px;">Application details</h1>

          <table class="notifi-table">

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
                <th>Status</th>
                <th>Action</th>


                
               
                
              </tr>
            </thead>
            <?php
            while($row=mysqli_fetch_assoc($sql))
            {
                $appid=$row['App_id'];
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
              <td><?php echo$row['Status']; ?></td>
              
              <td class="act-btns"><?php echo"<a href='acceptleave.php?App_id={$appid}'><span>Accept</span></a>"?></td>
     <td class="act-btns2"><?php echo"<a href='denyleave.php?App_id={$appid}'><span>Deny</span></a>"?></td> 

              
            
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