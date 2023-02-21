<?php
include "includes/config.php";
include "includes/db.php";

	if(isset($_GET['del']))
	{
		$id = $_GET['del'];
		$sql= "DELETE FROM online_registration WHERE id='$id'";
		
		if ($db->query($sql) === TRUE) {
    echo "Feedback Deleted Successfully";
} else {
    echo "Error Deleting A Feedback: " . $db->error;
}

	}
?>