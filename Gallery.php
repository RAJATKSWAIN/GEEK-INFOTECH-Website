<!--======================================================
    File Name   : Gallery.php
    Project     : Geek Infotech
    Description : Gallery page
    Developed By: Rajat Kumar Swain
    Date Created: 30-10-2025
    Last Updated: <?php echo date("d-m-Y"); ?>
    Note         : This page defines the Gallery of Geek Infotech.  --need 
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
                    <h2>Gallery</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->





    <!-- ===== Start of Shop Section ===== -->
    <section class="shop ptb80">
        <div class="container">
            <div class="row">

                <!-- Start of Shop Product Wrapper -->
                <div class="col-md-12 col-xs-12 shop-products-wrapper">

                    <!-- Start of Products -->
                    <div class="row">

                        <!-- Start of Product 1 -->
                        
      <!-- ===== Start of Gallery Section added by Rajat kumar===== -->
		<section class="shop ptb80">
			<div class="container-fluid">
				<div class="row text-center">
					<h2>Our Institute Gallery</h2>
					<p>Glimpses of campus life, events, and infrastructure</p>
				</div>
		
				<!-- Image Slider -->
				<div id="collegeGallery" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#collegeGallery" data-slide-to="0" class="active"></li>
						<li data-target="#collegeGallery" data-slide-to="1"></li>
						<li data-target="#collegeGallery" data-slide-to="2"></li>
						<li data-target="#collegeGallery" data-slide-to="3"></li>
						<li data-target="#collegeGallery" data-slide-to="4"></li>
						<li data-target="#collegeGallery" data-slide-to="5"></li>
                        <li data-target="#collegeGallery" data-slide-to="6"></li>
                        <li data-target="#collegeGallery" data-slide-to="7"></li>
                        <li data-target="#collegeGallery" data-slide-to="8"></li>
                        <li data-target="#collegeGallery" data-slide-to="9"></li>
                        <li data-target="#collegeGallery" data-slide-to="10"></li>
                        <li data-target="#collegeGallery" data-slide-to="11"></li>
					</ol>
		
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
		
						<div class="item active">
							<img src="images/gallery/geek1.jpg" alt="Infotech Campus" class="img-responsive center-block">
							<div class="carousel-caption">
								<h3>Infotech Campus</h3>
							</div>
						</div>
                        
                        <div class="item">
							<img src="images/gallery/geek2.jpg" alt="Infotech Campus" class="img-responsive center-block">
							<div class="carousel-caption">
								<h3>Infotech Campus</h3>
							</div>
						</div>
                        
                        <div class="item">
							<img src="images/gallery/geek3.jpg" alt="Infotech Campus" class="img-responsive center-block">
							<div class="carousel-caption">
								<h3>Infotech Campus</h3>
							</div>
						</div>
		
		
						<div class="item">
							<img src="images/gallery/geek4.jpg" alt="Infotech Classrooms" class="img-responsive center-block">
							<div class="carousel-caption">
								<h3>Infotech Classrooms</h3>
							</div>
						</div>
                        
                        <div class="item">
							<img src="images/gallery/geek111.jpg" alt="Institute Classrooms" class="img-responsive center-block">
							<div class="carousel-caption">
								<h3>Institute Classrooms</h3>
							</div>
						</div>
                        
		
						<div class="item">
							<img src="images/gallery/geek6.jpg" alt="Cultural Event" class="img-responsive center-block">
							<div class="carousel-caption">
								<h3>Infotech Picnic</h3>
							</div>
						</div>
                        
                        <div class="item">
							<img src="images/gallery/geek7.jpg" alt="Cultural Event" class="img-responsive center-block">
							<div class="carousel-caption">
								<h3> Infotech Picnic</h3>
							</div>
						</div>
		
						<div class="item">
							<img src="images/gallery/geek8.jpg" alt="Cultural Event" class="img-responsive center-block">
							<div class="carousel-caption">
								<h3> Infotech Ganesh Puja</h3>
							</div>
						</div>
                        
                        <div class="item">
							<img src="images/gallery/geek9.jpg" alt="Cultural Event" class="img-responsive center-block">
							<div class="carousel-caption">
								<h3> Infotech Ganesh Puja</h3>
							</div>
						</div>
                        
                        <div class="item">
							<img src="images/gallery/geek11.jpg" alt="Infotech Event" class="img-responsive center-block">
							<div class="carousel-caption">
								<h3>Plant a Tree By Geek Infotech </h3>
							</div>
						</div>
                        
                        <div class="item">
							<img src="images/gallery/geek10.jpg" alt="Infotech Event" class="img-responsive center-block">
							<div class="carousel-caption">
								<h3>GPL Session I & II </h3>
							</div>
						</div>
                        
                        
		
					<!-- Controls -->
					<a class="carousel-control left" href="#collegeGallery" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control right" href="#collegeGallery" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<!-- End of Image Slider -->
			</div>
		</section>
		
		<!-- ===== Styling Enhancements ===== -->
		<style>
			#collegeGallery {
				max-width: 100%;
				margin: 0 auto;
			}
			
            .carousel-inner > .item > img {
    			width: 100%;
    			height: 600px;
    			object-fit: cover;
    			padding: 15px; /* space between image and frame */

    	   		/* Frame effect using background */
    			background: linear-gradient(135deg, #004080, #ffffff, #004080);
    			border-radius: 30px;
    			box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
			}

			.carousel-caption {
				background: rgba(0, 0, 0, 0.6);
				padding: 10px 20px;
				border-radius: 5px;
				bottom: 40px;
			}
			.carousel-caption h3 {
				font-size: 24px;
				color: #fff;
				margin: 0;
			}
			.carousel-control.left,
			.carousel-control.right {
				width: 5%;
				top: 50%;
				transform: translateY(-50%);
				font-size: 40px;
				color: #fff;
				background: none;
			}
            
		</style>
	 <!-- ===== End of Gallery Section added by Rajat kumar===== -->
                        


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
                    <a href="#" class="btn btn-blue btn-effect">More..</a>
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