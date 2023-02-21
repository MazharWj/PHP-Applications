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
<?php include('includes/header_student.php'); ?> 
  
  
</br>
<div class="container">
<div class="row">
<center><h2 style="font-family:cursive; color:#3eaec2;">Student's Attendance History</h2></center>
  <div class="col-md-12" style="overflow-x: auto">
  </br></br>
<table class="table table-bordered" style="width:500px;" border="2" align="center">
  <tr>
    <th>Month</th>
    <th>Date</th>
</tr>

<?php 
$username = $_SESSION['stdusername'];

$getUIDQuery = mysqli_query($db,"SELECT * FROM `std_registrations` WHERE student_name='$username'");
$getuid = mysqli_fetch_array($getUIDQuery);
$uid = $getuid['student_id'];

$dailyresultquery="SELECT * FROM `attendance` WHERE student_id=$uid"; 
$search_result = mysqli_query($db, $dailyresultquery); ?>
<?php while($row = mysqli_fetch_array($search_result)):?>

                <tr>
                    <td><?php echo $row['month'];?></td>
                    <td><?php echo $row['date'];?></td>
                </tr>
<?php endwhile; ?>





</table>

</div>

  </tr>
</table>

</div>

</div>


  </br>
<?php include('includes/footer_student.php'); ?>  
