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
<?php include('includes/header_student.php'); ?>  
  
  
  <div class="row">
    <div class="col-lg-12" style="width:100%; height:665px; background-image:url(../assets/img/livechat_background.jpg); background-repeat:repeat; margin-top: -21px;">
 <div class="col-md-6" style="background-color:white; width: 650px; height: 450px; margin-left: 30%; margin-top: 4%;">
<?php
if(!isset($_SESSION['stdusername'])){
    header("location: student/login.php");
}
else{
?>
<div id="wrapper">
    <div id="menu">
        <p class="welcome" style="float:left"><font color="grey">Welcome,</font> <b style="color:grey;"><?php if(isset($_SESSION['stdusername'])){echo $_SESSION['stdusername'];}else{echo $_COOKIE['stdusername'];} ?></b>
        <p class="logout" style="float:right"><a id="exit" href="#"><img src="../assets/img/logout.png" width="25" height="25"><font color="grey"><strong> Exit Chat</strong></font></a></p>
        </p>
        
        <div style="clear:both"></div>
    </div>    
    <div id="chatbox" style="width: 565px;
    height: 275px;
    background-image: url(../images/chatbg.jpg);
    background-repeat:repeat;
    overflow-y: scroll;
    margin-bottom: 17px; 
	padding: 15px;"></div>
     
    <form name="message" action="">
        <input name="usermsg" type="text" id="usermsg" size="80" placeholder="Write Your Message Here.." style="padding:20px; margin-left:15px;  border: 2px solid #ACD8F0; width: 428px;" />
        <input name="submitmsg" type="submit"  id="submitmsg" class="btn btn-lg btn-primary"  value="Send Message" style="margin-left:10px; margin-top: -4px;" />
    </form>
</div>
<script type="text/javascript" src="jquery-3.1.1.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
	//If user submits the form
	$("#submitmsg").click(function(){	
		var clientmsg = $("#usermsg").val();
		$.post("post.php", {text: clientmsg});				
		$("#usermsg").attr("value", "");
		return false;
	});
	
	//Load the file containing the chat log
	function loadLog(){		

		$.ajax({
			url: "log.html",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html); //Insert chat log into the #chatbox div				
		  	},
		});
	}
	
	//Load the file containing the chat log
	function loadLog(){		
		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 30; //Scroll height before the request
		$.ajax({
			url: "log.html",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html); //Insert chat log into the #chatbox div	
				
				//Auto-scroll			
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 30; //Scroll height after the request
				if(newscrollHeight > oldscrollHeight){
					$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
				}				
		  	},
		});
	}
	
	setInterval (loadLog, 2500);	//Reload file every 2500 ms or x ms if you want
});
</script>
<?php
 } 
?>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("Are you sure you want to logout from LiveChat?");
		if(exit==true){window.location = 'std_livechat.php?logout=true';}
	});
});
</script>
<?php 
if(isset($_GET['logout'])){ 
     
    //Simple exit message
    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['stdusername'] ." has left the chat session.</i><br></div>");
    fclose($fp);
     
    session_destroy();
}
?>

<!-- CHATTING BOX END -->
             </div>
    </div>
</div>

  
<?php include('includes/footer_student.php'); ?>
