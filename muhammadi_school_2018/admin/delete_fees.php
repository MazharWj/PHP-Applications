<?php
include "includes/config.php";
include "includes/db.php";
if(isset($_GET['del']))
	{$id = $_GET['del'];
		$sql= "DELETE FROM fees WHERE student_id='$id'";
		if ($db->query($sql) === TRUE) {
    echo "Fees Payment Deleted Successfully";
} else {
    echo "Error Deleting A Fees Payment: " . $db->error;
		}
}
?>