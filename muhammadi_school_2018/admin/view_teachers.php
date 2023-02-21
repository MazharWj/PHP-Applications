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
    $fetchQuery = "SELECT * FROM teacher_registration WHERE id_no LIKE '%".$searchTerm."%' OR user_name LIKE '%".$searchTerm."%'";
    $search_result = filterTable($fetchQuery);
    } else {
    $fetchAll = "SELECT * FROM `teacher_registration`";
    $search_result = filterTable($fetchAll);
}
?>
  </br></br></br></br>
 <div class="container">
  <div class="page-header">
        	<h3 style="font-family:cursive; color:#3eaec2;">Welcome <?php if(isset($_SESSION['adminusername'])){echo $_SESSION['adminusername'];}else{echo $_COOKIE['adminusername'];} ?> :)</h3>
			<center><h2 style="font-family:cursive; color:#3eaec2;">All Registered Teachers</h2></center>
  </div>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
           <center> <input type="search" name="term" placeholder="Search By ID or Name" class="form" required/><br><br>
            <input type="submit" name="search" value="Search" class="btn btn-success"/><center><br><br>
	</form>
	<div class="col-md-12" style="overflow-x: auto">
	<table class="table table-bordered" style="width:auto">
	<thead>
    <tr>
	  <th>I.D No</th>
      <th>Class</th>
      <th>Email</th>
	  <th>Name</th>
      <th>Password</th>
      <th>Contact No</th>
	  <th>Image</th>
	  <th>Delete Teacher</th>
	  <th>Update Teacher</th>
	</tr>
  </thead>
  <tbody>
    <tr>
	  <?php 
	  if(mysqli_num_rows($search_result) > 0){
	  
	  while($row = mysqli_fetch_assoc($search_result)):?>
                <tr>
                    <td><?php echo $row['id_no'];?></td>
                    <td><?php echo $row['class'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['user_name'];?></td>
					<td><?php echo $row['password'];?></td>
                    <td><?php echo $row['contact_no'];?></td>
                    <td><?php echo "image"; ?></td>
                    <td><a href="delete_teacher.php?del=<?php echo $row['id_no'] ?>" style="color:red; font-weight:bold; text-transform:uppercase">Delete Teacher</a></td>
					<td><a href="edit_teacher.php
					" style="color:green; font-weight:bold; text-transform:uppercase">Update Teacher</a></td>
                </tr>
                <?php endwhile; ?>
			<?php } else { ?>
				<tr>
					<td colspan="24" align="center"><h3 style="color:red;">Teacher Not Found!</h3></td>
				</tr>
			<?php	
			} ?>
  </tbody>
</table>
  </div>
  </div>
  
  </br>
<?php include('includes/footer_admin.php'); ?>