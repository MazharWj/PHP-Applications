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
    <center><h1 style="font-family:cursive; color:#3eaec2;">Update Website Appeal Page</h1></br><h4 style="font-family:cursive; color:#3eaec2;"></h4></center>
  	</hr><center>
	<div class="row">
      <!-- left column -->
        
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
		<div class="form-group">
                	<label for="name" class="control-label col-lg-2">I.D</label>
                    <div class="col-lg-10">
                    	<input type="text" readonly value="1" class="form-control" name="id" id="id" />
                	</div>
                </div>
		
		<div class="form-group">
                	<label for="name" class="control-label col-lg-2">Enter Text</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="appeal_text" required></textarea>
                	</div>
        </div>
		  
		  <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8"></br>
              <input type="submit" class="btn btn-primary" name="appeal_update" value="Save Changes"/>
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel"/></br></br></br>
            </div>
          </div>
		  
        </form>
      </div></center>
  </div>

</hr> </br> 
  
  <?php
	if(isset($_POST["appeal_update"]))
	{	$id = $_POST['id'];
		$appeal_text = $_POST['appeal_text'];
		
		$admin_update= "UPDATE appeal SET appeal_text = '$appeal_text' WHERE id = '$id'";
		
	if ($db->query($admin_update) === TRUE) {
    echo "Appeal Page Updated successfully";
} else {
    echo "Error While Updating Your Information: " . $db->error;
}
	}
?>

<?php include('includes/footer_admin.php'); ?>  
