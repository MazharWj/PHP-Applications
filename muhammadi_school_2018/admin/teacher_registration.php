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
 		
	<div class="container">
        	
            <div class="row">
			<div class="page-header"></br></br></br>
			<center><h2 style="font-family:cursive; color:#3eaec2;">Teacher Registration Form</h2></center>
            </div>
            <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            	<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Teacher I.D</label>
                    <div class="col-lg-10">
                    	<input type="tel" class="form-control" name="teacher_id" id="teacher_id" placeholder="Enter Teacher's ID Number" title="Please Enter Teacher's ID Number" required/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label class="control-label col-lg-2">Class<span style="color:red">*</span></label>
                    <div class="col-lg-10">
                    	<select class="form-control" name="teacher_class">
                    		<option value="">~~SELECT~~</option>
							<option>K.G 1</option>
							<option>K.G 2</option>
							<option>Montessari 1</option>
							<option>Montessari 2</option>
							<option>One</option>
							<option>Two</option>
							<option>Three</option>
							<option>Four</option>
							<option>Five</option>
							<option>Six</option>
							<option>Seven</option>
							<option>Eight</option>
							<option>Ninth</option>
							<option>Matric</option>
                    	</select>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Teacher's Email Address</label>
                    <div class="col-lg-10">
                    	<input type="email" class="form-control" name="teacher_email" id="teacher_email" placeholder="Enter Teacher's Email Address" title="Please Enter Teacher's Email Address" required/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Teacher's Name</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="teacher_name" id="teacher_name" placeholder="Enter Teacher's Name" title="Please Enter Teacher's Name" required/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Teacher's Password</label>
                    <div class="col-lg-10">
                    	<input type="password" class="form-control" name="teacher_password" id="teacher_password" placeholder="Enter Teacher's Password" title=" Please Enter Teacher's Password" required/>
                    </div>
                </div>
				
				
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Teacher's Contact No.</label>
                    <div class="col-lg-10">
                    	<input type="tel" class="form-control" name="teacher_contactno" id="teacher_contactno" placeholder="Enter Teacher's Contact Number" title="Please Enter Teacher's Contact Number" required/>
                    </div>
                </div>
				
				
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Teacher's Picture</label>
                    <div class="col-lg-10">
                    	<input type="file" class="form-control" name="teacher_picture" id="teacher_picture" placeholder="Enter Teacher's Picture" title="Please Enter Teacher's Picture"/>
                    </div>
                </div>
				
				
                <div class="form-group">
                	<div class="col-lg-offset-2 col-lg-10">
                    	<input type="submit" name="submit" value="Submit" id="submit" class="btn btn-success btn-block">
						<input type="reset" name="reset" value="Reset" id="reset" class="btn btn-danger btn-block">
					</div>
                </div>
            </form>
        </div></div></br></br>
	
	
	<?php
		
	if(isset($_POST["submit"]))
	{
		$teacher_id = $_POST["teacher_id"];
		$teacher_class = $_POST["teacher_class"];
		$teacher_email = $_POST["teacher_email"];
		$teacher_name = $_POST["teacher_name"];
		$teacher_password = $_POST["teacher_password"];
		$teacher_contactno = $_POST["teacher_contactno"];
		//$image = $_POST["image"];
		
		$adminupload=mysqli_query($db,"INSERT INTO teacher_registration
		(id_no,
		class,
		email,
		user_name,
		password,
		contact_no
		)
		VALUES
		(
		'$teacher_id',
		'$teacher_class',
		'$teacher_email',
		'$teacher_name',
		'$teacher_password',
		'$teacher_contactno')
		");
		
		if($adminupload)
		{
			echo "New Teacher Added Successfully!";
		}
		else{
			echo "Some Error Occured While Adding A New Teacher!";
		}
	}
?>
  
<?php include('includes/footer_admin.php'); ?>  
