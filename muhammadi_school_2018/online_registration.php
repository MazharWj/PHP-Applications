<?php
include "includes/config.php";
include "includes/db.php";
include "includes/function.php";
?>

<?php include('includes/header.php') ?>

<div class="container">
        	
            <div class="page-header">
            	<center><h1>Online Registration Form</h1></center>
            </div>
            <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            	<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Name</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" title="Please Enter Your Name" required/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Email Address</label>
                    <div class="col-lg-10">
                    	<input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email Address" title="Please Enter Your Valid Email Address" required/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Phone Number</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="contact_no" id="email" placeholder="Enter Your Phone Number" title="Please Enter Your Valid Phone Number" required/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Your Question Or Any Query</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="ques" id="ques" placeholder="Enter Your Question If Any" title="Please Enter Question Or Query If Any"/>
                    </div>
                </div>
				
				<div class="form-group">
                	<div class="col-lg-offset-2 col-lg-10">
                    	<input type="submit" name="submit" value="Submit" id="submit" class="btn btn-success btn-block">
						<input type="reset" name="reset" value="Reset" id="reset" class="btn btn-danger btn-block">
					</div>
                </div>
            </form>
        </div>  
  

  <?php
		
	
	if(isset($_POST["submit"]))
	{
		$name = $_POST["name"];
		$email = $_POST["email"];
		$contact_no = $_POST["contact_no"];
		$ques = $_POST["ques"];
		
		$online_registration=mysqli_query($db,"INSERT INTO online_registration
		(name,
		email,
		contact_no,
		ques
		)
		VALUES
		(
		'$name',
		'$email',
		'$contact_no',
		'$ques')
		");
		
		if($online_registration)
		{
			echo "Your Online Registration is completed </b> We will contact you soon. </b> Thankyou!";
		}
		else{
			echo "Some Error Occured! For further details call us.";
		}
	}
?>
  
  
  
  
  

<?php include('includes/footer.php') ?>