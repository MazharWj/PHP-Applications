<?php

function loggedIn()
{
	if(isset($_SESSION['stdusername']) || isset($_COOKIE['stdusername']))
	{
		return true;
	}
	else
	{
		return false;
	}	
}

function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "muhammadi_school2");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

function getUsersProfileData($userID)
{
	$array = array();
	$q = mysqli_query($db,"SELECT * FROM std_registrations WHERE student_id='".$userID."'");
	
	while($r = mysqli_fetch_array($q,$db))
	{
	$array['student_id'] = $r['student_id'];
	$array['student_name'] = $r['student_name'];
	$array['student_password'] = $r['student_password'];
	$array['student_classname'] = $r['student_classname'];
	$array['student_section'] = $r['student_section'];
	$array['student_groupname'] = $r['student_groupname'];
	$array['student_branchname'] = $r['student_branchname'];
	$array['student_fathername'] = $r['student_fathername'];
	$array['student_email'] = $r['student_email'];
	$array['student_phonenumber'] = $r['student_phonenumber'];
	$array['student_guardianphonenumber'] = $r['student_guardianphonenumber'];
	$array['student_countryname'] = $r['student_countryname'];
	$array['student_cityname'] = $r['student_cityname'];
	$array['student_gender'] = $r['student_gender'];
	$array['student_nationality'] = $r['student_nationality'];
	$array['student_religion'] = $r['student_religion'];
	$array['picture'] = $r['picture'];
	$array['student_dateofbirth'] = $r['student_dateofbirth'];
	$array['student_dateofadmission'] = $r['student_dateofadmission'];
	$array['student_academicyear'] = $r['student_academicyear'];
	$array['student_admissionfees'] = $r['student_admissionfees'];
	$array['student_address'] = $r['student_address'];
	}
	return $array;
}


function getID($userID){
	$getuserid = mysqli_query($db,"SELECT * FROM std_registrations WHERE student_id='".$userID."'");
	while($rows = mysqli_fetch_assoc($getuserid,$db))
	{
		return $rows['student_id'];
	}
}

?>