<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Muhammadi The Educational School</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.jpg" type="image/x-icon">

    <!-- Font awesome -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">          
    <!-- Theme color -->
    <link id="switcher" href="../assets/css/theme-color/default-theme.css" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="../assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body> 

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  
                </div>
				
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  
				  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu" style="margin-left:360px;">
                <li><a href="admin_profile.php">My Profile</a></li>
				<li><a href="view_std_feedbacks.php">View Student Feedback's</a></li>
				<li><a href="online_registration_entries.php">Online Registered Entries</a></li>
				<li><a href="student_attendance.php">Student Attendance System</a></li>
				<li><a href="view_student_attendance.php">View Student Attendance</a></li>
				<li><a href="edit_web_slider.php">Edit Web Slider</a></li>
				<li><a href="edit_web_appeal_page.php">Edit Web Appeal Page</a></li>
				<li><a href="sms.php">SMS Service</a></li>
				<li><a href="logout.php">Log Out</a></li>
				</ul>
			 </li>
				  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->
  
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation" style="height:87px;">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <!-- <a class="navbar-brand" href="index.php"><i class="fa fa-university"></i><span>Muhammadi Logo</span></a> -->
          <!-- IMG BASED LOGO  -->
          <a class="navbar-brand" href="../index.php"><img src="../assets/img/logo.jpg" alt="logo" style="margin-top:-18px;"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
		  
            <li><a href="../index.php">Home</a></li>
			
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">View Information<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
				<li><a href="view_students.php">View Student</a></li>
				<li><a href="view_teachers.php">View Teacher</a></li>
				<li><a href="view_admins.php">View Admin</a></li>
				</ul>
            </li>
			
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Update Information<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
				<li><a href="edit_student.php">Update Student</a></li>
				<li><a href="edit_teacher.php">Update Teacher</a></li>
				<li><a href="edit_admin.php">Update Admin</a></li>
				</ul>
            </li>
			
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registrations<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
				<li><a href="std_registration.php">Student Registration</a></li>
				<li><a href="admin_registration.php">Admin Registration</a></li>
				<li><a href="teacher_registration.php">Teacher Registration</a></li>
				</ul>
            </li>
			
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Results<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
				<li><a href="results_view.php">View Student Results</a></li>
				</ul>
            </li>
			
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fees System<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
				<li><a href="add_fees_payment.php">Add Fees Payment</a></li>
				<!-- <li><a href="edit_fees_payment.php">Edit Fees Payment</a></li> -->
				<li><a href="view_paid_fees.php">View All Paid Fees</a></li>
				</ul>
            </li>
			
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
</br></br>