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
<?php include('includes/header_admin.php'); ?>
 <body>
	<div class="container">
        	</br></br></br></br>
            <div class="header text-center">
			<h1 style="font-family:cursive; color:#3eaec2;">Fees Payment Form</h1>
            	</br>
            </div>
			
            <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
			
			<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Reciept No.</label>
                    <div class="col-lg-10">
			
					<input type="text" class="form-control" name="recieptnoc" id="recieptno"/>
                    </div>
                </div>
			
			<div class="form-group">
                	<label class="control-label col-lg-2">Institute</label>
                    <div class="col-lg-10">
                    	<select class="form-control" name="institutec">
                    		<option>Muhammadi The Educational System</option>
                    	</select>
                    </div>
                </div>
				
				<div class="form-group">
                	<label class="control-label col-lg-2">Branch Name</label>
                    <div class="col-lg-10">
                    	<select class="form-control" name="branch_namec">
                    		<option>Gulzare Hijri</option>
                    	</select>
                    </div>
                </div>
				
				<div class="form-group">
                	<label class="control-label col-lg-2">Payment Type</label>
                    <div class="col-lg-10">
                    	<select class="form-control" name="payment_typec">
                    		<option>Cash</option>
							<option>Credit / Debit Card</option>
                    	</select>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Student I.D</label>
                    <div class="col-lg-10">
                    	<input type="tel" class="form-control" name="student_idc" id="student_id" placeholder="Enter Student's Roll No." title="Please Enter Student's Roll Number" required/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Depositor's Name</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="depositor_namec" id="depositor_name" placeholder="Enter Depositor Name" title="Please EEnter Depositor Name" required/>
                    </div>
                </div>
				
			<!-- <div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Payment Date | Time</label>
                    <div class="col-lg-10">
                    	<input type="date" class="form-control" name="payment_date" id="payment_date" placeholder="Enter Payment Date &amp; Time" title="Please Enter Payment Date &amp; Time" required/>
                    </div>
                </div> -->
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Admission Fees</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="admission_feec" id="admission_fee" placeholder="Enter Admission Fees" title="Please Enter The Admission Fee Of Student"/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Monthly Fees</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="monthly_feec" id="monthly_fee" placeholder="Enter Monthly Fees" title="Please Enter The Monthly Fee Of Student"/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Annual Fees</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="annual_feec" id="annual_fee" placeholder="Enter Fees Of Annual" title="Please Enter Fees Of Annual"/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Lab Fees / Activity Charges</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="lab_feec" id="lab_fee" placeholder="Enter Fees Of Lab Or Activity Charges" title="Please Enter Fees Of Lab Or Activity Charges"/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Course Fees</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="course_feec" id="course_fee" placeholder="Enter Fees Of Courses" title="Please Enter Fees Of Courses"/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Uniform Fees</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="uniform_feec" id="uniform_fee" placeholder="Enter Uniform Fees" title="Please Enter Fees Of Uniform"/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Stationary Fees</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="stationary_feec" id="stationary_fee" placeholder="Enter Stationary Fees" title="Please Enter Fees Of Stationary"/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">ID Card Fees</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="idcard_feec" id="idcard_fee" placeholder="Enter ID Card Fees" title="Please Enter Fees Of I.D Card"/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Cafeteria Payment</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="cafeteria_paymentc" id="cafeteria_payment" placeholder="Enter Payment Of Cafeteria" title="Please Enter The Payment Of Cafeteria"/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Event Fees</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="event_feesc" id="event_fees" placeholder="Enter Payment Of Event" title="Please Enter Payment Of An Event"/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Tution Fees</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="tution_feesc" id="tution_fees" placeholder="Enter Fees Of Tution" title="Please Enter The Fees Of Tution"/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Fine Fees</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="fine_feesc" id="fine_fees" placeholder="Enter Charges Of Fine" title="Please Enter The Charges Of A Fine"/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Other Fees</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="other_feesc" id="other_fees" placeholder="Enter Another Type Of Payment" title="Please Enter Another Type Of Payment"/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Comments</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="commentsc" id="comments" placeholder="Enter Comments If Any" title="Please Comments If Any!"/>
                    </div>
                </div>
				
				<div class="form-group">
                	<div class="col-lg-offset-2 col-lg-10">
                    	<input type="submit" name="submit" value="Submit Fee" id="submit" class="btn btn-success btn-block">
						<input type="reset" name="reset" value="Reset Form" id="reset" class="btn btn-danger btn-block">
					</div>
                </div>
            </form>
        </div>
	
	<?php
	if(isset($_POST["submit"]))
	{
		$recieptnoc = $_POST["recieptnoc"];
		$institutec = $_POST["institutec"];
		$branch_namec = $_POST["branch_namec"];
		$payment_typec = $_POST["payment_typec"];
		$student_idc = $_POST["student_idc"];
		$depositor_namec = $_POST["depositor_namec"];
		//$payment_date = $_POST["payment_date"];
		$admission_feec = $_POST["admission_feec"];
		$monthly_feec = $_POST["monthly_feec"];
		$annual_feec = $_POST["annual_feec"];
		$lab_feec = $_POST["lab_feec"];
		$course_feec = $_POST["course_feec"];
		$uniform_feec = $_POST["uniform_feec"];
		$stationary_feec = $_POST["stationary_feec"];
		$idcard_feec = $_POST["idcard_feec"];
		$cafeteria_paymentc = $_POST["cafeteria_paymentc"];
		$event_feesc = $_POST["event_feesc"];
		$tution_feesc = $_POST["tution_feesc"];
		$fine_feesc = $_POST["fine_feesc"];
		$other_feesc = $_POST["other_feesc"];
		$commentsc = $_POST["commentsc"];
		
		$fees_payment=mysqli_query($db,"INSERT INTO fees
		(recieptno,
		institute,
		branch_name,
		payment_type,
		student_id,
		depositor_name,
		payment_date,
		admission_fees,
		monthly_fee,
		annual_fee,
		lab_fee,
		course_fee,
		uniform_fee,
		stationary_fee,
		idcard_fee,
		cafeteria_payment,
		event_fees,
		tution_fees,
		fine_fees,
		other_fees,
		comments
		)
		VALUES
		(
		'$recieptnoc',
		'$institutec',
		'$branch_namec',
		'$payment_typec',
		'$student_idc',
		'$depositor_namec',
		now(),
		'$admission_feec',
		'$monthly_feec',
		'$annual_feec',
		'$lab_fee',
		'$course_feec',
		'$uniform_feec',
		'$stationary_feec',
		'$idcard_feec',
		'$cafeteria_paymentc',
		'$event_feesc',
		'$tution_feesc',
		'$fine_feesc',
		'$other_feesc',
		'$commentsc')
		");
		
		if($fees_payment)
		{
			echo "Fees Submit Successfully!";
		}
		else{
			echo "Some Error Occured While Submitting A Fees!";
		}
	}
?>
  
<?php include('includes/footer_admin.php'); ?>  