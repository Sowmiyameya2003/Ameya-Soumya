<?php
session_start();
include("connection.php");
   if(isset($_POST['submit']))
   {
    $eid=$_POST['eid'];  
    $adate=$_POST['adate'] ;        
   $ltype=$_POST['type'];
   $lstart=$_POST['lstart'];
   $lend=$_POST['lend'];
   $ldesc=$_POST['ldesc'];
   $sql="insert into application(Emp_id,app_date,type,star_date,end_date,ldesc)
   values('$eid','$adate','$ltype','$lstart','$lend','$ldesc');";
   $data=mysqli_query($conn,$sql);
   if($data)
   {
   echo "inserted successfully";
   }
} 

?>
<html>
    <title>application form</title>
    <body style="background: #cdebf5;">
<form id="bootstrapForm" method="POST">
        <h2>Leave Application Form<br></h2>
        <fieldset>
        <legend>Employee Id</legend>
            <input type="text" name="eid"  class="form-control" required></textarea>
    </fieldset>
    <fieldset>
        <legend>Leave applied on </legend>
            <input type="date" name="adate" placeholder="8/23/2019" class="form-control" required>
    </fieldset>
        <fieldset>
        <legend>Type of leave requested</legend>
        
                <label>
                    <input type="radio" name="type" value="CasualLeave">
                    Casual Leave
                </label><br>
            
                <label>
                    <input type="radio" name="type" value="Halfday" required>
                    Half day Leave
                </label><br>
            
                <label>
                    <input type="radio" name="type" value="Maternity/Paternity" required>
                    Maternity/Paternity Leave
                </label><br>
        
                <label>
                    <input type="radio" name="type" value="Medical" required>
                    Medical Leave
                </label><br>
            
                <label>
                    <input type="radio" name="type" value="Bereavement" required>
                    Bereavement Leave
                </label><br>
        
                <label>
                    <input type="radio" name="type" value="Earned/vacation/privileged" required>
                    Earned/vacation/privileged Leave
                </label><br>
            
                <label>
                    <input type="radio" name="type" value="Timoff" required>
                    Time off without pay
                </label><br>
            
            
                <label>
                    <input type="radio" name="type" value="Marriage" required>
                    Marriage Leave
                </label>
    </fieldset>
    
    <fieldset>
        <legend>Start Date</legend>
            <input type="date" name="lstart" placeholder="8/23/2019" class="form-control" required>
    </fieldset>
    
    <fieldset>
        <legend>End Date</legend>
            <input type="date" name="lend" placeholder="8/23/2019" class="form-control" required>
    </fieldset>
    
    <fieldset>
        <legend>Description on leave</legend>
            <textarea name="ldesc"  class="form-control" required></textarea>
</fieldset>
    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
</form>
</div>
</div>
</div>
</div>
<script>
$('#bootstrapForm').submit(function (event) {
    event.preventDefault()
    var extraData = {}
    {
        var dateField = $("#adate_date").val()
        var timeField = $("#adate_time").val()
        let d = new Date(dateField)
        if (!isNaN(d.getTime())) {
            extraData["entry.adate_year"] = d.getFullYear()
            extraData["entry.adate_month"] = d.getMonth() + 1
            extraData["entry.adate_day"] = d.getUTCDate()
        }
        }
    
    {
        /* Parsing input date id=1403025287 */
        var dateField = $("#lstart_date").val()
        var timeField = $("#lstart_time").val()
        let d = new Date(dateField)
        if (!isNaN(d.getTime())) {
            extraData["entry.lstart_year"] = d.getFullYear()
            extraData["entry.lstart_month"]= d.getMonth() + 1
            extraData["entry.lstart_day"] = d.getUTCDate()
        }
       
    }
    {
        /* Parsing input date id=1403025287 */
        var dateField = $("#lend_date").val()
        var timeField = $("#lend_time").val()
        let d = new Date(dateField)
        if (!isNaN(d.getTime())) {
            extraData["entry.lend_year"] = d.getFullYear()
            extraData["entry.lend_month"] = d.getMonth() + 1
            extraData["entry.lend_day"] = d.getUTCDate()
        }
       
    }
}
</script>
</body>
</html>