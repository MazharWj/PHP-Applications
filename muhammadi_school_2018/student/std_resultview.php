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
<div id="#top"></div>
<section id="contactUs" class="contact-parlex">
  <div class="parlex-back">
    <div class="container">
      <div class="row">
        <div class="heading text-center"> 
          <!-- Heading -->
         <div class="page-header">
        	<h2 style="font-family:cursive; color:#3eaec2;">Welcome <?php if(isset($_SESSION['stdusername'])){echo $_SESSION['stdusername'];}else{echo $_COOKIE['stdusername'];} ?></h2>
		</div>
		</div>
      </div>

      <div class="row mrgn30">

<div id="accordion">

<h3>All Of Your Results</h3>
  <div class="col-md-12" style="overflow-x: auto">
  
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
	<th>Winter Vacation Marks</th>
	<th>Summer Vacation Marks</th>
	<th>Other Marks</th>
	<th>Total Marks</th>
	<th>Percentage %</th>
</tr>

<?php 
$username = $_SESSION['stdusername'];

$getUIDQuery = mysqli_query($db,"SELECT * FROM `std_registrations` WHERE student_name='$username'");
$getuid = mysqli_fetch_array($getUIDQuery);
$uid = $getuid['student_id'];

$dailyresultquery="SELECT * FROM `results` WHERE student_id=$uid"; 
$search_result = mysqli_query($db, $dailyresultquery); ?>
<?php while($row = mysqli_fetch_array($search_result)):
 $obtainedmarks = $row['english']+$row['urdu']+$row['sindhi']+$row['math']+$row['science']+$row['islamiat']+$row['sst']+$row['computer']+$row['biology']+$row['chemistry']+$row['physics']+$row['gk']+$row['gk_oral']+$row['art']+$row['pst']+$row['winter_vacation']+$row['summer_vacation']+$row['other'];
 $totalmarks = 550;
?>
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
					<td><?php echo $row['winter_vacation'];?></td>
					<td><?php echo $row['summer_vacation'];?></td>
					<td><?php echo $row['other'];?></td>
					<td><?php echo $obtainedmarks; ?></td>
					<td><?php echo $mainresult = round(($obtainedmarks * 100) / $totalmarks)."%"; ?></td>
                </tr>
<?php endwhile; ?>

</table>

</div>

  
</div>

</div>

      </div>
    </div>
    
</section>
  
  
<?php include('includes/footer_student.php'); ?>  
