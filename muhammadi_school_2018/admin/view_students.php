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
    $fetchQuery = "SELECT * FROM std_registrations WHERE student_id LIKE '%".$searchTerm."%' OR student_name LIKE '%".$searchTerm."%'";
    $search_result = filterTable($fetchQuery);
    } else {
    $fetchAll = "SELECT * FROM `std_registrations`";
    $search_result = filterTable($fetchAll);
}
?>
  </br></br></br></br>
 <div class="container">
  <div class="page-header">
        	<h3 style="font-family:cursive; color:#3eaec2;">Welcome <?php if(isset($_SESSION['adminusername'])){echo $_SESSION['adminusername'];}else{echo $_COOKIE['adminusername'];} ?> :)</h3>
			<center><h2 style="font-family:cursive; color:#3eaec2;">All Registered Students</h2></center>
  </div>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
           <center> <input type="search" name="term" placeholder="Value To Search" required class="form"/><br><br>
            <input type="submit" name="search" value="Search" class="btn btn-success"/><center><br><br>
	</form>
	<div class="col-md-12" style="overflow-x: auto">
	<table class="table table-bordered" style="width:auto">
	<thead>
    <tr>
	  <th>Roll No</th>
      <th>Class Name</th>
      <th>Section</th>
	  <th>Group</th>
      <th>Branch Name</th>
      <th>Name</th>
	  <th>Password</th>
      <th>Father Name</th>
      <th>Email</th>
	  <th>Phone No.</th>
      <th>Guardian Phone No.</th>
      <th>Guardian NIC No.</th>
	  <th>Country</th>
      <th>City</th>
      <th>Gender</th>
	  <th>Nationality</th>
      <th>Religion</th>
	  <th>Picture Name</th>
      <th>Picture</th>
	  <th>Date Of Birth</th>
      <th>Date Of Admission</th>
	  <th>Academic Year</th>
      <th>Admisision Fees</th>
	  <th>Address</th>
	  <th>Delete Student</th>
	<th>Update Student</th>
	</tr>
  </thead>
  <tbody>
    <tr>
	  <?php 
	  if(mysqli_num_rows($search_result) > 0){
	  
	  while($row = mysqli_fetch_assoc($search_result)):?>
                <tr>
                    <td><?php echo $row['student_id'];?></td>
                    <td><?php echo $row['student_classname'];?></td>
                    <td><?php echo $row['student_section'];?></td>
                    <td><?php echo $row['student_groupname'];?></td>
					<td><?php echo $row['student_branchname'];?></td>
                    <td><?php echo $row['student_name'];?></td>
                    <td><?php echo $row['student_password'];?></td>
                    <td><?php echo $row['student_fathername'];?></td>
					<td><?php echo $row['student_email'];?></td>
                    <td><?php echo $row['student_phonenumber'];?></td>
                    <td><?php echo $row['student_guardianphonenumber'];?></td>
                    <td><?php echo $row['guardian_nicno'];?></td>
					<td><?php echo $row['student_countryname'];?></td>
                    <td><?php echo $row['student_cityname'];?></td>
                    <td><?php echo $row['student_gender'];?></td>
                    <td><?php echo $row['student_nationality'];?></td>
					<td><?php echo $row['student_religion'];?></td>
					
                    <td><?php echo "Image"; ?></td>
					<td><?php echo "Image"; ?></td>
                    
                    <td><?php echo $row['student_dateofbirth'];?></td>
					<td><?php echo $row['student_dateofadmission'];?></td>
                    <td><?php echo $row['student_academicyear'];?></td>
                    <td><?php echo $row['student_admissionfees'];?></td>
                    <td><?php echo $row['student_address'];?></td>
					<td><a href="delete_student.php?del=<?php echo $row['student_id'] ?>" style="color:red; font-weight:bold; text-transform:uppercase">Delete Student</a></td>
					<td><a href="edit_student.php" style="color:green; font-weight:bold; text-transform:uppercase">Update Student</a></td>
                </tr>
                <?php endwhile; ?>
			<?php } else { ?>
				<tr>
					<td colspan="24" align="center"><h3 style="color:red;">Student Not Found!</h3></td>
				</tr>
			<?php	
			} ?>
  </tbody>
</table>
  </div>
  </div>
<?php include('includes/footer_admin.php'); ?>