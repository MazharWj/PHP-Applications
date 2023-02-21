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

<div class="container">
        	
            <div class="header text-center"></br></br></br></br></br>
            	<h2 style="font-family:cursive; color:#3eaec2;">Home Work Upload</h2>
            </div></br>
            <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
			
			<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Class:</label>
                    <div class="col-lg-10">
					<?php
			//Fetch ID
			$adminName = $_SESSION['teacherusername'];
			$Query = "SELECT * FROM teacher_registration WHERE user_name='$adminName'";
			$selectIDQuery = mysqli_query($db,$Query);
			$fetchQuery = mysqli_fetch_array($selectIDQuery);
			?>
			<input type="text" value="<?php echo $fetchQuery['class']; ?>" readonly name="class" class="form-control"/>
                    </div>
                </div>
			
			<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Date:</label>
                    <div class="col-lg-10">
                    	<input type="date" name="date" class="form-control"/>
                    </div>
                </div>
			
            	<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">English:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="english" id="english" placeholder="Enter English Home Work" title="Please Enter English Home Work"></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Urdu:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="urdu" id="urdu" placeholder="Enter Urdu Home Work" title="Please Enter Urdu Home Work"></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Sindhi:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="sindhi" id="sindhi" placeholder="Enter Sindhi Home Work" title="Please Enter Sindhi Home Work"></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Mathematics:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="math" id="math" placeholder="Enter Mathematics Home Work" title="Please Enter Mathematics Home Work"></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Science:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="science" id="science" placeholder="Enter Science Home Work" title="Please Enter Science Home Work"></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Islamiat:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="islamiat" id="islamiat" placeholder="Enter Islamiat Home Work" title="Please Enter Islamiat Home Work"></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">S.S.T:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="sst" id="sst" placeholder="Enter Social Studies Home Work" title="Please Enter Social Studies Home Work"></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Computer:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="computer" id="computer" placeholder="Enter Computer Home Work" title="Please Enter Computer Home Work"></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Biology:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="biology" id="biology" placeholder="Enter Biology Home Work" title="Please Enter Biology Home Work"></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Chemistry:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="chemistry" id="chemistry" placeholder="Enter Chemistry Home Work" title="Please Enter Chemistry Home Work"></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Physics:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="physics" id="physics" placeholder="Enter Physics Home Work" title="Please Enter Physics Home Work"></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">General Knowledge:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="gk" id="gk" placeholder="Enter General Knowledge Home Work" title="Please Enter General Knowledge Home Work"></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">General Knowledge Oral:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="gk_oral" id="gk_oral" placeholder="Enter General Knowledge Oral Home Work" title="Please Enter General Knowledge Oral Home Work"></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Art:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="art" id="art" placeholder="Enter Art Home Work" title="Please Enter Art Home Work"></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">P.S.T:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="pst" id="pst" placeholder="Enter Pakistan Studies Home Work" title="Please Enter Pakistan Studies Home Work"></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Winter Vacation:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="winter_vacation" id="winter_vacation" placeholder="Enter Winter Vacation Home Work" title="Please Enter Winter Vacation Home Work"></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Summer Vacation:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="summer_vacation" id="summer_vacation" placeholder="Enter Summer Vacation Home Work" title="Please Enter Summer Vacation Home Work"></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Other:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="other" id="other" placeholder="If Any Type Of Other Work Available So Write Down Here" title="If Any Type Of Other Work Available So Write Down Here"></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                	<div class="col-lg-offset-2 col-lg-10">
                    	<input type="submit" name="submit" value="Upload Home Work To Students Profile" id="submit" class="btn btn-success btn-block">
						<input type="reset" name="reset" value="Reset Form" id="reset" class="btn btn-danger btn-block">
					</div>
                </div>
				
			</form>
</div>			

<?php
	if(isset($_POST["submit"])){
		$class = $_POST["class"];
		$date = $_POST["date"];
		$english = $_POST["english"];
		$urdu = $_POST["urdu"];
		$sindhi = $_POST["sindhi"];
		$math = $_POST["math"];
		$science = $_POST["science"];
		$islamiat = $_POST["islamiat"];
		$sst = $_POST["sst"];
		$computer = $_POST["computer"];
		$biology = $_POST["biology"];
		$chemistry = $_POST["chemistry"];
		$physics = $_POST["physics"];
		$gk = $_POST["gk"];
		$gk_oral = $_POST["gk_oral"];
		$art = $_POST["art"];
		$pst = $_POST["pst"];
		$winter_vacation = $_POST["winter_vacation"];
		$summer_vacation = $_POST["summer_vacation"];
		$other = $_POST["other"];
		
$kgupload=mysqli_query($db,"INSERT INTO homework(
class, 
date, 
english, 
urdu, 
sindhi, 
math,
science, 
islamiat, 
sst, 
computer, 
biology, 
chemistry,
physics, 
gk, 
gk_oral, 
art, 
pst, 
winter_vacation,
summer_vacation, 
other
)VALUES  ('$class', '$date', '$english', '$urdu', '$sindhi', '$math', '$science', '$islamiat', '$sst', '$computer', '$biology', '$chemistry', '$physics', '$gk', '$gk_oral', '$art', '$pst', '$winter_vacation', '$summer_vacation', '$other')");
			
			
		if($kgupload)
		{
			echo "Home Work Uploaded Successfully!";
		}
		else{
			echo "Some Error Occured While Uploading A Home Work!";
		}
			
		}
	
?>
				
<?php include('includes/footer_teacher.php'); ?>  