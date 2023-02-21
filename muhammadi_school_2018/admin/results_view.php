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
<?php
if(isset($_POST['search'])){
    $searchTerm = $_POST['term'];
    // search in all table columns
    // using concat mysql function
    //$query = "SELECT * FROM `std_registrations` WHERE CONCAT(`student_id`, `student_classname`, `student_section`, `student_groupname`, `student_branchname`, `student_name`, `student_password`, `student_fathername`, `student_email`, `student_phonenumber`, `student_guardianphonenumber`, `guardian_nicno`, `student_countryname`, `student_cityname`, `student_gender`, `student_nationality`, `student_religion`, `picturename`, `picture`, `student_dateofbirth`, 'student_dateofadmission`, 'student_dateofacademicyear`, 'student_admissionfees`, 'student_address`) LIKE '%".$valueToSearch."%'";
    $fetchQuery = "SELECT * FROM results WHERE student_id LIKE '%".$searchTerm."%' ";
    $search_result = filterTable($fetchQuery);
    
} else {
    $fetchAll = "SELECT * FROM `results`";
    $search_result = filterTable($fetchAll);
}
?>


<section id="contactUs" class="contact-parlex">
  <div class="parlex-back">
    
 <div class="container">

  <div class="page-header">
        	</br></br></br><center><h2 style="font-family:cursive; color:#3eaec2;">All Results</h2></center>
  </div>

	<div class="col-md-12" style="overflow-x: auto">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
           <center> <input type="search" name="term" placeholder="Enter Student ID To Search Result" class="form" required/><br><br>
            <input type="submit" name="search" value="Search Result" class="btn btn-success"/><center><br><br>
	</form>
	
<table class="table table-bordered" style="width:auto" border="2" align="center">
  <tr>
    <th>Student Id</th>
    <th>Class</th>
    <th>Status</th>
    <th>English Marks</th>
    <th>Urdu Marks</th>
    <th>Sindhi Marks</th>
    <th>Math Marks</th>
    <th>Science Marks</th> 
    <th>Islamiat Marks</th>
    <th>S.S.T Marks</th>
	<th>Computer Marks</th>
	<th>Biology Marks</th>
	<th>Chemistry Marks</th>
	<th>Physics Marks</th>
	<th>General Knowledge Marks</th>
	<th>General Knowledge Oral Marks</th>
	<th>Art Marks</th>
	<th>P.S.T Marks</th>
	<th>Total Marks</th>
    <th>Percentage</th>
	<th>Delete Result</th>
	<th>Update Result</th>
	
</tr>
<?php 
	  if(mysqli_num_rows($search_result) > 0){
	  
	  while($row = mysqli_fetch_assoc($search_result)):
	  $obtainedmarks = $row['student_id']+$row['class']+$row['status']+$row['english']+$row['urdu']+$row['sindhi']+$row['math']+$row['science']+$row['islamiat']+$row['sst']+$row['computer']+$row['biology']+$row['chemistry']+$row['physics']+$row['gk']+$row['gk_oral']+$row['art']+$row['pst'];
 $totalmarks = 550; ?>
                <tr>
                    <td><?php echo $row['student_id'];?></td>
                    <td><?php echo $row['class'];?></td>
                    <td><?php echo $row['status'];?></td>
                    <td><?php echo $row['english'];?></td>
					<td><?php echo $row['urdu'];?></td>
                    <td><?php echo $row['sindhi'];?></td>
                    <td><?php echo $row['math'];?></td>
                    <td><?php echo $row['science'];?></td>
					<td><?php echo $row['islamiat'];?></td>
					<td><?php echo $row['sst'];?></td>
                    <td><?php echo $row['computer'];?></td>
                    <td><?php echo $row['biology'];?></td>
					<td><?php echo $row['chemistry'];?></td>
                    <td><?php echo $row['physics'];?></td>
                    <td><?php echo $row['gk'];?></td>
                    <td><?php echo $row['gk_oral'];?></td>
					<td><?php echo $row['art'];?></td>
					<td><?php echo $row['pst'];?></td>
					<td><?php echo $obtainedmarks; ?></td>
					<td><?php echo $mainresult = round(($obtainedmarks * 100) / $totalmarks)."%"; ?></td>
					<td><a href="delete_result.php?del=<?php echo $row['student_id'] ?>" style="color:red; font-weight:bold; text-transform:uppercase">Delete Result</a></td>
					<td><a href="edit_result.php" style="color:green; font-weight:bold; text-transform:uppercase">Update Result</a></td>
                </tr>
                <?php endwhile; ?>
			<?php } else { ?>
				<tr>
					<td colspan="24" align="center"><h3 style="color:red;">Result Not Found!</h3></td>
				</tr>
			<?php	
			} ?>
  
</table>
</div>
</div>
</div>

</section>
<?php include('includes/footer_admin.php'); ?>