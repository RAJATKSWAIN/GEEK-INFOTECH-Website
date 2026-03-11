<!--======================================================
    File Name   : geekachievers.php 
    Project     : Geek Infotech
    Description : Geek Achievers Page
    Developed By: Rajat Kumar Swain
    Date Created: 30-10-2025
    Last Updated: <?php echo date("d-m-Y"); ?>
    Note         : This page defines the Geek Achievers of Geek Infotech Aluminas.  
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
  .container {
    padding-top: 25px;
    padding-bottom: 10px;
  }

  .page-title {
    text-align: center;
    font-size: 32px;
    font-weight: 600;
    color: #007bff;
    margin-bottom: 10px;
  }

  .text-center.mb-5 {
    font-size: 16px;
    color: #555;
  }

  .card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 30px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease;
  }

  .card:hover {
    transform: translateY(-5px);
  }

  .card img.img-fluid {
    width: 100%;
    height: auto;
    border-radius: 6px;
    margin-bottom: 15px;
    object-fit: cover;
  }

  .card h4 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #333;
  }

  .card p {
    font-size: 15px;
    margin-bottom: 5px;
    color: #444;
  }

  .card blockquote {
    font-size: 14px;
    font-style: italic;
    color: #666;
    margin-top: 10px;
    border-left: 4px solid #007bff;
    padding-left: 10px;
  }
   
  .section-intro p {
  font-size: 18px;
  font-weight: 500;
  color: #444;
  margin-bottom: 10px;
}

.text-gold {
  color: #d4af37; /* classic golden tone */
  margin: 0 8px;
}

.highlight-text {
  background: linear-gradient(to right, #f5e8c4, #d4af37, #f5e8c4);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-weight: 600;
}

.gold-divider {
  border: 0;
  height: 3px;
  width: 120px;
  margin: 0 auto;
  background: linear-gradient(to right, #f5e8c4, #d4af37, #f5e8c4);
  border-radius: 2px;
}
</style>
    
</head>

<body>
    
    <?php include('datetime.php'); ?> 
    
    
    
    <!-- =============== Start of Header 1 Navigation =============== -->
    
    <?php include 'header.php'; ?>

    <!-- =============== End of Header 1 Navigation ================= -->
    
    
    <!-- =============== Start of Page Header 1 Section =============== -->
    <section class="page-header">
        <div class="container">

            <!-- Start of Page Title -->
            <div class="row">
                <div class="col-md-12">
                    <h2>Meet Our Achievers</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">Geek Achievers</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->
   
    <!--=============  Start Of Story Display Section ================-->
    <?php
include 'db.php';
$result = $conn->query("SELECT * FROM GEEKINFO_STORIES ORDER BY CREATED_AT DESC");
?>

  <div class="container">
    <h2 class="page-title">Meet Our Achievers</h2>
    <p class="text-center mb-5">Meet the proud alumni of Geek Infotech who transformed their skills into real-world success. From classroom to career, their journeys reflect 											dedication, mentorship, and breakthrough achievements. These inspiring stories light the path for future innovators ready to rise.</p><br>
    	<div class="section-intro text-center mb-5">
  		<p>
    	<i class="fas fa-star text-gold"></i>
    	<span class="highlight-text">Their stories inspire the next generation!</span>
    	<i class="fas fa-star text-gold"></i>
  		</p>
  		<hr class="gold-divider">
	</div>
   
    <div class="row">
      <?php while($row = $result->fetch_assoc()): ?>
        <div class="col-md-4 col-sm-6">
          <div class="card">
            <?php if (!empty($row['PHOTO']) && file_exists("uploads/" . $row['PHOTO'])): ?>
              <img src="uploads/<?= htmlspecialchars($row['PHOTO']) ?>" alt="<?= htmlspecialchars($row['NAME']) ?>" class="img-fluid rounded-circle mx-auto d-block" style="width:120px; 						height:145px; object-fit:cover; margin-top:15px;">
             <?php endif; ?>
            <h4><?= htmlspecialchars($row['NAME']) ?></h4>
            <p><strong>Course:</strong> <?= htmlspecialchars($row['COURSE']) ?></p>
            <p><strong>Company:</strong> <?= htmlspecialchars($row['COMPANY']) ?></p>
            <blockquote><?= nl2br(htmlspecialchars($row['STORY'])) ?></blockquote>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
     
    <!--=============  End Of Story Display Section ================-->
    
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