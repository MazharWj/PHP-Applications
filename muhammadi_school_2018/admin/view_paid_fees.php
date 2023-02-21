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
    $fetchQuery = "SELECT * FROM fees WHERE student_id LIKE '%".$searchTerm."%' ";
    $search_result = filterTable($fetchQuery);
    } else {
    $fetchAll = "SELECT * FROM `fees`";
    $search_result = filterTable($fetchAll);
}
?>

  
<section id="contactUs" class="contact-parlex">
  <div class="parlex-back">
    <div class="container">
      <div class="row">
        <div class="heading text-center"> 
          <!-- Heading --></br>
</br>
</br>
</br>
         <div class="page-header">
		 <h2 style="font-family:cursive; color:#3eaec2;">All Paid Fees</h2></br>
         </div>
		</div>
      </div>

      <div class="row mrgn30">
	  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
           <center> <input type="search" name="term" placeholder="Search By I.D" required class="form"/><br><br>
            <input type="submit" name="search" value="Search" class="btn btn-success"/><center><br><br>
	</form>

<div id="accordion">

  <div class="col-md-12" style="overflow-x: auto" >
  
<table class="table table-bordered" style="width:auto" border="2" align="center">
<tr>
<td><label>Student I.D:<em>(Mandatory)</em></label></td>
<td><label>Institute:</label></td> 
<td><label>Branch Name:</label></td>
<td><label>Payment Type</label></td>
<td><label>Reciept No:</label></td>
<td><label>Depositor's Name:</label></td>
<td><label>Payment Date:</label></td>
<td><label>Admission Fees:</label></td>
<td><label>Monthly Fees:</label></td>
<td><label>Annual Fees:</label></td>
<td><label>Course Fees:</label></td>
<td><label>Uniform Fees:</label></td>
<td><label>Stationary Fees:</label></td>
<td><label>I.D Card Fees:</label></td>
<td><label>Cafeteria Payment:</label></td>
<td><label>Event Fees:</label></td>
<td><label>Tution Fees:</label></td>
<td><label>Fine Fees:</label></td>
<td><label>Other Fees:</label></td>
<td><label>Comments:</label></td>
<td><label>Delete Payment:</label></td>
<td><label>Edit Payment:</label></td>
</tr>

<?php 
	  if(mysqli_num_rows($search_result) > 0){
	  
	  while($row = mysqli_fetch_assoc($search_result)):?>

                <tr>
					<td><?php echo $row['student_id'];?></td>
                    <td><?php echo $row['institute'];?></td>
                    <td><?php echo $row['branch_name'];?></td>
                    <td><?php echo $row['payment_type'];?></td>
					<td><?php echo $row['recieptno'];?></td>
                    <td><?php echo $row['depositor_name'];?></td>
					<td><?php echo $row['payment_date'];?></td>
					<td><?php echo $row['admission_fees'];?></td>
                    <td><?php echo $row['monthly_fee'];?></td>
                    <td><?php echo $row['annual_fee'];?></td>
                    <td><?php echo $row['course_fee'];?></td>
					<td><?php echo $row['uniform_fee'];?></td>
                    <td><?php echo $row['stationary_fee'];?></td>
					<td><?php echo $row['idcard_fee'];?></td>
                    <td><?php echo $row['cafeteria_payment'];?></td>
                    <td><?php echo $row['event_fees'];?></td>
                    <td><?php echo $row['tution_fees'];?></td>
					<td><?php echo $row['fine_fees'];?></td>
                    <td><?php echo $row['other_fees'];?></td>
					<td><?php echo $row['comments'];?></td>
					<td><a href="delete_fees.php?del=<?php echo $row['student_id'] ?>" style="color:red; font-weight:bold; text-transform:uppercase">Delete Payment</a></td>
					<td><a href="edit_fees_payment.php" style="color:green; font-weight:bold; text-transform:uppercase">Update Payment</a></td>
                </tr>
<?php endwhile; ?>
<?php } else { ?>
				<tr>
					<td colspan="24" align="center"><h3 style="color:red;">Fees Not Found!</h3></td>
				</tr>
			<?php	
			} ?>
</table>
</div>
</div>
</div>
     </div>
    </div>
</section>
</br></br>
</br>
<?php include('includes/footer_admin.php'); ?>