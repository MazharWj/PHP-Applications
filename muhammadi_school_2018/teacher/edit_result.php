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
			 

  <script>
  $(function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  });
  
  $(function() {
    $( "#dialog-message" ).dialog({
      modal: true,
      buttons: {
        Ok: function() {
          $( this ).dialog( "close" );
        }
      }
    });
  });
  
  </script>

</head>

<body>

<div class="container">
<div class="row">
<center> </br></br></br></br></br></br>
<h2 style="font-family:cursive; color:#3eaec2;"><label>Update Student Result</label></h2>

<h4 style="font-family:cursive; color:#3eaec2;"><label>Edit Student Result By I.D: <em>You Should Upload All Of the Result</em></label></h4></br></br>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<div class="col-md-12" style="overflow-x: auto">

<table class="table table-bordered" style="width:auto" border="2" align="center">
<tr><td><label>Enter Roll Number: <em>(Mandatory)</em></label></td>
<td><label>Class:</label></td>
<td><label>Status:</label></td>
<td><label>English Marks:</label></td>
<td><label>Urdu Marks</label></td>
<td><label>Sindhi Marks</label></td>
<td><label>Maths Marks</label></td>
<td><label>Science Marks</label></td>
<td><label>Islamiat Marks 1</label></td>
<td><label>S.S.T Marks 2</label></td>
<td><label>Computer Marks:</label></td>
<td><label>Biology Marks</label></td>
<td><label>Chemistry Marks</label></td>
<td><label>Physics Marks</label></td>
<td><label>General Knowledge Marks</label></td>
<td><label>General Knowledge Oral</label></td>
<td><label>Art Marks</label></td>
<td><label>P.S.T Marks:</label></td>
<td><label>Winter Vacation Marks</label></td>
<td><label>Summer Vacation Marks</label></td>
<td><label>Other Marks</label></td>
<td><label>Submit</label></td>
</tr>

<tr>
<td align="center" valign="middle"><input type="number" name="student_id" value="0" class="form-control" style="padding: 7px;"></td>
			<?php
			//Fetch ID
			$adminName = $_SESSION['teacherusername'];
			$Query = "SELECT * FROM teacher_registration WHERE user_name='$adminName'";
			$selectIDQuery = mysqli_query($db,$Query);
			$fetchQuery = mysqli_fetch_array($selectIDQuery);
			?>
<td><input type="text" readonly name="class" value="<?php echo $fetchQuery['class']; ?>" class="form-control" style="padding: 7px;"></td>
<td><input type="text" name="status" class="form-control" value="Test"  style="padding: 7px;"></td>
<td><input type="number" name="english" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="urdu" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="sindhi" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="math" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="science" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="islamiat" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="sst" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="computer" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="biology" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="chemistry" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="physics" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="gk" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="gk_oral" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="art" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="pst" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="winter_vacation" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="summer_vacation" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="other" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="submit" name="update_daily" value="Submit Marks" class="btn btn-danger"></td></tr>
</table>
</form>


<?php
		
	if(isset($_POST["update_daily"]))
	{
		$student_id = $_POST['student_id'];
		$status		= $_POST['status'];
        $english   = $_POST['english'];
        $urdu 	  = $_POST['urdu'];
		$sindhi 	   = $_POST['sindhi'];
		$math 	  = $_POST['math'];
		$science     = $_POST['science'];
		$islamiat 	 = $_POST['islamiat'];
		$sst 	 = $_POST['sst'];
		$computer = $_POST['computer'];
		$biology		= $_POST['biology'];
        $chemistry   = $_POST['chemistry'];
        $physics 	  = $_POST['physics'];
		$gk 	   = $_POST['gk'];
		$gk_oral 	  = $_POST['gk_oral'];
		$art     = $_POST['art'];
		$pst 	 = $_POST['pst'];
		$winter_vacation 	 = $_POST['winter_vacation'];
		$summer_vacation = $_POST['summer_vacation'];
		$other		= $_POST['other'];
		
		$sqlidaily= "UPDATE results SET status = '$status', english = '$english', urdu = '$urdu', sindhi = '$sindhi', math = '$math', science = '$science', islamiat = '$islamiat', sst = '$sst', computer = '$computer', biology = '$biology', chemistry = '$chemistry', physics = '$physics', gk = '$gk', gk_oral = '$gk_oral', art = '$art', pst = '$pst', winter_vacation = '$winter_vacation', summer_vacation = '$summer_vacation', other = '$other' WHERE student_id = '$student_id'";
		
	if ($db->query($sqlidaily) === TRUE) {
    echo "Result Updated successfully";
} else {
    echo "Error While Updating A Student Result: " . $db->error;
}
	}
?>
<br/><br/><br/><br/>

</center>
</div>
</div>

  </div>  
 


<?php include('includes/footer_teacher.php'); ?>  
