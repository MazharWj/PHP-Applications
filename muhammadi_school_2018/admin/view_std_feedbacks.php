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
  
<section id="contactUs" class="contact-parlex">
  <div class="parlex-back">
    <div class="container">
      <div class="row">
        <div class="heading text-center"> 
          <!-- Heading --></br>
</br>
</br>
</br>
</br>
		<div class="header text-center">
		<h1 style="font-family:cursive; color:#3eaec2;">All Feedback's</h1></br></br>
        </div>
		</div>
      </div>

      <div class="row mrgn30">

<div id="accordion">
<div class="col-md-12" style="overflow-x: auto">
<table class="table table-bordered" style="width:auto" border="2" align="center">
  <tr>
    <th>ID</th>
    <th>Roll No.</th>
    <th>Name</th>
    <th>Phone Number</th>
    <th>Subject</th>
    <th>Feedback</th>
	<th>Delete Feedback</th>
</tr>
<?php $dailyresultquery="SELECT * FROM `feedback`"; 
$search_result = mysqli_query($db, $dailyresultquery); ?>
<?php while($row = mysqli_fetch_array($search_result)):?>
				<tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['rollno'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['phoneno'];?></td>
					<td><?php echo $row['subject'];?></td>
                    <td><?php echo $row['feedback'];?></td>
					<td><a href="delete_feedback.php?del=<?php echo $row['id'] ?>" style="color:red; font-weight:bold; text-transform:uppercase">Delete Feedback</a></td>
                </tr>
<?php endwhile; ?>
</table>
</div>
</div>
</div>

      </div>
    </div>
</section>
<?php include('includes/footer_admin.php'); ?>