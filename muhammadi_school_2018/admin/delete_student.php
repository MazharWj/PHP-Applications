<?php
include "includes/config.php";
include "includes/db.php";

	if(isset($_GET['del']))
	{
		$id = $_GET['del'];
		$sql= "DELETE FROM std_registrations WHERE student_id='$id'";
		
		if ($db->query($sql) === TRUE) {
    echo "Student Record Deleted Successfully";
} else {
    echo "Error While Deleting A Record: " . $db->error;
}

	}
?>