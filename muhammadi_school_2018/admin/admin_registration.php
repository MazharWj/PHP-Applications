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
        	
            <div class="row">
			<div class="page-header"></br></br></br>
			<center><h2 style="font-family:cursive; color:#3eaec2;">Administrator Registration Form</h2></center>
            </div>
            <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            	<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Admin I.D</label>
                    <div class="col-lg-10">
                    	<input type="tel" class="form-control" name="admin_id" id="id" placeholder="Enter Administrator's Roll Number" title="Please Enter Administrator's Roll Number" required/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Admin Name</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="admin_name" id="name" placeholder="Enter Administrator's Name" title="Please Enter Administrator's Name" required/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Admin Password</label>
                    <div class="col-lg-10">
                    	<input type="password" class="form-control" name="admin_password" id="password" placeholder="Enter Administrator's Password" title="Enter Administrator's Password" required/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Admin Contact No.</label>
                    <div class="col-lg-10">
                    	<input type="tel" class="form-control" name="admin_contactno" id="contactno" placeholder="Enter Administrator's Contact Number" title="Please Enter Administrator's Contact Number" required/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Admin Email Address</label>
                    <div class="col-lg-10">
                    	<input type="email" class="form-control" name="admin_emailaddress" id="email" placeholder="Enter Administrator's Email Address" title="Please Enter Administrator's Email Address" required/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Admin Picture</label>
                    <div class="col-lg-10">
                    	<input type="file" class="form-control" name="admin_picture" id="picture" placeholder="Enter Administrator's Picture" title="Please Enter Administrator's Picture" required/>
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
		$id = $_POST["admin_id"];
		$name = $_POST["admin_name"];
		$password = $_POST["admin_password"];
		$contactno = $_POST["admin_contactno"];
		$emailaddress = $_POST["admin_emailaddress"];
		$picturename = $_POST["admin_picturename"];
		$picture = $_POST["admin_picture"];
		
		$adminupload=mysqli_query($db,"INSERT INTO admin_registrations
		(id,
		admin_username,
		admin_password,
		admin_phonenumber,
		admin_email,
		picture_name,
		picture
		)
		VALUES
		(
		'$id',
		'$name',
		'$password',
		'$contactno',
		'$emailaddress',
		'$picturename',
		'$picture')
		");
		
		if($adminupload)
		{
			echo "New Admin Added Successfully!";
		}
		else{
			echo "Some Error Occured While Adding A New Admin!";
		}
	}
?>
  
<?php include('includes/footer_admin.php'); ?>  
