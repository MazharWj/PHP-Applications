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
    <center><h1 style="font-family:cursive; color:#3eaec2;">Update Admin Profile</h1><h4 style="font-family:cursive; color:#3eaec2;">By I.D</h4></center>
  	</hr><center>
	<div class="row">
      <!-- left column -->
      <h3>Admin Info</h3>
        
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
		<div class="form-group">
            <label class="col-lg-3 control-label">Admin ID:</label>
            <div class="col-lg-8">
			<input class="form-control" type="text" name="id"/>
            </div>
          </div>
		
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="admin_username">
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="admin_password">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-lg-3 control-label">Contact Number:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="admin_phonenumber">
            </div>
          </div>
        
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="admin_email">
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
		$id 				= 	 $_POST['id'];
		$admin_username 	=	 $_POST['admin_username'];
		$admin_password		= 	 $_POST['admin_password'];
		$admin_phonenumber	= 	 $_POST['admin_phonenumber'];
        $admin_email 		= 	 $_POST['admin_email'];
		
		$admin_update= "UPDATE admin_registrations SET admin_username = '$admin_username', admin_password = '$admin_password', admin_phonenumber = '$admin_phonenumber', admin_email = '$admin_email' WHERE id = '$id'";
		
	if ($db->query($admin_update) === TRUE) {
    echo "Admin Updated successfully";
} else {
    echo "Error While Updating Your Information: " . $db->error;
}
	}
?>

<?php include('includes/footer_admin.php'); ?>  
