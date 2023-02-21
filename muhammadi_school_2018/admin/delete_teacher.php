<?php
include "includes/config.php";
include "includes/db.php";

	if(isset($_GET['del']))
	{
		$id = $_GET['del'];
		$sql= "DELETE FROM teacher_registration WHERE id_no='$id'";
		
		if ($db->query($sql) === TRUE) {
    echo "Teacher Record Deleted Successfully";
} else {
    echo "Error While Deleting A Record: " . $db->error;
}

	}
?>