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
    $fetchQuery = "SELECT * FROM attendance WHERE student_id LIKE '%".$searchTerm."%' OR month LIKE '%".$searchTerm."%'";
    $search_result = filterTable($fetchQuery);
    
} else {
    $fetchAll = "SELECT * FROM `attendance`";
    $search_result = filterTable($fetchAll);
}
?>
  
 <div class="container">
  
</br></br></br></br></br>
  <div class="header text-center">
        	<h2 style="font-family:cursive; color:#3eaec2;">View Student Attendance</h2>
  </div></br></br>

</div>

	<div class="col-md-12" style="overflow-x: auto">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
           <center> <input type="search" name="term" placeholder="Seacrh Any Attendance!" class="form" required/><br><br>
            <input type="submit" name="search" value="Search" class="btn btn-success"/><center><br><br>
	</form>
    <table class="table table-bordered" style="width:auto">
	
  <thead>
    <tr>

      <th>Roll No</th>
	  <th>Month</th>
	  <th>Attendance Date</th>
	  <th>Delete Attendance</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
	  <?php 
	  if(mysqli_num_rows($search_result) > 0){
	  
	  while($row = mysqli_fetch_assoc($search_result)):?>
                <tr>
                    <td><?php echo $row['student_id'];?></td>
                    <td><?php echo $row['month'];?></td>
                    <td><?php echo $row['date'];?></td>
					<td><a href="delete_attendance.php?del=<?php echo $row['student_id'] ?>" style="color:red; font-weight:bold; text-transform:uppercase">Delete Attendance</a></td>
					
                </tr>
                <?php endwhile; ?>
			<?php } else { ?>
				<tr>
					<td colspan="24" align="center"><h3 style="color:red;">Attendance Not Found!</h3></td>
				</tr>
			<?php	
			} ?>
  </tbody>
</table>
  
  </div>
  </div>
  
  
 
 
 
<?php include('includes/footer_admin.php'); ?>