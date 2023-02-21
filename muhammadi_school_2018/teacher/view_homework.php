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
<?php include('includes/header_teacher.php'); ?> 
<div class="container">
<div class="page-header"></br></br>
 <center><h2 style="font-family:cursive; color:#3eaec2;">All Of Your Class Home Work</h2></center></br></br>
  <div class="col-md-12" style="overflow-x: auto">
  <table class="table table-bordered" style="width:auto" border="2" align="center">
  <tr>
  <th>Delete Home Work</th>
    <th>Date</th>
    <th>Class</th>
    <th>English</th>
    <th>Urdu</th>
    <th>Sindhi</th>
    <th>Math</th>
	<th>Science</th>
	<th>Islamiat</th>
	<th>S.S.T</th>
	<th>Computer</th>
	<th>Biology</th>
	<th>Chemistry</th>
    <th>Physics</th>
    <th>General knowledge</th>
    <th>General knowledge Oral</th>
    <th>Art</th>
    <th>P.S.T</th>
	<th>Winter Vacation</th>
	<th>Summer Vacation</th>
	<th>Other</th>
	
</tr>
<?php
$username = $_SESSION['teacherusername'];
$getclassQuery = mysqli_query($db,"SELECT * FROM teacher_registration WHERE user_name='$username'");
$stdclassname = mysqli_fetch_array($getclassQuery);
$student_classname = $stdclassname['class'];

$dailyresultquery="SELECT * FROM homework WHERE class='$student_classname'"; 
$search_result = mysqli_query($db, $dailyresultquery); ?>
<?php while($row = mysqli_fetch_array($search_result)): ?>
				<tr>
				<th><a href="delete_homework.php?del=<?php echo $row['class'] ?>" title="It Will Delete All Of The Old Home Works" style="color:red; font-weight:bold; text-transform:uppercase">Delete Home Work</a></th>
				<td><?php echo $row['date'];?></td>
                    <td><?php echo $row['class'];?></td>
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
                    <td><?php echo $row['winter_vacation'];?></td>
					<td><?php echo $row['summer_vacation'];?></td>
                    <td><?php echo $row['other'];?></td>
					
					
                </tr>
<?php endwhile; ?>
</table>
</div>
</div>
</div></br></br></br>
<?php include('includes/footer_teacher.php'); ?>