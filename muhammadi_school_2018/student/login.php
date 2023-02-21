<?php
session_start();
include "includes/config.php";
include "includes/db.php";
include "includes/function.php";

if(loggedIn()){
	header("Location:std_profile.php");
	exit();
}

if(isset($_POST['login'])){
	$username=mysqli_real_escape_string($db,$_POST['usrname']);
	$password=mysqli_real_escape_string($db,$_POST['passwrd']);	
	$query="SELECT * FROM std_registrations WHERE student_name='$username' AND student_password='$password'";
	$results=$db->query($query);
	if($row=$results->fetch_assoc()){
		$_SESSION['stdusername']=$username;
		if(isset($_POST['remember_me'])){
				setcookie("stduser_email",$username,time()+60*5);
			}
		header("Location:std_profile.php");
		exit();
	} else {
		header("Location:login.php?err=".urlencode("Wrong Username or Password !!"));
		//echo "<script>alert('Username & Password is incorrect !')</script>";
		exit();	
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Student Login Form</title>
      <link rel="stylesheet" href="style.css"/>
</head>
  <body>
	<div class="login">
	<?php
		/* if(isset($_GET['success']))
		{
			echo '<div class="alert alert-success">'.$_GET['success'].'</div>';
		
		} */
		if(isset($_GET['err']))
		{
			echo '<div class="alert alert-danger">'.$_GET['err'].'</div>';
		
		}
	?>	<center>
		<div class="login-screen">
			<div class="app-title">
				<h1>Student Login Area</h1>
			</div>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="login-form">
				<div class="control-group">
				<input type="text" class="login-field" name="usrname" placeholder="Username" id="login-name">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div class="control-group">
				<input type="password" class="login-field" name="passwrd" placeholder="Password" id="login-pass">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				 <div class="checkbox">
				  <label>
					<input type="checkbox" name="remember_me">Remember Me
				  </label>
				</div>
				<input type="submit" class="btn btn-primary btn-large btn-block" name="login" value="Log In!"/>
			</div>
	</form>			
		</div>
		</center>
	</div>

  
  
</body>
</html>
