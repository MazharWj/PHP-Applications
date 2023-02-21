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
    $fetchQuery = "SELECT * FROM admin_registrations WHERE id LIKE '%".$searchTerm."%' OR admin_username LIKE '%".$searchTerm."%'";
    $search_result = filterTable($fetchQuery);
    } else {
    $fetchAll = "SELECT * FROM `admin_registrations`";
    $search_result = filterTable($fetchAll);
}
?>
  </br></br></br></br>
 <div class="container">
  <div class="page-header">
        	
			<center><h2 style="font-family:cursive; color:#3eaec2;">All Registered Admins</h2></center>
  </div>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
           <center> <input type="search" name="term" placeholder="Search By ID or Name" required class="form"/><br><br>
            <input type="submit" name="search" value="Search" class="btn btn-success"/><center><br><br>
	</form>
	<div class="col-md-12" style="overflow-x: auto">
	<table class="table table-bordered" style="width:auto">
	<thead>
    <tr>
	  <th>I.D No</th>
      <th>Admin Name</th>
      <th>Admin Password</th>
	  <th>Admin Contact No</th>
      <th>Admin Email</th>
      <th>Picture Name</th>
	  <th>Picture</th>
	  <th>Delete Admin</th>
	  <th>Update Admin</th>
	</tr>
  </thead>
  <tbody>
    <tr>
	  <?php 
	  if(mysqli_num_rows($search_result) > 0){
	  
	  while($row = mysqli_fetch_assoc($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['admin_username'];?></td>
                    <td><?php echo $row['admin_password'];?></td>
                    <td><?php echo $row['admin_phonenumber'];?></td>
					<td><?php echo $row['admin_email'];?></td>
                    <td><?php echo "image";?></td>
					<td><?php echo "image";?></td>
                    <td><a href="delete_admin.php?del=<?php echo $row['id'] ?>" style="color:red; font-weight:bold; text-transform:uppercase">Delete Admin</a></td>
					<td><a href="edit_admin.php" style="color:green; font-weight:bold; text-transform:uppercase">Update Admin</a></td>
                </tr>
                <?php endwhile; ?>
			<?php } else { ?>
				<tr>
					<td colspan="24" align="center"><h3 style="color:red;">Admin Not Found!</h3></td>
				</tr>
			<?php	
			} ?>
  </tbody>
</table>
  </div>
  </div>
<?php include('includes/footer_admin.php'); ?>