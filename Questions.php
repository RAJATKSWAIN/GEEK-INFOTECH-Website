<!--======================================================
    File Name   : Questions.php
    Project     : Geek Infotech
    Description : Questions page
    Developed By: Rajat Kumar Swain
    Date Created: 30-10-2025
    Last Updated: <?php echo date("d-m-Y"); ?>
    Note         : This page defines the Questions of Mock Interview of Geek Infotech.  
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
                    <h2>Questions</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">Questions</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->





    <!-- ===== Start of FAQ Section ===== -->
    <section class="ptb80" id="faq-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Start of First Row -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3 class="uppercase">Frequently Asked Questions</h3>
                            
                        </div>
                    </div>
                    <!-- End of First Row -->



                    <!-- Start of Second Row -->
                    <div class="row mt40">

                        <!-- Start of Topic 1 -->
                        <!-- Start of Topic 1 -->
<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="what is sql?">1. What is SQL?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">SQL (Structured Query Language) is used to store, retrieve, and manage data in relational databases.</p>
</div>
<!-- End of Topic 1 -->

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="difference between delete truncate drop">2. Difference between DELETE, TRUNCATE and DROP?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">DELETE removes rows; TRUNCATE removes all rows quickly; DROP removes the entire table structure.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="primary key?">3. What is a Primary Key?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">A primary key uniquely identifies each row and does not allow NULLs.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="primary vs unique key">4. Difference between Primary Key and Unique Key?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">Primary key = Unique + Not Null. Unique key allows a single NULL.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="foreign key?">5. What is a Foreign Key?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">A foreign key ensures referential integrity by linking child records to parent records.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="joins types?">6. What is a JOIN? Name the types.</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">JOIN combines rows from multiple tables. Types: INNER, LEFT, RIGHT, FULL, CROSS, SELF JOIN.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="where vs having">7. Difference between WHERE and HAVING?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">WHERE filters before GROUP BY; HAVING filters after GROUP BY.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="union vs union all">8. Difference between UNION and UNION ALL?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">UNION removes duplicates; UNION ALL returns all rows including duplicates.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="views?">9. What is a View?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">A view is a virtual table based on an SQL query and does not store data physically.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="index?">10. What is an Index?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">An index improves query performance by speeding up data retrieval.</p>
</div>

<!-- PL/SQL START -->
<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="plsql?">11. What is PL/SQL?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">PL/SQL is Oracle's procedural extension to SQL supporting loops, conditions, exceptions and more.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="procedure vs function">12. Difference between Procedure and Function?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">A function returns a value; a procedure may or may not return values through OUT parameters.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="package?">13. What is a Package in PL/SQL?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">A package groups related procedures, functions, and variables for modularity and performance.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="trigger types?">14. What are Triggers? Types?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">Triggers fire automatically on DML, DDL or system events. Types: BEFORE, AFTER, ROW, STATEMENT, INSTEAD OF.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="exception handling?">15. What is Exception Handling?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">Exceptions handle runtime errors using NO_DATA_FOUND, TOO_MANY_ROWS, OTHERS etc.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="bulk collect?">16. What is BULK COLLECT?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">BULK COLLECT fetches multiple rows at once into collections improving performance.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="forall?">17. What is FORALL?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">FORALL is used for bulk DML operations to reduce context switching.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="cursor?">18. What is a Cursor?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">A cursor is a pointer to a result set. Types: implicit, explicit, cursor for loop, parameterized cursor.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="autonomous transaction?">19. What is Pragma Autonomous Transaction?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">It allows a block to commit or rollback independently, mainly used for logging.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="mutating table?">20. What is Mutating Table Error?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">Occurs when a row-level trigger queries or modifies the same table. Use compound triggers to avoid it.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="collection types?">21. Types of PL/SQL Collections?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">Three types: Associative Arrays, Nested Tables, VARRAYs.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="rowtype?">22. What is %ROWTYPE?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">Declares a variable with the same structure as a table row.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="nvl function?">23. What is the NVL function?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">NVL replaces NULL values with a specified value.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="subquery types?">24. What is a Subquery? Types?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">A query inside another query. Types: single-row, multi-row, correlated.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="exists vs in?">25. Difference between IN and EXISTS?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">IN checks values; EXISTS checks existence and is faster for large data.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="dml ddl dcl tcl">26. What are DDL, DML, DCL, TCL?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">DDL creates structures; DML manipulates data; DCL handles privileges; TCL controls transactions.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="implicit vs explicit cursor">27. Implicit vs Explicit Cursor?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">Implicit is auto-created by Oracle; explicit is created by developers for multi-row operations.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="dbms output">28. What is DBMS_OUTPUT.PUT_LINE?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">Used to print debugging output in PL/SQL.</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="normalization?">29. What is Normalization?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">A method of organizing data to reduce redundancy and improve integrity (1NF, 2NF, 3NF).</p>
</div>

<div class="col-md-12 topic">
    <div class="open">
        <h6 class="question" data-search-term="view materialized">30. Difference between View and Materialized View?</h6>
        <i class="fa fa-angle-down hidden-xs"></i>
    </div>
    <p class="answer" style="display: none;">View is virtual and always fresh; materialized view stores data physically and can be refreshed.</p>
</div>

                        <!-- End of Topic 1 -->



                    </div>
                    <!-- End of Second Row -->

                </div>
            </div>
        </div>
    </section>
    <!-- ===== End of FAQ Section ===== -->






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