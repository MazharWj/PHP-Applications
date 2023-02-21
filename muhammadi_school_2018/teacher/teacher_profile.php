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
<?php include('includes/header_teacher.php'); ?>  
  
<br/><br/><br/><br/>
<div class="container">
    <center><h1 style="font-family:cursive; color:#3eaec2;">Update Profile</h1></center>
  	</hr>
	<div class="row">
      <!-- left column -->
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          Welcome! <strong><?php if(isset($_SESSION['teacherusername'])){echo $_SESSION['teacherusername'];}else{echo $_COOKIE['teacherusername'];} ?></strong> to School Management System Portal.
        </div>
        <h3>Personal Info</h3>
        
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
		<div class="form-group">
            <label class="col-lg-3 control-label">ID:</label>
            <div class="col-lg-8">
			
			<?php
			//Fetch ID
			$adminName = $_SESSION['teacherusername'];
			$Query = "SELECT * FROM teacher_registration WHERE user_name='$adminName'";
			$selectIDQuery = mysqli_query($db,$Query);
			$fetchQuery = mysqli_fetch_array($selectIDQuery);
			?>
              <input class="form-control" type="text" value="<?php echo $fetchQuery['id_no']; ?>" readonly name="teacher_id"/>
            </div>
          </div>
		
		<div class="form-group">
            <label class="col-lg-3 control-label">Class:</label>
            <div class="col-lg-8">
			
			<?php
			//Fetch ID
			$adminName = $_SESSION['teacherusername'];
			$Query = "SELECT * FROM teacher_registration WHERE user_name='$adminName'";
			$selectIDQuery = mysqli_query($db,$Query);
			$fetchQuery = mysqli_fetch_array($selectIDQuery);
			?>
              <input class="form-control" type="text" value="<?php echo $fetchQuery['class']; ?>" readonly name="teacher_class"/>
            </div>
          </div>
		
			<div class="form-group">
            <label class="col-lg-3 control-label">Email Address:</label>
            <div class="col-lg-8">
			<?php
			//Fetch ID
			$adminName = $_SESSION['teacherusername'];
			$Query = "SELECT * FROM teacher_registration WHERE user_name='$adminName'";
			$selectIDQuery = mysqli_query($db,$Query);
			$fetchQuery = mysqli_fetch_array($selectIDQuery);
			?>
              <input class="form-control" type="text" value="<?php echo $fetchQuery['email']; ?>" name="teacher_email">
            </div>
          </div>
		
          <div class="form-group">
            <label class="col-lg-3 control-label">Your Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php if(isset($_SESSION['teacherusername'])){echo $_SESSION['teacherusername'];}else{echo $_COOKIE['teacherusername'];} ?>" name="teacher_name">
            </div>
          </div>
          
		  <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="teacher_password">
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
</hr>  
  
  <?php
	if(isset($_POST["admin_update"]))
	{	
		
		$teacher_class 		= 	$_POST['teacher_class'];
		$teacher_email		= 	$_POST['teacher_email'];
		$teacher_name		= 	$_POST['teacher_name'];
        $teacher_password 	= 	$_POST['teacher_password'];
		$teacher_id = 	$_POST['teacher_id'];
		
		$admin_update= "UPDATE teacher_registration SET class = '$teacher_class', email = '$teacher_email', user_name = '$teacher_name', password = '$teacher_password' WHERE id_no = '$teacher_id'";
		
	if ($db->query($admin_update) === TRUE) {
    echo "Teacher's Profile Updated successfully";
} else {
    echo "Error While Updating Your Information: " . $db->error;
}
	}
?>

</br>
<?php include('includes/footer_teacher.php'); ?>  
