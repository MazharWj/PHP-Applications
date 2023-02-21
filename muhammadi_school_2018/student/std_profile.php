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
 <center><h1 style="font-family:cursive; color:#3eaec2;">Update Profile</h1></center></br></br>
      
      <!-- edit form column -->
      <div class="row">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          Welcome! <strong><?php if(isset($_SESSION['stdusername'])){echo $_SESSION['stdusername'];}else{echo $_COOKIE['stdusername'];} ?></strong> to our School Management System Portal.
        </div>
        <h3>Personal Information</h3>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
		<div class="form-group">
            <label class="col-lg-3 control-label">Your Roll No:</label>
            <div class="col-lg-8">
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
            <label class="col-lg-3 control-label">Your Username:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" Readonly value="<?php if(isset($_SESSION['stdusername'])){echo $_SESSION['stdusername'];}else{echo $_COOKIE['stdusername'];} ?>" name="name">
            </div>
          </div>
		  
		   
          <div class="form-group">
            <label class="col-lg-3 control-label">Email Address:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="password">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-md-3 control-label">Your Contact No:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="contactno">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Father's Contact No.</label>
            <div class="col-lg-8">
			<?php
			//Fetch ID
			$stdName = $_SESSION['stdusername'];
			$Query = "SELECT * FROM std_registrations WHERE student_name='$stdName'";
			$selectIDQuery = mysqli_query($db,$Query);
			$fetchQuery = mysqli_fetch_array($selectIDQuery);
			?>
			<input class="form-control" type="text" value="<?php echo $fetchQuery['student_guardianphonenumber']; ?>" Readonly name="fcontactno"/>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-md-3 control-label">Upload A Profile Picture:</label>
            <div class="col-md-8">
              <input class="form-control" type="file" name="picture">
            </div>
          </div>
		  
		  
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes" name="std_profile">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</hr></br></br>
  
 <?php
	if(isset($_POST["std_profile"]))
	{	
		$rollno 	= 	$_POST['rollno'];
		$name 		= 	$_POST['name'];
		$email		= 	$_POST['email'];
        $password 	= 	$_POST['password'];
		$contactno 	= 	$_POST['contactno'];
		$fcontactno 	= 	$_POST['fcontactno'];
		
		$admin_update= "UPDATE std_registrations SET student_name = '$name', student_email = '$email', student_password = '$password', student_phonenumber = '$contactno', student_guardianphonenumber = '$fcontactno' WHERE student_id = '$rollno'";
	if ($db->query($admin_update) === TRUE) {
    echo "Student Profile Updated successfully";
} else {
    echo "Error While Updating Your Profile: " . $db->error;
}
	}
?>
<?php include('includes/footer_student.php'); ?>  
