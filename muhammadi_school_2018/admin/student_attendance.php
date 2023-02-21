<?php
session_start();
include "includes/config.php";
include "includes/db.php";
include "includes/function.php";
if(!loggedIn()){
	header("Location:login.php?err=".urlencode("You need to login to View Account !!"));
	exit();
}
?>
<html>
<head></head>
<title>Student Attendance System</title>
<link href="../assets/css/bootstrap.css" rel="stylesheet">
<body style="background-color:rgb(74, 183, 206);"

<div class="container">
		<div class="row">
			<div class="page-header">
            	<center><h1 style="font-family:cursive; color:white;">Student Attendance System</h1></center>
			</div>
	<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				
				<div class="form-group">
                	<label class="control-label col-lg-2" style="color:white;">Select month<span style="color:red">*</span></label>
                    <div class="col-lg-2">
                    	<select class="form-control" name="month" required/>
							  <option>--Select--</option>
							  <option>January</option>
							  <option>February</option>
							  <option>March</option>
							  <option>April</option>
							  <option>May</option>
							  <option>June</option>
							  <option>July</option>
							  <option>August</option>
							  <option>September</option>
							  <option>October</option>
							  <option>November</option>
							  <option>December</option>
                    	</select>
                    </div>
				</div>
				
			<div class="form-group">
                	<label for="name" class="col-lg-2 control-label" style="color:white;">Show Your ID Card To A Scanner</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="student_id" id="barcode" placeholder="Show Your ID Card To A Barcode Scanner" title="Please Show Your Card To The Barcode Scanner" required/>
                    </div>
            </div>
			
			<div class="form-group">
                	<div class="col-lg-offset-2 col-lg-10">
                    	<input type="submit" value="Present" name="time_in" class="btn btn-success"/>
					</div>
			</div>
	</form>
</div>
</div>

<?php

if(isset($_POST["time_in"]))
	{
		$student_id = $_POST["student_id"];
		$month = $_POST["month"];
		
		$insert=mysqli_query($db,"INSERT INTO attendance VALUES
		(
		'$student_id', '$month',
		CURDATE())");
		
		/* header("LOCATION:student_attendance.php");  CURTIME() */
		
		if($insert)
		{
			echo "Student Attendance Added Successfully!";
		}
		
		else{
			echo "Some Error Occured While Adding Detecting A Barcode!";
		}
	}
?>

<!-- <form>

		<div class="container text-center">
			<div class="row">
			<div class="col-xs-2">
				<img class="img-responsive img-circle" src="../images/1.jpg" />
			</div>
			</div>
		</div>
		   
</form> -->

</body>
</html>