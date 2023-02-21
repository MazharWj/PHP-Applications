<?php
session_start();
setcookie("user_email","",time()-60*5);
if(session_destroy())
{
	header("Location: ../index.php?success=".urlencode("Logged Out Successfully !"));
	exit();
}
?>