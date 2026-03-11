
<!--======================================================
    File Name   : MissionStatementObjective.php
    Project     : Geek Infotech
    Description : Mission Statement & Objective Page   --need to menation page name of php  for every page
    Developed By: Rajat Kumar Swain
    Date Created: 30-10-2025
    Last Updated: <?php echo date("d-m-Y"); ?>
    Note         : This page defines the vision and mission of Geek Infotech.  --need 
=======================================================-->

<?php include_once("optimize.php"); ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    
        <!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-QNFDM2JJPR"></script>
	<script>
  	window.dataLayer = window.dataLayer || [];
  	function gtag(){dataLayer.push(arguments);}
  	gtag('js', new Date());

  	gtag('config', 'G-QNFDM2JJPR');
	</script>
    
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
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<link rel="preconnect" href="https://chatling.ai"> <!--GeekNova chatbot faster -->
    
    <?php include __DIR__ . '/schema.php'; ?>  <!-- for Better Search Engine -->
	
</head>

<body>
<?php include('datetime.php'); ?>  

    <!-- =============== Start of Header 1 Navigation =============== -->
    
    <?php include 'header.php'; ?>


    <!-- =============== End of Header 1 Navigation =============== -->





    <!-- =============== Start of Page Header 1 Section =============== -->
    <section class="page-header">
        <div class="container">

            <!-- Start of Page Title -->
            <div class="row">
                <div class="col-md-12">
                    <h2>Admission List</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">Admission Lis</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->


    <!-- ===== Start of Shop Cart Section ===== -->
    

<!-- ===== Start of Admission & Passout Summary Section added by Rajat Kumar ===== -->

<section class="shop ptb80">
  <div class="container-fluid" style="max-width: 1200px; margin: 0 auto;">
    <div class="row">
      <div class="col-md-12 cart-wrapper">

        <!-- Start of Admission Table -->
        <div style="width: 100%; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
          <h3 style="text-align: center; margin-bottom: 20px; color: #0056b3;">Admission Summary</h3>
          <div style="overflow-x: auto; width: 100%;">
            <table style="width: 100%; border-collapse: collapse; text-align: center; font-family: Arial, sans-serif;">
              <thead>
                <tr style="background-color: #0056b3; color: #fff;">
                  <th style="padding: 14px; font-size: 18px;">Course Name</th>
                  <th style="padding: 14px; font-size: 18px;">Batch Frequency</th>
                  <th style="padding: 14px; font-size: 18px;">Students per Batch</th>
                  <th style="padding: 14px; font-size: 18px;">Study Mode</th>
                  <th style="padding: 14px; font-size: 18px;">Admission Session</th>
                  <th style="padding: 14px; font-size: 18px;">Course Duration</th>
                </tr>
              </thead>
              <tbody>
                <tr style="background-color: #f9f9f9;">
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">Backend Development</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">3 batches/week</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">30</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">Regular / Weekend </td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">2025</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">4–6 Months</td>
                </tr>
                <tr>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">Data Engineering</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">2 weekend batches</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">25</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">Weekend / Online</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">2025</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">4–6 Months</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- End of Admission Table -->

        <!-- Start of Passout Summary Table -->
        <div style="width: 100%; margin: 40px auto; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
          <h3 style="text-align: center; margin-bottom: 20px; color: #0056b3;">Passout Summary (2019–2024)</h3>
          <div style="overflow-x: auto; width: 100%;">
            <table style="width: 100%; border-collapse: collapse; text-align: center; font-family: Arial, sans-serif;">
              <thead>
                <tr style="background-color: #0056b3; color: #fff;">
                  <th style="padding: 14px; font-size: 18px;">Course Name</th>
                  <th style="padding: 14px; font-size: 18px;">Average Annual Enrollment</th>
                  <th style="padding: 14px; font-size: 18px;">Total Graduates</th>
                  <th style="padding: 14px; font-size: 18px;">Placement Rate (%)</th>
                  <th style="padding: 14px; font-size: 18px;">Average Package (INR)</th>
                  <th style="padding: 14px; font-size: 18px;">Top Recruiters</th>
                </tr>
              </thead>
              <tbody>
                <tr style="background-color: #f9f9f9;">
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">Backend Development</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">85</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">500+</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">92%</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">₹6.0 LPA</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">Infosys, TCS, Wipro, Capgemini, Tech Mahindra, Mindtree, HCL, BirlaSoft Etc..</td>
                </tr>
                <tr>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">Data Engineering</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">40</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">200+</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">90%</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">₹8.5 LPA</td>
                  <td style="padding: 12px; border-bottom: 1px solid #ddd;">Deloitte, Accenture, Cognizant, Tech Mahindra, L&T, KPMG, HCL Etc... </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- End of Passout Summary Table -->

      </div>
    </div>
  </div>
</section>

<!-- ===== End of Admission & Passout Summary Section added by Rajat Kumar ===== -->

    
    <!-- ===== End of Shop Cart Section ===== -->
    
    
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
                    <a href="#" class="btn btn-blue btn-effect">More...</a>
                </div>

            </div>
        </div>
    </section>
    <!-- ===== End of Get Started Section ===== -->









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





    <!-- ===== Start of Login Pop Up div ===== -->
    
    <!-- cd-user-modal -->
    <!-- ===== End of Login Pop Up div ===== -->





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