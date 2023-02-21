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

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `online_registration` WHERE CONCAT(`id`, `name`, `email`, `contact_no`, `ques`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `online_registration`";
    $search_result = filterTable($query);
}

?>
  
  
<div class="container">
		<div class="header text-center"></br></br></br></br></br>
		<h1 style="font-family:cursive; color:#3eaec2;">Online Registered Entries</h1></br></br>
		</div>
</div>

	<div class="col-md-12" style="overflow-x: auto">
	
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

	
    <center><table class="table table-bordered" style="width:auto">
	
  <thead>
    <tr>

      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
	  <th>Contact No</th>
      <th>Subject / Questions</th>
	  <th>Delete</th>
    </tr>
  </thead>
  <tbody>
      	  <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['contact_no'];?></td>
					<td><?php echo $row['ques'];?></td>
					<td><a href="delete_online_reg.php?del=<?php echo $row['id'] ?>" style="color:red; font-weight:bold; text-transform:uppercase">Delete Registration</a></td>
				</tr>
                <?php endwhile; ?>
	 
  </tbody>
</table>
  </center>
  </div>
 </br></br>
<?php include('includes/footer_admin.php'); ?>  
