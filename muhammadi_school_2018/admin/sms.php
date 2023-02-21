<?php
session_start();
include "includes/config.php";
include "includes/db.php";
include "includes/function.php";
if(!loggedIn()){
	header("Location:login.php?err=".urlencode("You need to login to View Account !!"));
	exit();
}

?>

<?php include('includes/header_admin.php'); ?>  
  

 <body>
		
	<div class="container">
        	<div class="header text-center"></br></br></br></br>
			<h1 style="font-family:cursive; color:#3eaec2;">SMS Service System</h1>
            	</br>
            </div>
            <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="frm">
            	<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Type SMS A.P.I Password</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="pass" id="pass" placeholder="Enter Your SMS API Password" title="Please Enter Your SMS API Password" required/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">From: (Sender ID)</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="sender" id="sender" placeholder="Enter Your SMS API ID" title="Please Enter Your SMS API ID" required/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">To: (Reciever Number)</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="mobile" value="92" id="password" placeholder="Enter Administrator's Password" title="Enter Administrator's Password" required/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Message:</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="message" id="message" placeholder="Enter Your Message To Send" title="Please Enter Your Message To Send"></textarea>
                    </div>
                </div>
				
				
				
                <div class="form-group">
                	<div class="col-lg-offset-2 col-lg-10">
                    	<input type="submit" name="submit" value="Send" id="submit" class="btn btn-success btn-block">
						<input type="reset" name="reset" value="Reset" id="reset" class="btn btn-danger btn-block">
					</div>
                </div>
            </form>
        </div>
</br></br>
  
  <?php
  
  if (isset($_POST["submit"]))
			{
$pass=$_POST["pass"];
$pass = strtolower($pass);
$sender=$_POST["sender"];
$receiver=$_POST["mobile"];
$msg=$_POST["message"];
$sender = urlencode($sender);
$receiver = urlencode($receiver);
$msg = urlencode($msg);

//pass protect
     if ($pass == '7356')
{
}elseif ($pass == '7356')
{
}elseif ($pass == '7356')
{
}elseif ($pass == '7356')
{
}elseif ($pass == '7356')
{
}else
{
echo "<center><font color=red>Password Incorrect Contact Admin</center></font>";
$sentpermission='false';
}

if($sentpermission!='false')
		{
//type Your Username in XXXXX And Password in XXXX
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://bulksms.com.pk/api/sms.php?username=923062201939&password=7356&sender='.$sender.'&mobile='.$receiver.'&message='.$msg);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HEADER, 0);
$result = curl_exec ($ch);



if (preg_match("/OK/", $result))
{
echo '<center><font color=green>MessageSent</center></font>';
}else
{
echo '<center><font color=red>ERROR! Check Your Internet Connection Or Call Your Service Provider</br>Thankyou!</center></font>';
echo $result;
}
		}
			}
?>
  
  
<?php include('includes/footer_admin.php'); ?>  
