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

<div id="#top"></div>

<section id="contactUs" class="contact-parlex">
  <div class="parlex-back">
    <div class="container">
      <div class="row">
        <div class="heading text-center"> 
          <!-- Heading --><br>
<br>
<br>
<br>
<br>
<br>
<h2 style="font-family:cursive; color:#3eaec2;">Updating of Students Result</h2>
          
        </div>
        
        
        </br>

      </div>
      <div class="row mrgn30">

<div id="accordion">
  <h3>Daily Exam</h3>
  <div>
    <center>

<h2><label>Edit Student Result To Daily Test:</label></h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<table border="2">
<tr><td><label>Enter Roll Number: <em>(Mandatory)</em></label></td>
<td><label>Status:</label></td> 
<td><label>Sindhi Marks:</label></td>
<td><label>Pakistan Studies Marks</label></td>
<td><label>C.S Marks</label></td>
<td><label>Biology Marks</label></td>
<td><label>Chemistry Marks</label></td>
<td><label>English Marks 1</label></td>
<td><label>English Marks 2</label></td>
<td><label>Submit</label></td>
</tr>

<tr>
<td align="center" valign="middle"><input type="number" name="rollnumber" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="text" readonly name="status_name" class="form-control" value="DailyTest"  style="padding: 7px;"></td>
<td><input type="number" name="sindhimarks" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="pstmarks" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="csmarks" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="biomarks" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="chemmarks" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="eng1marks" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="number" name="eng2marks" value="0" class="form-control" style="padding: 7px;"></td>
<td><input type="submit" name="update_daily" value="Submit Marks" class="btn btn-danger"></td></tr>
</table>
</form>


<?php
		
	if(isset($_POST["update_daily"]))
	{
		$std_rollnumber = $_POST['rollnumber'];
		$statuSS		= $_POST['status_name'];
        $sindhi_marks   = $_POST['sindhimarks'];
        $pst_marks 	  = $_POST['pstmarks'];
		$cs_marks 	   = $_POST['csmarks'];
		$bio_marks 	  = $_POST['biomarks'];
		$chem_marks     = $_POST['chemmarks'];
		$eng1_marks 	 = $_POST['eng1marks'];
		$eng2_marks 	 = $_POST['eng2marks'];
		
		
		
		$sqlidaily= "UPDATE results SET status = '$statuSS', sindhimarks = '$sindhi_marks', pstmarks = '$pst_marks', csmarks = '$cs_marks', biologymarks = '$bio_marks', chemistrymarks = '$chem_marks', englishmarks1 = '$eng1_marks', englishmarks2 = '$eng2_marks' WHERE student_id = '$std_rollnumber'";
		
	if ($db->query($sqlidaily) === TRUE) {
    echo "Result Updated successfully";
} else {
    echo "Error While Updating A Student Result: " . $db->error;
}
	}
?>


</center>
</div>

<h3>Midterm Exam</h3>
<div>
<h2><label>Edit Student Result To Midterm Exam:</label></h2>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

<table border="2">
<tr><td><label>Enter Roll Number: <em>(Mandatory)</em></label></td>
<td><label>Status:</label></td> 
<td><label>Sindhi Marks:</label></td>
<td><label>Pakistan Studies Marks</label></td>
<td><label>C.S Marks</label></td>
<td><label>Biology Marks</label></td>
<td><label>Chemistry Marks</label></td>
<td><label>English Marks 1</label></td>
<td><label>English Marks 2</label></td>
<td><label>Submit</label></td>
</tr>

<tr>
<td><input type="number" name="rollnumberr" class="form-control" value="0" style="padding: 7px;"></td>
<td><input type="text" readonly name="status_namee" class="form-control" value="MidtermExam" style="padding: 7px;"></td>
<td><input type="number" name="sindhimarkss" class="form-control" value="0" style="padding: 7px;"></td>
<td><input type="number" name="pstmarkss" class="form-control" value="0" style="padding: 7px;"></td>
<td><input type="number" name="csmarkss" class="form-control" value="0" style="padding: 7px;"></td>
<td><input type="number" name="biomarkss" class="form-control" value="0" style="padding: 7px;"></td>
<td><input type="number" name="chemmarkss" class="form-control" value="0" style="padding: 7px;"></td>
<td><input type="number" name="eng1markss" class="form-control" value="0" style="padding: 7px;"></td>
<td><input type="number" name="eng2markss" class="form-control" value="0" style="padding: 7px;"></td>
<td>
<input type="submit" name="add_midterm" value="Submit Marks" class="btn btn-danger">
</td>
</tr>
</table>
</form>

<?php
		
	if(isset($_POST["add_midterm"]))
	{
		$std_rollnumber = $_POST['rollnumber'];
		$statuSS		= $_POST['status_name'];
        $sindhi_marks   = $_POST['sindhimarks'];
        $pst_marks 	  = $_POST['pstmarks'];
		$cs_marks 	   = $_POST['csmarks'];
		$bio_marks 	  = $_POST['biomarks'];
		$chem_marks     = $_POST['chemmarks'];
		$eng1_marks 	 = $_POST['eng1marks'];
		$eng2_marks 	 = $_POST['eng2marks'];
		
		
		
		$sqlidaily= "UPDATE results SET status = '$statuSS', sindhimarks = '$sindhi_marks', pstmarks = '$pst_marks', csmarks = '$cs_marks', biologymarks = '$bio_marks', chemistrymarks = '$chem_marks', englishmarks1 = '$eng1_marks', englishmarks2 = '$eng2_marks' WHERE student_id = '$std_rollnumber'";
		
	if ($db->query($sqlidaily) === TRUE) {
    echo "Result Updated successfully";
} else {
    echo "Error While Updating A Student Result: " . $db->error;
}
	}
?>
  </div>
    
    
      <h3>Monthly Exam</h3>
<div>

<h2><label>Edit Student Result To Monthly Exam:</label></h2>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

<table border="2">
<tr><td><label>Enter Roll Number: <em>(Mandatory)</em></label></td>
<td><label>Status:</label></td> 
<td><label>Sindhi Marks:</label></td>
<td><label>Pakistan Studies Marks</label></td>
<td><label>C.S Marks</label></td>
<td><label>Biology Marks</label></td>
<td><label>Chemistry Marks</label></td>
<td><label>English Marks 1</label></td>
<td><label>English Marks 2</label></td>
<td><label>Submit</label></td>
</tr>

<tr>
<td><input type="number" name="rollnumber_MonthlyExam" class="form-control" value="0" style="padding:7px;"></td>
<td><input type="text" readonly name="status_name_MonthlyExam" class="form-control" value="MonthlyExam" style="padding:7px;"></td>
<td><input type="number" name="sindhimarks_MonthlyExam" class="form-control" value="0" style="padding:7px;"></td>
<td><input type="number" name="pstmarks_MonthlyExam" class="form-control" value="0" style="padding:7px;"></td>
<td><input type="number" name="csmarks_MonthlyExam" class="form-control" value="0" style="padding:7px;"></td>
<td><input type="number" name="biomarks_MonthlyExam" class="form-control" value="0" style="padding:7px;"></td>
<td><input type="number" name="chemmarks_MonthlyExam" class="form-control" value="0" style="padding:7px;"></td>
<td><input type="number" name="eng1marks_MonthlyExam" class="form-control" value="0" style="padding:7px;"></td>
<td><input type="number" name="eng2marks_MonthlyExam" class="form-control" value="0" style="padding:7px;"></td>
<td><input type="submit" name="add_monthly" value="Submit Marks" class="btn btn-danger"></td></tr>
</table>
</form>

<?php
		
	if(isset($_POST["add_monthly"]))
	{
		$std_rollnumber = $_POST['rollnumber'];
		$statuSS		= $_POST['status_name'];
        $sindhi_marks   = $_POST['sindhimarks'];
        $pst_marks 	  = $_POST['pstmarks'];
		$cs_marks 	   = $_POST['csmarks'];
		$bio_marks 	  = $_POST['biomarks'];
		$chem_marks     = $_POST['chemmarks'];
		$eng1_marks 	 = $_POST['eng1marks'];
		$eng2_marks 	 = $_POST['eng2marks'];
		
		
		
		$sqlidaily= "UPDATE results SET status = '$statuSS', sindhimarks = '$sindhi_marks', pstmarks = '$pst_marks', csmarks = '$cs_marks', biologymarks = '$bio_marks', chemistrymarks = '$chem_marks', englishmarks1 = '$eng1_marks', englishmarks2 = '$eng2_marks' WHERE student_id = '$std_rollnumber'";
		
	if ($db->query($sqlidaily) === TRUE) {
    echo "Result Updated successfully";
} else {
    echo "Error While Updating A Student Result: " . $db->error;
}
	}
?>
  </div>
    
  <h3>Final Exam</h3>
  
<div>
<h2><label>Edit Student Result To Final Exam:</label></h2>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

<table border="2">
<tr><td><label>Enter Roll Number: <em>(Mandatory)</em></label></td>
<td><label>Status:</label></td> 
<td><label>Sindhi Marks:</label></td>
<td><label>Pakistan Studies Marks</label></td>
<td><label>C.S Marks</label></td>
<td><label>Biology Marks</label></td>
<td><label>Chemistry Marks</label></td>
<td><label>English Marks 1</label></td>
<td><label>English Marks 2</label></td>
<td><label>Submit</label></td>
</tr>

<tr>
<td><input type="number" name="rollnumber_FinalExam" class="form-control" value="0" style="padding:7px;"></td>
<td><input type="text" readonly name="status_name_FinalExam" class="form-control" value="FinalExam" style="padding:7px;"></td>
<td><input type="number" name="sindhimarks_FinalExam" class="form-control" value="0" style="padding:7px;"></td>
<td><input type="number" name="pstmarks_FinalExam" class="form-control" value="0" style="padding:7px;"></td>
<td><input type="number" name="csmarks_FinalExam" class="form-control" value="0" style="padding:7px;"></td>
<td><input type="number" name="biomarks_FinalExam" class="form-control" value="0" style="padding:7px;"></td>
<td><input type="number" name="chemmarks_FinalExam" class="form-control" value="0" style="padding:7px;"></td>
<td><input type="number" name="eng1marks_FinalExam" class="form-control" value="0" style="padding:7px;"></td>
<td><input type="number" name="eng2marks_FinalExam" class="form-control" value="0" style="padding:7px;"></td>
<td><input type="submit" name="add_final" value="Submit Marks" class="btn btn-danger"></td></tr>
</table>
</form>

<?php
		
	if(isset($_POST["add_final"]))
	{
		$std_rollnumber = $_POST['rollnumber'];
		$statuSS		= $_POST['status_name'];
        $sindhi_marks   = $_POST['sindhimarks'];
        $pst_marks 	  = $_POST['pstmarks'];
		$cs_marks 	   = $_POST['csmarks'];
		$bio_marks 	  = $_POST['biomarks'];
		$chem_marks     = $_POST['chemmarks'];
		$eng1_marks 	 = $_POST['eng1marks'];
		$eng2_marks 	 = $_POST['eng2marks'];
		
		
		
		$sqlidaily= "UPDATE results SET status = '$statuSS', sindhimarks = '$sindhi_marks', pstmarks = '$pst_marks', csmarks = '$cs_marks', biologymarks = '$bio_marks', chemistrymarks = '$chem_marks', englishmarks1 = '$eng1_marks', englishmarks2 = '$eng2_marks' WHERE student_id = '$std_rollnumber'";
		
	if ($db->query($sqlidaily) === TRUE) {
    echo "Result Updated successfully";
} else {
    echo "Error While Updating A Student Result: " . $db->error;
}
	}
?>

<br/><br/><br/><br/>
  </div>  
  
</div>


      </div>
    </div>
    <!--/.container--> 
  </div>
</section>


  
  
  
  
  
<?php include('includes/footer_admin.php'); ?>  
