<?php
function loggedIn(){
	if(isset($_SESSION['teacherusername']) || isset($_COOKIE['teacherusername']))
	{
		return true;
	}
	else
	{
		return false;
	}	
}
function filterTable($query){
    $connect = mysqli_connect("localhost", "root", "", "muhammadi_school2");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>