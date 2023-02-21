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
        	<div class="row">
            <div class="page-header">
            	</br></br><center><h1 style="font-family:cursive; color:#3eaec2;">Student Registration Form</h1></center>
            </div>
            <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            	<div class="form-group">
                	<label for="name" class="col-lg-2 control-label">Student Roll No.</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="std_rollno" id="name" placeholder="Enter Student Roll Number" title="Please enter student roll number" required/>
                    </div>
                </div>
				
				<div class="form-group">
                	<label class="control-label col-lg-2">Class <span style="color:red">*</span></label>
                    <div class="col-lg-10">
                    	<select class="form-control" name="std_classname">
                    		<option>&nbsp;</option>
							<option>K.G 1</option>
							<option>K.G 2</option>
							<option>Montessari 1</option>
							<option>Montessari 2</option>
							<option>One</option>
							<option>Two</option>
							<option>Three</option>
							<option>Four</option>
							<option>Five</option>
							<option>Six</option>
							<option>Seven</option>
							<option>Eight</option>
							<option>Ninth</option>
							<option>Matric</option>
                    	</select>
                    </div>
                </div>
				
				<div class="form-group">
                	<label class="control-label col-lg-2">Section <span style="color:red">*</span></label>
                    <div class="col-lg-10">
                    	<select class="form-control" name="std_section">
                    		<option>&nbsp;</option>
							  <option>G1</option>
							  <option>G2</option>
							  <option>B1</option>
							  <option>B2</option>
							  <option>D</option>
							  <option>E</option>
							  <option>F</option>
							  <option>G</option>
							  <option>H</option>
							  <option>I</option>
                    	</select>
                    </div>
                </div>
				
				<div class="form-group">
                	<label class="control-label col-lg-2">Group <span style="color:red">*</span></label>
                    <div class="col-lg-10">
                    	<select class="form-control" name="std_groupname">
                    		<option>&nbsp;</option>
							<option>Science</option>
							  <option>Biology</option>
							  <option>Commerce</option>
							  <option>Engineering</option>
							  <option>Arts</option>
                    	</select>
                    </div>
                </div>
				
				<div class="form-group">
                	<label class="control-label col-lg-2">Branch Name <span style="color:red">*</span></label>
                    <div class="col-lg-10">
                    	<select class="form-control" name="std_branchname">
                    		<option>&nbsp;</option>
							  <option>Gulshan</option>
							  <option>Gulistan-e-Johar</option>
							  <option>Federal B-Area</option>
							  <option>Mosmyat</option>
                    	</select>
                    </div>
                </div>
				
                <div class="form-group">
                	<label for="name" class="control-label col-lg-2">Student Name</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="std_name" id="studentname" placeholder="Enter Student Name" title="Please enter Student Name" required/>
                	</div>
                </div>
				
                <div class="form-group">
                	<label for="name" class="control-label col-lg-2">Student Password</label>
                    <div class="col-lg-10">
                    	<input type="password" class="form-control" name="password" id="studentpwd" placeholder="Enter Student Password" title="Please enter Student Password" required/>
                    </div>
                </div>
				
                <div class="form-group">
                	<label for="name" class="control-label col-lg-2">Student Father Name</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="std_fathername" id="Fathername" placeholder="Enter Student Fathername" title="Please enter Student Fathername" required/>
                	</div>
                </div>
                
				<div class="form-group">
                	<label for="name" class="control-label col-lg-2">Student Email Address</label>
                    <div class="col-lg-10">
                    	<input type="email" class="form-control" name="std_email" id="email" placeholder="Enter Student Email Address" title="Please enter a valid email address required"/>
                	</div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="control-label col-lg-2">Student Contact No.</label>
                    <div class="col-lg-10">
                    	<input type="tel" class="form-control" name="std_phoneno" id="phone" placeholder="Enter Student Phone Number" title="Please enter a Phone Number" required/>
                	</div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="control-label col-lg-2">Guardian Contact No.</label>
                    <div class="col-lg-10">
                    	<input type="tel" class="form-control" name="std_guardianphoneno" id="guardianphoneno" placeholder="Enter Guardian Phone Number" title="Please enter a Guardian Phone Number" required/>
                	</div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="control-label col-lg-2">Guardian N.I.C No.</label>
                    <div class="col-lg-10">
                    	<input type="tel" class="form-control" name="std_guardiannicno" id="guardiannicno" placeholder="Enter Guardian N.I.C Number" title="Please enter a Guardian Nic Number" required/>
                	</div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="control-label col-lg-2">Country</label>
                    <div class="col-lg-10">
                    	<input type="text" class="form-control" name="std_country" id="country" placeholder="Enter your Country Name" title="Please enter Country Name" required/>
                	</div>
                </div>
				
				<div class="form-group">
                	<label class="control-label col-lg-2">City</label>
                    <div class="col-lg-10">
                    	<select class="form-control" name="std_city">
                    		<option>&nbsp;</option>
							  <option>Karachi</option>
							  <option>Lahore </option>
							  <option>Rawalplindi </option>
							  <option>Islamabad </option>
							  <option>Quetta </option>
							  <option>Peshawar</option>
							  <option>Hyderabad </option>
							  <option>Faislabad </option>
							  <option>Gujrat </option>
							  <option>Rahim Yar Khan </option>
							  <option>Khanewal </option>
							  <option>Sahiwaal </option>
                    	</select>
                    </div>
                </div>
				
				<div class="form-group">
                	<label class="control-label col-lg-2">Gender</label>
                	<div class="col-lg-10">
                    	<div class="radio">
                        	<label class="radio-inline"><input type="radio" name="gender" value="male" required/>Male</label>
                        	<label class="radio-inline"><input type="radio" name="gender" value="male" required//>FeMale</label>
                        	<label class="radio-inline"><input type="radio" name="gender" value="male" required//>Others</label>                                                        
                        </div>
                    </div>
                </div>
				
				<div class="form-group">
                	<label class="control-label col-lg-2">Nationality</label>
                    <div class="col-lg-10">
                    	<select class="form-control" name="std_nationality" id="nationality">
                    		<option>&nbsp;</option>
						  <option>Pakistani</option>
						  <option>Overseas</option>
                    	</select>
                    </div>
                </div>
				
				<div class="form-group">
                	<label class="control-label col-lg-2">Religion</label>
                    <div class="col-lg-10">
                    	<select class="form-control" name="std_religion" id="religion">
                    		<option>&nbsp;</option>
						  <option>Muslim</option>
						  <option>Non-Muslim</option>
                    	</select>
                    </div>
                </div>
				
				
				<div class="form-group">
                	<label for="name" class="control-label col-lg-2">Student Picture</label>
                    <div class="col-lg-10">
                    	<input type="file" class="form-control" name="image" id="studentpicture" title="Please enter Student Picture"/>
                	</div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="control-label col-lg-2">Date Of Birth</label>
                    <div class="col-lg-10">
                    	<input type="date" class="form-control" name="std_dob" id="dateofbirth" title="Please enter Student Date Of Birth" required/>
                	</div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="control-label col-lg-2">Date Of Admission</label>
                    <div class="col-lg-10">
                    	<input type="date" class="form-control" name="std_admissiondate" id="dateofadmission" title="Please enter Student Date Of Admission" required/>
                	</div>
                </div>
				
				<div class="form-group">
                	<label class="control-label col-lg-2">Date Of Academic Year</label>
                    <div class="col-lg-10">
                    	<select class="form-control" name="std_academicyear">
                    		<option>&nbsp;</option>
						  <option>2013 - 2014</option>
						  <option>2014 - 2015</option>
						  <option>2015 - 2016</option>
						  <option>2016 - 2017</option>
						  <option>2017 - 2018</option>
						  <option>2018 - 2019</option>
						  <option>2019 - 2020</option>
                    	</select>
                    </div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="control-label col-lg-2">Admission Fees<em style="font-size:12px;">(Only admission fees will be included in this field)</em><span style="color:red">*</span></label>
                    <div class="col-lg-10">
                    	<input type="tel" class="form-control" name="std_admissionfees" id="admissionfees" title="Please enter Student Admission Fees Only" required/>
                	</div>
                </div>
				
				<div class="form-group">
                	<label for="name" class="control-label col-lg-2">Address</label>
                    <div class="col-lg-10">
                    	<textarea cols="30" rows="5" class="form-control" name="std_address" required></textarea>
                	</div>
                </div>
				
                <div class="form-group">
                	<div class="col-lg-offset-2 col-lg-10">
                    	<input type="submit" name="submit" value="Submit" id="submit" class="btn btn-success btn-block">
						<input type="reset" name="reset" value="Reset" id="reset" class="btn btn-danger btn-block">
						
                    </div>
                </div>
            </form>
        </div>
		</div>
		
		
		
		<?php
		
	
	if(isset($_POST["submit"])){
		
		$rollno = $_POST["std_rollno"];
		$classname = $_POST["std_classname"];
		$section = $_POST["std_section"];
		$groupname = $_POST["std_groupname"];
		$branchname = $_POST["std_branchname"];
		$name = $_POST["std_name"];
		$password = $_POST["password"];
		$fathername = $_POST["std_fathername"];
		$email = $_POST["std_email"];
		$phoneno = $_POST["std_phoneno"];
		$guardianphoneno = $_POST["std_guardianphoneno"];
		$guardiannicno = $_POST["std_guardiannicno"];
		$country = $_POST["std_country"];
		$city = $_POST["std_city"];
		$gender = $_POST["gender"];
		$nationality = $_POST["std_nationality"];
		$religion = $_POST["std_religion"];
		
		$dob = $_POST["std_dob"];
		$admissiondate = $_POST["std_admissiondate"];
		$academicyear = $_POST["std_academicyear"];
		$admissionfees = $_POST["std_admissionfees"];
		$address = $_POST["std_address"];
		
		
			
$studentupload=mysqli_query($db,"INSERT INTO std_registrations(
student_id, 
student_classname, 
student_section, 
student_groupname, 
student_branchname, 
student_name, 
student_password, 
student_fathername, 
student_email,
student_phonenumber, 
student_guardianphonenumber, 
guardian_nicno,
student_countryname,
student_cityname, 
student_gender,  
student_nationality, 
student_religion,
student_dateofbirth,
student_dateofadmission, 
student_academicyear, 
student_admissionfees,
student_address
)VALUES ('$rollno', '$classname', '$section', '$groupname', '$branchname', '$name', '$password', '$fathername ', '$email', '$phoneno', '$guardianphoneno', '$guardiannicno', '$country', '$city', '$gender', '$nationality', '$religion', '$dob', '$admissiondate', '$academicyear', '$admissionfees', '$address')");
			
			
		if($studentupload)
		{
			echo "New Student Added Successfully!";
		}
		else{
			echo "Some Error Occured While Adding A New Student!";
		}
			
		}
	
?>

  
<?php include('includes/footer_admin.php'); ?>  
