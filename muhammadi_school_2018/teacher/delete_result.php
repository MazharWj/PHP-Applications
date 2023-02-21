<?php
include "includes/config.php";
include "includes/db.php";

	if(isset($_GET['del']))
	{
		$id = $_GET['del'];
		$sql= "DELETE FROM results WHERE student_id='$id'";
		
		if ($db->query($sql) === TRUE) {
    echo "Result Record deleted successfully";
} else {
    echo "Error deleting record: " . $db->error;
}

	}
?>