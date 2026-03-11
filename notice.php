<!--======================================================
    File Name   : notice.php
    Project     : Geek Infotech
    Description : Notice page
    Developed By: Rajat Kumar Swain
    Date Created: 30-10-2025
    Last Updated: <?php echo date("d-m-Y"); ?>
    Note         : This page defines the Notice Page of Geek Infotech.  
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
                    <h2>Notice</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">Notice</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->





    <!-- ===== Start of Main Wrapper Section ===== -->

    <!-- ======= Notice Board Enhanced Style Start ======= -->
<style>
.notice-board {
    background: #ffffff;
    border: 1px solid #e3e6eb;
    width: 85%;
    margin: 0 auto 50px;
    box-shadow: 0 8px 18px rgba(0,0,0,0.08);
    border-radius: 10px;
    overflow: hidden;
    transition: all 0.3s ease;
}
.notice-board:hover {
    box-shadow: 0 10px 22px rgba(0,0,0,0.12);
}
.notice-header {
    background: linear-gradient(90deg, #007bff 0%, #0056d1 100%);
    color: #fff;
    padding: 16px 24px;
    font-size: 22px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 10px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.notice-header i {
    font-size: 22px;
}

.notice-table {
    width: 100%;
    border-collapse: collapse;
}
.notice-table th {
    background: #f3f6fb;
    color: #a50f2d;
    text-align: left;
    padding: 14px 18px;
    font-size: 16px;
    font-weight: 600;
    border-bottom: 2px solid #dcdfe3;
}
.notice-table td {
    padding: 14px 18px;
    border-bottom: 1px solid #f0f0f0;
    background: #fff;
    vertical-align: middle;
    transition: background 0.3s ease;
}
.notice-table tr:hover td {
    background: #f9fbff;
}

.notice-title {
    font-size: 16px;
    color: #212529;
    font-weight: 500;
}

.notice-date {
    display: inline-block;
    background: #c71e32;
    color: white;
    text-align: center;
    font-weight: bold;
    padding: 8px 6px;
    border-radius: 6px;
    width: 50px;
    line-height: 1.1;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
}
.notice-date small {
    display: block;
    font-weight: normal;
    font-size: 11px;
    color: #ffdadf;
}

.notice-info {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
}

.notice-datetime {
    color: #555;
    font-size: 15px;
}

.notice-pdf {
    display: inline-block;
    text-decoration: none;
    transition: transform 0.2s ease;
}
.notice-pdf img {
    width: 26px;
    vertical-align: middle;
}
.notice-pdf:hover {
    transform: scale(1.15);
}

.view-all {
    text-align: right;
    padding: 14px 20px;
    font-weight: 600;
    background: #f9f9f9;
}
.view-all a {
    color: #007bff;
    text-decoration: none;
}
.view-all a:hover {
    text-decoration: underline;
}
</style>
<!-- ======= Notice Board Enhanced Style End ======= -->

<section class="search-jobs ptb80" id="version4">
<div class="container">

    <div class="notice-board">
        <div class="notice-header"><i class="fa fa-bullhorn"></i> 🎓 Institute Notice Board – Latest Announcements & Circulars </div>

        <table class="notice-table">
            <thead>
                <tr>
                    <th width="60%">Notice Board</th>
                    <th>News & Events</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $noticeDir = __DIR__ . "/notices/";

                if (is_dir($noticeDir)) {
                    $files = array_diff(scandir($noticeDir), array('.', '..'));
                    $pdfFiles = array_filter($files, function($file) use ($noticeDir) {
                        return strtolower(pathinfo($noticeDir . $file, PATHINFO_EXTENSION)) === 'pdf';
                    });

                    if (count($pdfFiles) > 0) {
                        foreach ($pdfFiles as $file) {
                            $filePath = "notices/" . $file;
                            $fileTime = filemtime($noticeDir . $file);
                            $day = date("d", $fileTime);
                            $month = date("M", $fileTime);
                            $yearShort = date("y", $fileTime);
                            $dateDisplay = date("d M Y, h:i A", $fileTime);

                            echo '
                            <tr>
                                <td><div class="notice-title">'.htmlspecialchars(basename($file, ".pdf")).'</div></td>
                                <td>
                                    <div class="notice-info">
                                        <div style="display:flex;align-items:center;gap:12px;">
                                            <div class="notice-date">'.$day.'<small>'.$month.' '.$yearShort.'</small></div>
                                            <div class="notice-datetime">'.$dateDisplay.'</div>
                                        </div>
                                        <a href="'.$filePath.'" class="notice-pdf" target="_blank" title="Download PDF">
                                            <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF">
                                        </a>
                                    </div>
                                </td>
                            </tr>';
                        }
                    } else {
                        echo "<tr><td colspan='2' style='text-align:center;padding:20px;'>No notices available.</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='2' style='text-align:center;padding:20px;color:red;'>Notice folder not found!</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <div class="view-all"><a href="#">View All ...</a></div>
    </div>

</div>
</section>

<!-- ===== End of Main Wrapper Section ===== -->

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