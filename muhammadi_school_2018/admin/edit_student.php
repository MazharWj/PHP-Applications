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
  
<br/><br/><br/><br/>
<div class="container">
    <center><h1 style="font-family:cursive; color:#3eaec2;">Update Student Profile</h1><h4 style="font-family:cursive; color:#3eaec2;">By I.D</h4></center>
  	</hr><center>
	<div class="row">
      <!-- left column -->
      
       
        <h3>Student Info</h3>
        
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
		<div class="form-group">
            <label class="col-lg-3 control-label">Student ID:</label>
            <div class="col-lg-8">
			<input class="form-control" type="text" name="student_id"/>
            </div>
          </div>
		
          <div class="form-group">
            <label class="col-lg-3 control-label">Class:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="student_classname">
            </div>
          </div>
          
		  <div class="form-group">
            <label class="col-lg-3 control-label">Group Name:</label>
            <div class="col-lg-8">
			<input class="form-control" type="text" name="student_groupname"/>
            </div>
          </div>
		
          
		  <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="student_name">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="student_password">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="student_email">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Contact Number:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="student_phonenumber">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Parent Contact No:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="student_guardianphonenumber">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Parent NIC:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="guardian_nicno">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="student_address"></br>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" name="admin_update" value="Save Changes"/>
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel"/>
            </div>
          </div>
		  
        </form>
      </div></center>
  </div>

</hr> </br> 
  
  <?php
	if(isset($_POST["admin_update"]))
	{	
		$student_id 	= 	$_POST['student_id'];
		$student_classname 		= 	$_POST['student_classname'];
		$student_groupname		= 	$_POST['student_groupname'];
		$student_name		= 	$_POST['student_name'];
        $student_password 	= 	$_POST['student_password'];
		$student_email 	= 	$_POST['student_email'];
		$student_phonenumber 		= 	$_POST['student_phonenumber'];
		$student_guardianphonenumber		= 	$_POST['student_guardianphonenumber'];
        $guardian_nicno 	= 	$_POST['guardian_nicno'];
		$student_address 	= 	$_POST['student_address'];
		
		
		$admin_update= "UPDATE std_registrations SET student_classname = '$student_classname', student_groupname = '$student_groupname', student_name = '$student_name', student_password = '$student_password', student_email = '$student_email', student_phonenumber = '$student_phonenumber', student_guardianphonenumber = '$student_guardianphonenumber', guardian_nicno = '$guardian_nicno', student_address = '$student_address' WHERE student_id = '$student_id'";
		
	if ($db->query($admin_update) === TRUE) {
    echo "Student Updated successfully";
} else {
    echo "Error While Updating Your Information: " . $db->error;
}
	}
?>

  
  
<?php include('includes/footer_admin.php'); ?>  
