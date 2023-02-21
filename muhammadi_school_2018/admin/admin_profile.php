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
    <center><h1 style="font-family:cursive; color:#3eaec2;">Update Profile</h1></center>
  	<hr>
	<div class="row">
      <!-- left column -->
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          Welcome! <strong><?php if(isset($_SESSION['adminusername'])){echo $_SESSION['adminusername'];}else{echo $_COOKIE['adminusername'];} ?></strong> to School Management System Portal.
        </div>
        <h3>Personal Info</h3>
        
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
		<div class="form-group">
            <label class="col-lg-3 control-label">ID:</label>
            <div class="col-lg-8">
			
			<?php
			//Fetch ID
			$adminName = $_SESSION['adminusername'];
			$Query = "SELECT * FROM admin_registrations WHERE admin_username='$adminName'";
			$selectIDQuery = mysqli_query($db,$Query);
			$fetchQuery = mysqli_fetch_array($selectIDQuery);
			?>
              <input class="form-control" type="text" value="<?php echo $fetchQuery['id']; ?>" readonly name="admin_id"/>
            </div>
          </div>
		
          <div class="form-group">
            <label class="col-lg-3 control-label">Your Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php if(isset($_SESSION['adminusername'])){echo $_SESSION['adminusername'];}else{echo $_COOKIE['adminusername'];} ?>" name="name">
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
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" name="admin_update" value="Save Changes"/>
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel"/>
            </div>
          </div>
		  
        </form>
      </div>
  </div>
</div>
<hr>  
  
  <?php
	if(isset($_POST["admin_update"]))
	{	
		$admin_id 	= 	$_POST['admin_id'];
		$name 		= 	$_POST['name'];
		$email		= 	$_POST['email'];
        $password 	= 	$_POST['password'];
		
		
		$admin_update= "UPDATE admin_registrations SET admin_username = '$name', admin_email = '$email', admin_password = '$password' WHERE id = '$admin_id'";
		
	if ($db->query($admin_update) === TRUE) {
    echo "Admin Updated successfully";
} else {
    echo "Error While Updating Your Information: " . $db->error;
}
	}
?>

  
  
<?php include('includes/footer_admin.php'); ?>  
