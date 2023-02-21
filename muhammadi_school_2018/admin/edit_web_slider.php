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
 
 <div class="header text-center">
			<h1 style="font-family:cursive; color:#3eaec2;">Adding Slider Image To Website</h1>
            	</br>
            </div>
 
 <div class="row">
  <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
   
   <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Image I.D</label>
            <div class="col-lg-10">
				 <select class="form-control" name="slider_id">
                    		<option>&nbsp;</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							
                    	</select>
    </div>
	</div>
   
   <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Select Image.</label>
            <div class="col-lg-10">
				 
				 <input type="file" class="form-control" name="user_image"/>
    </div>
	</div>
    
	<div class="form-group">
	<label for="name" class="col-lg-2 control-label"></label>
    <div class="col-lg-10">
    <input type="submit" name="submit" value="Upload" class="btn btn-success btn-block"/>
    </div>
	</div>
</form>
 </div>
 </div>
 
 
 
 
  
  </br></br></br></br></br>
<?php include('includes/footer_admin.php'); ?>