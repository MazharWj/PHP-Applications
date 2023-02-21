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
<script>
  $(function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  });
  $(function() {
    $( "#dialog-message" ).dialog({
      modal: true,
      buttons: {
        Ok: function() {
          $( this ).dialog( "close" );
        }
      }
    });
  });
  </script>
</head>
<body>

<section id="contactUs" class="contact-parlex">
  <div class="parlex-back">
    <div class="container">
      <div class="row">
        <div class="heading text-center"> 
          <!-- Heading --></br>
</br>
</br>
</br></br>
	
<h2 style="font-family:cursive; color:#3eaec2;">Edit Fees Payment</h2>
         </br>
</br></div>
        </br>

      </div>
      <div class="row mrgn30">

<div id="accordion" style="overflow-x: auto">
  
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<table class="table table-bordered" style="width:auto" border="2" align="center">
<tr>
<td><label>Student I.D<em>(Mandatory)</em></label></td>
<td><label>Institute:</label></td> 
<td><label>Branch Name:</label></td>
<td><label>Payment Type</label></td>
<td><label>Reciept No:</label></td>
<td><label>Depositor's Name</label></td>
<td><label>Monthly Fees</label></td>
<td><label>Annual Fees</label></td>
<td><label>Course Fees</label></td>
<td><label>Uniform Fees</label></td>
<td><label>Stationary Fees</label></td>
<td><label>I.D Card Fees</label></td>
<td><label>Cafeteria Payment</label></td>
<td><label>Event Fees</label></td>
<td><label>Tution Fees</label></td>
<td><label>Fine Fees</label></td>
<td><label>Other Fees</label></td>
<td><label>Comments</label></td>
</tr>

<tr>
<td align="center"><input type="text" name="student_id" class="form-control" style="padding: 7px;"></td>
<td><input type="text" name="institute" class="form-control" style="padding: 7px;"></td>
<td><input type="text" name="branch_name" class="form-control" style="padding: 7px;"></td>
<td><input type="text" name="payment_type" class="form-control" style="padding: 7px;"></td>
<td><input type="text" name="recieptno" class="form-control" style="padding: 7px;"></td>
<td><input type="text" name="depositor_name" class="form-control" style="padding: 7px;"></td>
<td><input type="text" name="monthly_fees" class="form-control" style="padding: 7px;"></td>
<td><input type="text" name="annual_fees" class="form-control" style="padding: 7px;"></td>
<td><input type="text" name="course_fees" class="form-control" style="padding: 7px;"></td>
<td><input type="text" name="uniform_fees" class="form-control" style="padding: 7px;"></td>
<td><input type="text" name="stationary_fees" class="form-control" style="padding: 7px;"></td>
<td><input type="text" name="idcard_fees" class="form-control" style="padding: 7px;"></td>
<td><input type="text" name="cafeteria_fees" class="form-control" style="padding: 7px;"></td>
<td><input type="text" name="event_fees" class="form-control" style="padding: 7px;"></td>
<td><input type="text" name="tution_fees" class="form-control" style="padding: 7px;"></td>
<td><input type="text" name="fine_fees" class="form-control" style="padding: 7px;"></td>
<td><input type="text" name="other_fees" class="form-control" style="padding: 7px;"></td>
<td><input type="text" name="comments" class="form-control" style="padding: 7px;"></td>
<td><input type="submit" name="update_daily" class="btn btn-danger"></td></tr>
</table>
</form>
<?php
	if(isset($_POST["update_daily"]))
	{	$student_idc = $_POST["student_id"];
		$recieptnoc = $_POST["recieptno"];
		$institutec = $_POST["institute"];
		$branch_namec = $_POST["branch_name"];
		$payment_typec = $_POST["payment_type"];
		$student_idc = $_POST["student_id"];
		$depositor_namec = $_POST["depositor_name"];
		//$payment_date = $_POST["payment_date"];
		$monthly_feec = $_POST["monthly_fees"];
		$annual_feec = $_POST["annual_fees"];
		$course_feec = $_POST["course_fees"];
		$uniform_feec = $_POST["uniform_fees"];
		$stationary_feec = $_POST["stationary_fees"];
		$idcard_feec = $_POST["idcard_fees"];
		$cafeteria_paymentc = $_POST["cafeteria_fees"];
		$event_feesc = $_POST["event_fees"];
		$tution_feesc = $_POST["tution_fees"];
		$fine_feesc = $_POST["fine_fees"];
		$other_feesc = $_POST["other_fees"];
		$commentsc = $_POST["comments"];
		
		$sqlidaily= "UPDATE fees SET recieptno = '$recieptnoc', institute = '$institutec', branch_name = '$branch_namec', payment_type = '$payment_typec', depositor_name = '$depositor_namec', monthly_fee = '$monthly_feec', annual_fee = '$annual_feec', course_fee = '$course_feec', uniform_fee = '$uniform_feec', stationary_fee = '$stationary_feec', idcard_fee = '$idcard_feec', cafeteria_payment = '$cafeteria_paymentc', event_fees = '$event_feesc', tution_fees = '$tution_feesc', fine_fees = '$fine_feesc', other_fees = '$other_feesc', comments = '$commentsc' WHERE student_id = '$student_idc'";
	
if ($sqlidaily) {
    echo "Fees Payment Updated Successfully";
} else {
    echo "Error While Updating A Fees Payment";
}
	}
 /*	if ($db->query($sqlidaily) === TRUE) {
    echo "Fees Payment Updated Successfully";
} else {
    echo "Error While Updating A Fees Payment: " . $db->error;
}
	 */
?>

</div>

<br/><br/><br/><br/>
  </div>  
  
</div>

      </div>
 
</section>


<?php include('includes/footer_admin.php'); ?>  
