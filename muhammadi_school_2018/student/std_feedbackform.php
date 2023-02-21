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

<?php include('includes/header_student.php'); ?>  
 
<div class="container">
        	
            <div class="row">
            	<center><h1 style="font-family:cursive; color:#3eaec2;">Student's Feedback Form</h1></center>
            
            <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
			
			<div class="form-group">
            <label class="col-lg-2 control-label">Your Roll No:</label>
            <div class="col-lg-10">
			<?php
			//Fetch ID
			$stdName = $_SESSION['stdusername'];
			$Query = "SELECT * FROM std_registrations WHERE student_name='$stdName'";
			$selectIDQuery = mysqli_query($db,$Query);
			$fetchQuery = mysqli_fetch_array($selectIDQuery);
			?>
			<input class="form-control" type="text" value="<?php echo $fetchQuery['student_id']; ?>" Readonly name="rollno"/>
            </div>
          </div>
			
            	<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Name</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" value="<?php if(isset($_SESSION['stdusername'])){echo $_SESSION['stdusername'];}else{echo $_COOKIE['stdusername'];} ?>" readonly name="name" id="name" required/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Phone Number</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="phoneno" id="phoneno" placeholder="Enter Your Phone Number" title="Please Enter Your Valid Phone Number" required/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Subject</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="subject" id="subject" placeholder="Enter Your Subject For Your Feedback" title="Please Enter Your Subject For Your Feedback" />
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Your Feedback</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="feedback" id="feedback" placeholder="Enter Your Feedback" title="Please Enter Your Feedback"></textarea>
                    </div>
                </div>
				
                <div class="form-group">
                	<div class="col-lg-offset-2 col-lg-10">
                    	<input type="submit" name="submit" value="Submit" id="submit" class="btn btn-success btn-block">
						<input type="reset" name="reset" value="Reset" id="reset" class="btn btn-danger btn-block">
					</div>
                </div>
            </form>
        </div> </div> </br></br>
  
<?php
	if(isset($_POST["submit"]))
	{
		$rollno = $_POST["rollno"];
		$name = $_POST["name"];
		$phoneno = $_POST["phoneno"];
		$subject = $_POST["subject"];
		$feedback = $_POST["feedback"];
		
		$feedbackupload=mysqli_query($db,"INSERT INTO feedback
		(rollno,
		name,
		phoneno,
		subject,
		feedback)
		VALUES
		(
		'$rollno',
		'$name',
		'$phoneno',
		'$subject',
		'$feedback')
		");
		
		if($feedbackupload)
		{
			echo "Your Feedback Has Been Sent Successfully!";
		}
		else{
			echo "Some Error Occured While Sending Your Feedback!";
		}
	}
?>

  
<?php include('includes/footer_student.php'); ?>