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
    <center><h1 style="font-family:cursive; color:#3eaec2;">Update Teacher Profile</h1><h4 style="font-family:cursive; color:#3eaec2;">By I.D</h4></center>
  	</hr><center>
	<div class="row">
      <!-- left column -->
      <h3>Teacher Info</h3>
        
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
		<div class="form-group">
            <label class="col-lg-3 control-label">Teacher ID:</label>
            <div class="col-lg-8">
			<input class="form-control" type="text" name="id_no"/>
            </div>
          </div>
		
          <div class="form-group">
            <label class="col-lg-3 control-label">Class:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="class">
            </div>
          </div>
        
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="user_name">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="password">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Contact Number:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="contact_no">
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
		$id_no 	= 	$_POST['id_no'];
		$class 		= 	$_POST['class'];
		$email		= 	$_POST['email'];
		$user_name		= 	$_POST['user_name'];
        $password 	= 	$_POST['password'];
		$contact_no 	= 	$_POST['contact_no'];
		
		$admin_update= "UPDATE teacher_registration SET class = '$class', email = '$email', user_name = '$user_name', password = '$password', contact_no = '$contact_no' WHERE id_no = '$id_no'";
		
	if ($db->query($admin_update) === TRUE) {
    echo "Teacher Updated successfully";
} else {
    echo "Error While Updating Your Information: " . $db->error;
}
	}
?>

<?php include('includes/footer_admin.php'); ?>  
