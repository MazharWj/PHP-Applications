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

<?php
if(isset($_POST['search'])){
    $searchTerm = $_POST['term'];
    
    $fetchQuery = "SELECT * FROM results WHERE student_id LIKE '%".$searchTerm."%' ";
    $search_result = filterTable($fetchQuery);
    
} else {
    $fetchAll = "SELECT * FROM `results`";
    $search_result = filterTable($fetchAll);
}
?>

<div class="container">
<div class="page-header"></br></br>
 <center><h2 style="font-family:cursive; color:#3eaec2;">View / Update /Delete Result</h2></center></br></br>
 
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
           <center> <input type="search" name="term" placeholder="Enter Student ID To Search Result" class="form" required/><br><br>
            <input type="submit" name="search" value="Search Result" class="btn btn-success"/><center><br><br>
	</form>
 
  <div class="col-md-12" style="overflow-x: auto">
  <table class="table table-bordered" style="width:auto" border="2" align="center">
  <tr>
	<!-- <th>Update Result</th> -->
	<th>Delete Result</th>
    <th>Student I.D</th>
    <th>Class</th>
    <th>Status</th>
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

$dailyresultquery="SELECT * FROM results WHERE class='$student_classname'"; 
$search_result = mysqli_query($db, $dailyresultquery); ?>
<?php while($row = mysqli_fetch_array($search_result)):
$obtainedmarks = $row['english']+$row['urdu']+$row['sindhi']+$row['math']+$row['science']+$row['islamiat']+$row['sst']+$row['computer']+$row['biology']+$row['chemistry']+$row['physics']+$row['gk']+$row['gk_oral']+$row['art']+$row['pst']+$row['winter_vacation']+$row['summer_vacation']+$row['other'];
 $totalmarks = 550; ?>
				<tr>
				<!-- <td><a href="edit_result.php" title="It Will Redirect To Update Result Page" style="color:green; font-weight:bold; text-transform:uppercase">Update Result</a></td> -->
					<td><a href="delete_result.php?del=<?php echo $row['student_id'] ?>" title="It Will Delete Just A Result Through ID" style="color:red; font-weight:bold; text-transform:uppercase">Delete Home Work</a></td>
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
                </tr>
<?php endwhile; ?>
</table>
</div>
</div>
</div>
<?php include('includes/footer_teacher.php'); ?>