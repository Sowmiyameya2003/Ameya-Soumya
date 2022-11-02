<?php
SESSION_start();
include("connection.php");
$sql=mysqli_query($conn,"select App_id,Emp_name,Emp_desig,Emp_dept,Emp_email,Emp_phone,employee.Emp_id from  application 
inner join  employee on application.Emp_id=employee.Emp_id");
?>
<!DOCTYPE HTML>
<html>
	<title>leavehistory</title>
		<head>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "LEAVE TYPES - 2022"
	},
	data: [{
		type: "pie",
		startAngle: 500,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: 32.50, label: "medical"},
			{y: 17.31, label: "casual"},
			{y: 7.06, label: "half day"},
			{y: 4.91, label: "paid"},
			{y: 9.45, label: "maternity"},
			{y: 18.26, label: "paternity"},
			{y: 2.00, label: "bereavement"},
			{y: 7.50, label: "marriage"},
		]
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 600px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>