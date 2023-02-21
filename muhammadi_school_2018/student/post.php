<?php
include "includes/config.php";
include "includes/db.php";
include "includes/function.php";
date_default_timezone_set("Asia/Karachi");
session_start();

//session_start();
if(isset($_SESSION['stdusername'])){
	
	//Get userid from its username
	$getuserid = mysqli_query($db,"SELECT * FROM std_registrations WHERE student_name='".$_SESSION['stdusername']."'");
	$fetchusername = mysqli_fetch_assoc($getuserid);
	$uname = $fetchusername['student_name'];
	//$usersData = getUsersProfileData(getID($uid));
	
	
	
    $text = $_POST['text'];
     
    $fp = fopen("log.html", 'a');
	
    fwrite($fp, "<div class='msgln' style='background-color:rgb(74, 183, 206);
	padding:6px;
	border-radius: 20px; color: #fff; width:180px; height: auto; margin-bottom:5px; 
	-webkit-box-shadow: 3px 3px 5px 0px rgba(50, 50, 50, 0.43);
	-moz-box-shadow:    3px 3px 5px 0px rgba(50, 50, 50, 0.43);
	box-shadow:         3px 3px 5px 0px rgba(50, 50, 50, 0.43);
	 border:2px #CEEAE3 solid
	'>
	(<em>".date("l, d, M:")."  at  ".date("h:i:sa")."</em>) <b>".$uname." </b> Says: </br>".stripslashes(htmlspecialchars($text))."<br></div>");
	fclose($fp);
}
?> 
