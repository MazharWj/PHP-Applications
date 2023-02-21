<?php
include "includes/config.php";
include "includes/db.php";

	if(isset($_GET['del']))
	{
		$id = $_GET['del'];
		$sql= "DELETE FROM homework WHERE class='$id'";
		
		if ($db->query($sql) === TRUE) {
    echo "Home Work deleted successfully";
} else {
    echo "Error deleting record: " . $db->error;
}

	}
?>