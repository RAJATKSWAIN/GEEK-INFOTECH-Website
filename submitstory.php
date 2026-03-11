<!--======================================================
    File Name   : submitstory.php
    Project     : Geek Infotech
    Description : submit story  Page
    Developed By: Rajat Kumar Swain
    Date Created: 30-10-2025
    Last Updated: <?php echo date("d-m-Y"); ?>
    Note         : This page defines the Success story of Geek Infotech Aluminas.  
=======================================================-->
<?php include_once("optimize.php"); ?>

<!DOCTYPE html>

<html lang="en">
    
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile viewport optimized -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Meta Tags - SEO Optimized (No Cloud Topics) -->
    <meta name="description" content="Geek Infotech provides industry-ready IT training in Data Engineering, SQL, PL/SQL, Python, and Data Pipeline Development. We focus on practical, 									project-based learning and career growth.">
    <meta name="keywords" content="Geek Infotech, data engineering training, SQL course, PL/SQL, Python programming, database development, data pipeline, data integration, ETL, IT 									   institute in Odisha, professional IT courses, software training center">
    <meta name="author" content="Rajat Kumar Swain - Geek Infotech Team">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    
    <meta name="google-site-verification" content="OGgJ7KmPRD0COB1O_mPOFuZHO5a6rfkTo6akCVd-mk4">
   
    <!--google-site-verification=OGgJ7KmPRD0COB1O_mPOFuZHO5a6rfkTo6akCVd-mk4 -->

    <!-- Website Title -->
    <title>Geek Infotech | Data Engineering & Database Development Training</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700,800|Varela+Round" rel="stylesheet">

    <!-- CSS links -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/common.css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<link rel="preconnect" href="https://chatling.ai"> <!--GeekNova chatbot faster -->
    
    <?php include __DIR__ . '/schema.php'; ?>  <!-- for Better Search Engine -->
	
</head>
  
  <style>
  form {
    margin-bottom: 60px; /* Adds space before next section */
  }

  label {
    display: block;
    margin-top: 20px;
    font-weight: 600;
    color: #333;
  }

  input[type="text"],
  textarea,
  input[type="file"] {
    width: 100%;
    padding: 12px 15px;
    margin-top: 8px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 15px;
    background-color: #fdfdfd;
    box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);
    transition: border-color 0.3s ease;
  }

  input[type="text"]:focus,
  textarea:focus,
  input[type="file"]:focus {
    border-color: #007bff;
    outline: none;
  }

  textarea {
    resize: vertical;
    min-height: 120px;
  }

 .story-submit {
  background-color: #007bff;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.story-submit:hover {
  background-color: #0056b3;
}
      
</style>
    
</head>

<body>
    
    <?php include('datetime.php'); ?> 
    
    
    
    <!-- =============== Start of Header 1 Navigation =============== -->
    <header class="header1">
        <nav class="navbar navbar-default navbar-static-top fluid_header centered">
            <div class="container">
                
                <!-- Logo -->
                <!-- Logo Section -->
				<div class="col-md-2 col-sm-6 col-xs-8 nopadding">
    				<a class="navbar-brand" href="index.php">
        			<img src="images/geeklogomain.png" alt="Geek Infotech Logo" style="max-width:100%; height:100%;">
    				</a>
				</div>

                <!-- ======== Start of Main Menu ======== -->
                <div class="col-md-10 col-sm-6 col-xs-4 nopadding">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle toggle-menu menu-right push-body" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Start of Main Nav -->
                    <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="main-nav">
                        <ul class="nav navbar-nav pull-right">

                            <!-- Mobile Menu Title -->
                            <li class="mobile-title">
                                <h4>main menu</h4></li>

                            <!-- Simple Menu Item -->
                            <li class="dropdown simple-menu active">
                                <a href="index.php" class="dropdown-toggle" ><i class="fa fa-home"></i> Home</a>                               
                            </li>
                            <li class="dropdown simple-menu ">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">About<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                <li><a href="aboutus.php">About Us</a></li>
                                    <li><a href="MissionStatementObjective.php">Vision & Mission</a> </li>                                                                  
                                    <li><a href="contact.php">Contact Us</a></li> 
                                    <li><a href="message.php">Message</a></li> 
                                    <li><a href="Gallery.php">Gallery</a></li> 
                                   <!-- <li><a href="Documents.php" class="dropdown-toggle" > Documents</a> </li> -->
                                </ul>
                            </li>
                            <li class="dropdown simple-menu ">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Courses<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="bca.php">Backend Development Courses</a></li>
                                    <li><a href="bse.php">Data Engineering Courses</a></li> 
                                    
                                </ul>
                            
                            <li class="dropdown simple-menu ">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Admission<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                <li><a href="EnquireDownloadBrochure.php">Enquire & Download Brochure</a></li>
                                <li><a href="DownloadAdmissionForm.php">Download Admission Form</a></li>
                                <li><a href="admissionlist.php">Admission List</a></li>   
                                </ul>
                            </li>
                            <li class="dropdown simple-menu ">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Placements<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                <li><a href="recrutingcompanies.php">Recruting Companies</a></li>
                                <li><a href="recruittedstudents.php">Recruitted Students</a></li>
                                <li><a href="Questions.php">Questions</a></li> 
                                <li><a href="Career.php">Career</a></li>  
                                </ul>
                                
                            <li class="dropdown simple-menu">
    							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"> Geek Achievers <i class="fa fa-angle-down"></i></a>
    							<ul class="dropdown-menu" role="menu">
        						<li><a href="submitstory.php">Share Your Journey</a></li>
        						<li><a href="geekachievers.php">Meet Our Achievers</a></li>
    							</ul>
							</li>
                            

                            <!-- Mega Menu Item -->
                            <li class="dropdown simple-menu ">
                                                              
                            </li>
                            <!-- Login Menu Item -->
                            <li class="menu-item login-btn">
                                <a id="modal_trigger" href="notice.php" role="button"><i class="fa fa-file"></i>&nbsp;&nbsp; Notice</a>
                            </li>

                        </ul>
                    </div>
                    <!-- End of Main Nav -->
                </div>
                <!-- ======== End of Main Menu ======== -->

            </div>
        </nav>
    </header>
    <!-- =============== End of Header 1 Navigation =============== -->


    <!-- =============== End of Header 1 Navigation =============== -->
    
    <!-- =============== Start of Page Header 1 Section =============== -->
    <section class="page-header">
        <div class="container">

            <!-- Start of Page Title -->
            <div class="row">
                <div class="col-md-12">
                    <h2>Share Your Journey</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">Share Your Journey</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->
   
    <!--================  Start Of Story Post =========================-->
     <section class="about-us ptb80">
  <div class="container">
    <h2>Share Your Journey</h2>
    <p style="text-align:center;">Tell us how Geek Infotech helped shape your success. Your story may inspire future achievers!</p>

    <form action="submitstory-process.php" method="POST" enctype="multipart/form-data">
      <label for="name">Your Name</label>
      <input type="text" name="name" id="name" required>

      <label for="course">Course Completed <span style="font-weight:normal;">(Please enter in the format: Course Name – Batch – Year, e.g., Database Developer – 6th Batch – 2020)</span>		  </label>
      <input type="text" name="course" id="course" required>

      <label for="company">Placed At / Achievement</label>
      <input type="text" name="company" id="company" required>

      <label for="story">Your Success Story</label>
      <textarea name="story" id="story" rows="6" required></textarea>

      <label for="photo">Upload Your Photo <span style="font-weight:normal;">(Optional – Maximum file size: 300KB. Please upload a clear, professional image.)</span></label>
      <input type="file" name="photo" id="photo" accept="image/*">
      <form action="submitstory-process.php" method="POST" enctype="multipart/form-data">
  	  <!-- form fields -->
      <button type="submit" class="story-submit">Submit Story</button>
</form>

    </form>
  </div>
    </section>
    <!--================  Start Of Story Post =========================-->
    
    <!-- ===== Start of Get Started Section ===== -->
    <section class="get-started ptb40">
        <div class="container">
            <div class="row ">

                <!-- Column -->
                <div class="col-md-10 col-sm-9 col-xs-12">
                    <h3 class="text-white">Recruting Companies</h3>
                </div>
                <!-- Column -->
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <a href="#" class="btn btn-blue btn-effect">More..</a>
                </div>

            </div>
        </div>
    </section>  
    
    <!-- =============== Start of Footer 1 =============== -->
    


    <!-- ===== Start of Partners ===== -->
    <section class="ptb40" id="partners">
        <div class="container">
            <!-- Start of Owl Slider -->
            <div class="owl-carousel partners-slider">
                <!-- Partner Logo -->
                    <div class="item">
                        <a href="#"><img src="images/rcompanies/aa1.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="images/rcompanies/aa2.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="images/rcompanies/aa3.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="images/rcompanies/aa4.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="images/rcompanies/aa5.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="images/rcompanies/aa6.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="images/rcompanies/aa7.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="images/rcompanies/aa8.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="images/rcompanies/aa9.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="images/rcompanies/aa10.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="images/rcompanies/aa11.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="images/rcompanies/aa12.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="images/rcompanies/aa13.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="images/rcompanies/aa14.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="images/rcompanies/aa15.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="images/rcompanies/aa16.png" alt=""></a>
                    </div>

                   
                <!-- Partner Logo -->
            </div>
            <!-- End of Owl Slider -->
        </div>
    </section>
    <!-- ===== End of Partners ===== -->





    <!-- =============== Start of Footer 1 =============== -->
       <?php include 'footer.php'; ?>
    <!-- =============== End of Footer 1 =============== -->





    <!-- ===== Start of Back to Top Button ===== -->
    <a href="#" class="back-top"><i class="fa fa-chevron-up"></i></a>
    <!-- ===== End of Back to Top Button ===== -->






    <!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/jquery.ajaxchimp.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/tinymce/tinymce.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/custom.js"></script>
    
</body>
</html>