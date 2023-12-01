<?php
include("../assets/php/connect.php");
if(!$_GET['case']) header("location:../");

$sql="SELECT * FROM exitos WHERE id=:id";
$respuesta=$cnt->prepare($sql);
$respuesta->execute(array(":id"=>base64_decode($_GET['case'])));
$case=$respuesta->fetch(PDO::FETCH_ASSOC);

$sql="SELECT * FROM exitos";
$respuesta=$cnt->prepare($sql);
$respuesta->execute(array(":id"=>base64_decode($_GET['case'])));
while($fila=$respuesta->fetch(PDO::FETCH_ASSOC)){
$cases[]=$fila;
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Digalu - Digital Marketing Agency Template">

    <!-- ========== Page Title ========== -->
    <title>COSMYXX & CO.</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/elegant-icons.css" rel="stylesheet">
    <link href="../assets/css/flaticon-set.css" rel="stylesheet">
    <link href="../assets/css/magnific-popup.css" rel="stylesheet">
    <link href="../assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="../assets/css/animate.css" rel="stylesheet">
    <link href="../assets/css/validnavs.css" rel="stylesheet">
    <link href="../assets/css/helper.css" rel="stylesheet">
    <link href="../assets/css/unit-test.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

</head>

<body>

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="../https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Start Preloader 
    ============================================= -->
    <div id="preloader">
        <div id="ambrox-preloader" class="ambrox-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="C" class="letters-loading"> C </span>
                    <span data-text-preloader="O" class="letters-loading"> O </span>
                    <span data-text-preloader="S" class="letters-loading"> S </span>
                    <span data-text-preloader="M" class="letters-loading"> M </span>
                    <span data-text-preloader="Y" class="letters-loading"> Y </span>
                    <span data-text-preloader="X" class="letters-loading"> X </span>
                    <span data-text-preloader="X" class="letters-loading"> X </span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header 
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed dark no-background">

            <div class="container d-flex justify-content-between align-items-center">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="../"><img src="../assets/img/logo/logoCosmyBlue.svg" class="logo"
                            alt="Logo"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse ms-auto" id="navbar-menu">

                    <img src="../assets/img/logo/logoCosmyBlue.svg" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>

                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="../">Home</a></li>
                        <li><a href="../#aboutus" id="Linkaboutus">About us</a></li>
                        <li><a href="../contact/">contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->

                    <!-- End Atribute Navigation -->
                </div>
            </div>

            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center bg-gray" style="background-image: url(../assets/img/shape/breadcrumb.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1><?php echo $case['SIGN'];?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="../#"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Case Study</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content col-xl-8 col-lg-7 col-md-12 pr-35 pr-md-15 pl-md-15 pr-xs-15 pl-xs-15">
                        <div class="blog-style-two item">

                            <div class="blog-item-box">

                                <div class="thumb">
                                    <a href="../blog-single-with-sidebar.html"><img src="../assets/img/shape/case.png"
                                            alt="Thumb"></a>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="../#"><i class="fas fa-calendar-alt"></i> March 16, 2023</a>
                                            </li>
                                            <li>
                                                <a href="../#"><i class="fas fa-user-circle"></i> Md Sohag</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php for($i=1;$i<=4;$i++):?>
                                    <h4><?php echo $case['TITLE'.$i]?></h4>
                                    <p><?php echo $case['TEXT'.$i]?></p>
                                    <?php endfor;?>
                                    <blockquote>
                                        <?php echo $case['SIGN']?>
                                    </blockquote>
                                    <?php for($i=4;$i<=9;$i++):?>
                                    <h4><?php echo $case['TITLE'.$i]?></h4>
                                    <p><?php echo $case['TEXT'.$i]?></p>
                                    <?php endfor;?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Start Sidebar -->
                    <div class="sidebar col-xl-4 col-lg-5 col-md-12 mt-md-50 mt-xs-50">
                        <aside>
                            <div class="sidebar-item recent-post">
                                <h4 class="title">Cases Study</h4>
                                <ul>
                                    <?php foreach($cases as $case):?>
                                    <li class="border mb-2 border-start-blue">
                                        <div class="info">
                                            <div class="meta-title">
                                                <span class="post-date"><?php echo $case['DATE']?></span>
                                            </div>
                                            <a href="./?case=<?php echo base64_encode($case['ID'])?>">
                                                <?php echo $case['SIGN']?></a>
                                        </div>
                                    </li>
                                    <?php endforeach;?>

                                </ul>
                            </div>
                            <!-- <div class="sidebar-item category">
                                <h4 class="title">category list</h4>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="../blog-with-sidebar.html">national <span>69</span></a>
                                        </li>
                                        <li>
                                            <a href="../blog-with-sidebar.html">national <span>25</span></a>
                                        </li>
                                        <li>
                                            <a href="../blog-with-sidebar.html">sports <span>18</span></a>
                                        </li>
                                        <li>
                                            <a href="../blog-with-sidebar.html">megazine <span>37</span></a>
                                        </li>
                                        <li>
                                            <a href="../blog-with-sidebar.html">health <span>12</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->


                            <div class="sidebar-item social-sidebar">
                                <h4 class="title">follow us</h4>
                                <div class="sidebar-info">
                                    <ul>
                                        <li class="facebook">
                                            <a href="../#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="../#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="../#">
                                                <i class="fab fa-pinterest"></i>
                                            </a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="../#">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Footer 
    ============================================= -->
    <div id="footer"></div>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery.appear.js"></script>
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/modernizr.custom.13711.js"></script>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/progress-bar.min.js"></script>
    <script src="../assets/js/circle-progress.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/count-to.js"></script>
    <script src="../assets/js/jquery.scrolla.min.js"></script>
    <script src="../assets/js/YTPlayer.min.js"></script>
    <script src="../assets/js/TweenMax.min.js"></script>
    <script src="../assets/js/validnavs.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>