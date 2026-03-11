<!--======================================================
    File Name   : recruittedstudents.php
    Project     : Geek Infotech
    Description : Recruitted Students page
    Developed By: Rajat Kumar Swain
    Date Created: 30-10-2025
    Last Updated: <?php echo date("d-m-Y"); ?>
    Note         : This page defines the Recruitted Students information of Geek Infotech.  
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
                    <h2>RECRUITTED STUDENTS</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">RECRUITTED STUDENTS</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->





   <!-- =============== Start of Staff Information Section =============== -->
	
    <!-- ===== Start of Staff Information (card/grid) - added by Rajat Kumar on 28-10-2025 ===== -->
	
	      <!--=====Start of style css for Staff grid wrapper =====--!>
			<style>
			/* Staff grid wrapper */
			.staff-info-section {
			padding: 60px 0;
			background: #fff;
			}
			
			/* section header */
			.staff-info-section h3 {
			font-size: 34px;
			font-weight: 600;
			margin-bottom: 8px;
			}
			.staff-info-section p.lead {
			color: #777;
			margin-bottom: 30px;
			}
			
			/* card */
			.staff-card {
			background: #ffffff;
			border-radius: 6px;
			overflow: hidden;
			box-shadow: 0 6px 18px rgba(0,0,0,0.06);
			transition: transform .18s ease, box-shadow .18s ease;
			height: 100%;
			display: flex;
			flex-direction: column;
			}
			.staff-card:hover {
			transform: translateY(-6px);
			box-shadow: 0 10px 28px rgba(0,0,0,0.10);
			}
			
			/* photo wrapper keeps fixed aspect */
			.staff-photo {
			width: 100%;
			height: 260px;              /* uniform image height */
			background: #f4f4f4;
			display: flex;
			align-items: center;
			justify-content: center;
			position: relative;
			overflow: hidden;
			}
			.staff-photo img {
			width: 100%;
			height: 100%;
			object-fit: cover;          /* ensures uniform cropping */
			display: block;
			}
			
			/* fallback "no photo" box */
			.staff-photo.no-photo {
			background: #f0f0f0;
			color: #555;
			font-weight: 600;
			font-size: 14px;
			letter-spacing: 0.6px;
			display: flex;
			align-items: center;
			justify-content: center;
			text-transform: uppercase;
			}
			
			/* content area */
			.staff-info {
			padding: 18px;
			flex: 1;
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			}
			.staff-info h5 {
			margin: 0 0 6px 0;
			font-size: 18px;
			font-weight: 600;
			color: #222;
			}
			.staff-info .designation {
			margin: 0 0 6px 0;
			color: #9b9b9b;
			font-size: 14px;
			}
			.staff-info .dept {
			margin: 0 0 10px 0;
			color: #777;
			font-size: 14px;
			}
			.staff-info .contact {
			margin: 8px 0 0 0;
			color: #d33a68;
			font-weight: 600;
			font-size: 14px;
			display: inline-flex;
			align-items: center;
			gap: 8px;
			}
			
			/* small responsive tweaks */
			@media (max-width: 575px) {
			.staff-photo { height: 200px; }
			.staff-info h5 { font-size: 16px; }
			}
			
			/* footer fix (make footer layout consistent) */
			.footer1 {
			clear: both;
			position: relative; /* keep normal flow */
			width: 100%;
			box-sizing: border-box;
			}
			</style>
			
		 <!--=============End of style css for Staff grid wrapper  ===============-->

		<section class="staff-info-section">
			<div class="container">
				<div class="row text-center mb-4">
				<div class="col-md-12">
					<h3>Our Recruited Students</h3>
					<p class="lead">Celebrating our successful graduates placed in top tech companies with competitive packages and promising careers.</p>
				</div>
				</div>
			
				<div class="row">
				<!-- Student card 1 -->
				<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
					<div class="staff-card">
					<div class="staff-photo">
						<img src="images/students/ajitswain.jpg" alt="Ajit Kumar Swain" onerror="handleMissingPhoto(this)">
					</div>
					<div class="staff-info">
						<div>
						<h5>Ajit Kumar Swain</h5>
						<p class="designation">RIA</p>
						<p class="dept">Package: ₹7.5 LPA</p>
						</div>
						<div class="contact">🎓 Backend Database Developer</div>
					</div>
					</div>
				</div>
			
				<!-- Student card 2 -->
				<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
					<div class="staff-card">
					<div class="staff-photo">
						<img src="images/students/student2.jpg" alt="Sneha Patra" onerror="handleMissingPhoto(this)">
					</div>
					<div class="staff-info">
						<div>
						<h5>Sneha Patra</h5>
						<p class="designation">TCS</p>
						<p class="dept">Package: ₹5.0 LPA</p>
						</div>
						<div class="contact">🎓 Data Engineering</div>
					</div>
					</div>
				</div>
			
				<!-- Student card 3 -->
				<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
					<div class="staff-card">
					<div class="staff-photo">
						<img src="images/students/narayan.png" alt="Narayan Nayak" onerror="handleMissingPhoto(this)">
					</div>
					<div class="staff-info">
						<div>
						<h5>Narayan Nayak</h5>
						<p class="designation">Agreeya Solution Pvt. Ltd. </p>
						<p class="dept">Package: ₹5.0 LPA</p>
						</div>
						<div class="contact">🎓 Database Developer</div>
					</div>
					</div>
				</div>
			
				<!-- Student card 4 -->
				<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
					<div class="staff-card">
					<div class="staff-photo">
						<img src="images/students/student4.jpg" alt="Priya Sahu" onerror="handleMissingPhoto(this)">
					</div>
					<div class="staff-info">
						<div>
						<h5>Priya Sahu</h5>
						<p class="designation">Capgemini</p>
						<p class="dept">Package: ₹3.8 LPA</p>
						</div>
						<div class="contact">🎓 Backend Development</div>
					</div>
					</div>
				</div>
			
				<!-- Student card 5 -->
				<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
					<div class="staff-card">
					<div class="staff-photo">
						<img src="images/students/student5.jpg" alt="Manoj Behera" onerror="handleMissingPhoto(this)">
					</div>
					<div class="staff-info">
						<div>
						<h5>Manoj Behera</h5>
						<p class="designation">Deloitte</p>
						<p class="dept">Package: ₹7.2 LPA</p>
						</div>
						<div class="contact">🎓 Data Engineering</div>
					</div>
					</div>
				</div>
			
				<!-- Student card 6 -->
				<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
					<div class="staff-card">
					<div class="staff-photo">
						<img src="images/students/student6.jpg" alt="Ritika Mohanty" onerror="handleMissingPhoto(this)">
					</div>
					<div class="staff-info">
						<div>
						<h5>Ritika Mohanty</h5>
						<p class="designation">Wipro</p>
						<p class="dept">Package: ₹4.5 LPA</p>
						</div>
						<div class="contact">🎓 Backend Development</div>
					</div>
					</div>
				</div>
			
				<!-- Student card 7 -->
				<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
					<div class="staff-card">
					<div class="staff-photo">
						<img src="images/students/student7.jpg" alt="Sourav Das" onerror="handleMissingPhoto(this)">
					</div>
					<div class="staff-info">
						<div>
						<h5>Sourav Das</h5>
						<p class="designation">EY</p>
						<p class="dept">Package: ₹9.0 LPA</p>
						</div>
						<div class="contact">🎓 Data Engineering</div>
					</div>
					</div>
				</div>
			
				<!-- Student card 8 -->
				<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
					<div class="staff-card">
					<div class="staff-photo">
						<img src="images/students/student8.jpg" alt="Pallavi Mishra" onerror="handleMissingPhoto(this)">
					</div>
					<div class="staff-info">
						<div>
						<h5>Pallavi Mishra</h5>
						<p class="designation">Tech Mahindra</p>
						<p class="dept">Package: ₹3.6 LPA</p>
						</div>
						<div class="contact">🎓 Backend Development</div>
					</div>
					</div>
				</div>
				</div> <!-- row -->
			</div> <!-- container -->
		</section>
		
		<script>
		/* Replace broken images with a 'NO PHOTO AVAILABLE' box */
		function handleMissingPhoto(imgEl) {
		try {
			// remove the broken img element
			var parent = imgEl.parentElement;
			imgEl.remove();
		
			// add fallback element
			var fallback = document.createElement('div');
			fallback.className = 'staff-photo no-photo';
			fallback.innerText = 'NO PHOTO AVAILABLE';
			parent.appendChild(fallback);
		} catch(e){ console.error(e); }
		}
		
		/* Optional: ensure all staff-photo wrappers are properly sized if images load later */
		window.addEventListener('load', function(){
		document.querySelectorAll('.staff-photo img').forEach(function(img){
			if(!img.complete || img.naturalWidth === 0){
			// will be handled by onerror if broken
			}
		});
		});
		</script>
		
		<!-- ===== End Staff grid block ===== -->

    <!-- =============== End of Staff Information Section =============== -->
                        


<!-- Database Connection Start  -->


<!-- Database Connection End  -->

 
                        <!-- End of Product 1 -->



                    </div>
                    <!-- End of Products -->



                </div>
                <!-- End of Shop Product Wrapper -->

            </div>
        </div>
    </section>
    <!-- ===== End of Shop Section ===== -->



    


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