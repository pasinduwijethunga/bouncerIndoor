<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Linoor - DIgital Agency HTML Template | Portfolio</title>
    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/owl.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">
    <link href="css/custom-animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- rtl css -->
    <link href="css/rtl.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="css/colors/color-default.css">

    <link rel="shortcut icon" href="images/favicon.png" id="fav-shortcut" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" id="fav-icon" type="image/x-icon">

    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]>
    <script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader">
        <div class="icon"></div>
    </div>

    <!-- Main Header -->
    <?php include "navigation.php"; ?>
    <!-- End Main Header -->

    <!--Mobile Menu-->
    <div class="side-menu__block">


        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">
            <div class="side-menu__top justify-content-end">

                <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="images/icons/close-1-1.png"
                                                                                 alt=""></a>
            </div><!-- /.side-menu__top -->


            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>
            <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
            <div class="side-menu__content">
                <p>Linoor is a premium Template for Digital Agencies, Start Ups, Small Business and a wide range of
                    other agencies.</p>
                <p><a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a> <br> <a href="tel:888-999-0000">888
                        999 0000</a></p>
                <div class="side-menu__social">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div><!-- /.side-menu__content -->
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->

    <!--Search Popup-->
    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->

    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url(images/background/image-7.jpg);"></div>
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Gallery</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index-main.html">Home</a></li>
                            <li class="active">Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="auto-container">
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <!--Filter-->
<!--                <div class="filters centered clearfix">-->
<!--                    <ul class="filter-tabs filter-btns clearfix">-->
<!--                        <li class="active filter" data-role="button" data-filter="all">All<sup>[6]</sup></li>-->
<!--                        <li class="filter" data-role="button" data-filter=".branding">Branding<sup>[3]</sup></li>-->
<!--                        <li class="filter" data-role="button" data-filter=".illustration">illustration<sup>[3]</sup>-->
<!--                        </li>-->
<!--                        <li class="filter" data-role="button" data-filter=".photography">Photography<sup>[3]</sup>-->
<!--                        </li>-->
<!--                        <li class="filter" data-role="button" data-filter=".web-design">Web Design<sup>[4]</sup>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
                <div class="filter-list row">
                    <!-- Gallery Item -->
                    <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class=""><img src="images/gallery/5.jpg" alt=""></figure>
                            <a href="images/gallery/5.jpg" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
<!--                            <div class="cap-box">-->
<!--                                <div class="cap-inner">-->
<!--                                    <div class="cat"><span>Graphic</span></div>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class=""><img src="images/gallery/6.jpg" alt=""></figure>
                            <a href="images/gallery/6.jpg" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class=""><img src="images/gallery/7.jpg" alt=""></figure>
                            <a href="images/gallery/7.jpg" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class=""><img src="images/gallery/8.jpg" alt=""></figure>
                            <a href="images/gallery/8.jpg" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class=""><img src="images/gallery/9.jpg" alt=""></figure>
                            <a href="images/gallery/9.jpg" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class=""><img src="images/gallery/10.jpg" alt=""></figure>
                            <a href="images/gallery/10.jpg" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class=""><img src="images/gallery/11.jpg" alt=""></figure>
                            <a href="images/gallery/11.jpg" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class=""><img src="images/gallery/12.jpg" alt=""></figure>
                            <a href="images/gallery/12.jpg" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class=""><img src="images/gallery/13.jpg" alt=""></figure>
                            <a href="images/gallery/13.jpg" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class=""><img src="images/gallery/14.jpg" alt=""></figure>
                            <a href="images/gallery/14.jpg" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class=""><img src="images/gallery/15.jpg" alt=""></figure>
                            <a href="images/gallery/15.jpg" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class=""><img src="images/gallery/16.jpg" alt=""></figure>
                            <a href="images/gallery/16.jpg" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class=""><img src="images/gallery/17.jpg" alt=""></figure>
                            <a href="images/gallery/17.jpg" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class=""><img src="images/gallery/18.jpg" alt=""></figure>
                            <a href="images/gallery/18.jpg" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class=""><img src="images/gallery/19.jpg" alt=""></figure>
                            <a href="images/gallery/19.jpg" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class=""><img src="images/gallery/20.jpg" alt=""></figure>
                            <a href="images/gallery/20.jpg" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">

                            </div>
                        </div>
                    </div>

<!--                    <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">-->
<!--                        <div class="inner-box">-->
<!--                            <figure class=""><img src="images/gallery/5.jpg" alt=""></figure>-->
<!--                            <a href="images/gallery/5.jpg" class="lightbox-image overlay-box"-->
<!--                               data-fancybox="gallery"></a>-->
<!--                            <div class="cap-box">-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                   


                </div>
<!--                <div class="more-box">-->
<!--                    <a class="theme-btn btn-style-one" href="portfolio.php">-->
<!--                        <i class="btn-curve"></i>-->
<!--                        <span class="btn-title">Load more work</span>-->
<!--                    </a>-->
<!--                </div>-->
            </div>

        </div>
    </section>

    <!-- Main Footer -->
    <?php include 'footer.php'?>

</div>
<!--End pagewrapper-->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/TweenMax.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/knob.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>

<script src="js/jquery.easing.min.js"></script>
<script src="js/custom-script.js"></script>


</body>

</html>