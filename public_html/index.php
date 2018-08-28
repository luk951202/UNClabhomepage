<?php /**
/**
 * 첫화면
 * filename: index.php.
 * author: Jo_seungwan <wh7923@gmail.com>
 * version [1.0.0]
 */
class index {

}

include_once $_SERVER['DOCUMENT_ROOT'].'/templete/common.php';
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <? Basicpage::render()?>
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="UNC Lab">
        <meta property="og:description" content="Our Ubiquitous networks & Convergence laboratory (UNC Lab) is led by Professor Beongku An.">
        <meta property="og:image" content="https://github.com/jaejin1/UNClabhomepage/blob/master/images/about/labpicture.jpg">
        <meta property="og:image:width" content="800">
        <meta property="og:image:height" content="400">

        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="css/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="css/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">

        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- owl carouserl js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- bootstrap js -->

        <script src="js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- slider js -->
        <script src="js/slider.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="js/main.js"></script>
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <? Header::render()?>
        <!--
        ==================================================
        Slider Section Start
        ================================================== -->
        <section id="hero-area" >
	     <div class="container" >
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block">
                            <!-- Slider -->
                            <section class="cd-intro">
                                <h1 class="animated cd-headline slide">
                                <span>Ubiquitous Networks & Convergence Laboratory<br>(UNC Lab)</span><br>
<!--                                <span class="cd-words-wrapper">-->
<!--                                    <b class="is-visible">Hongik Unversity</b>-->
<!--                                    <b>Computer Impermation Comunication</b>-->
<!--                                    <b>Lab</b>-->
<!--                                </span>-->
                                </h1>
                                </section> <!-- cd-intro -->
                                <!-- /.slider -->
                                <h2 class="animated">
                                    Our Ubiquitous Networks & Convergence Laboratory (UNC Lab.) is led by Professor Beongku An.
                                </h2>
                            <a class="btn-lines dark light animated smooth-scroll btn btn-default btn-green" href="#works" data-section="#resarch" style="padding-top: 10px; padding-bottom: 10px;" >View Resarch</a>
                            </div>
                        </div>
                    </div>
                </div>
 	    </section><!--/#main-slider-->
            <!--
            ==================================================
            Introduction of Laboratory Start
            ================================================== -->
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="block" style="text-align:justify">
                                <h2>
                                Introduction of Laboratory
                                </h2>
                                <p>
                                    Our Ubiquitous Networks & Convergence Laboratory (UNC Lab.) is led by Professor Beongku An. The UNC Lab. conducts research in various areas of ubiquitous networks and convergence technology since 2003. Currently, our research focuses on Ad-hoc networks & Sensor Networks, Cognitive Radio Networks, IoT, Beyond 5G Networks, Artificial Intelligence Networks, Routing & Multicast, Cross-Layer Technology, Physical Layer Security, NOMA & SWIPT, Radio Frequency Energy Harvesting, Visible Lighting Communication, Mobile Cloud Computing, Solar Power Generation Management.
				</p>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="block">
                                <img style="margin-top: 78px" src="images/about/labpicture2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#about -->
            <!--

            ==================================================
            Resarch Area Section Start
            ================================================== -->
            <section id="research">
                <div class="container">
                    <div class="section-heading">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s">RESEARCH AREA</h1>
                        <!-- <p class="wow fadeInDown" data-wow-delay=".5s">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,<br> quasi dolores numquam dolor vero ex, tempora commodi repellendus quod laborum.
                        </p> -->
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xs-12" style="text-align:justify">
                            <div>
                              <div class="media-left">
                                  <div>
                                      <img src="images/resarcharea/VLC1.png">
                                  </div>
                              </div>
                              <div>
                                  <h4 class="media-heading"> Visible Lighting Communication (VLC) </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div>
                              <div class="media-left">
                                  <div>
                                      <img src="images/resarcharea/mobile1.png">
                                  </div>
                              </div>
                              <div>
                                  <h4 class="media-heading">Mobile Cloud Computing</h4>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div>
                              <div class="media-left">
                                  <div>
                                      <img src="images/resarcharea/SPGM.png">
                                  </div>
                              </div>
                              <div>
                                  <h4 class="media-heading">Solar Power Generation Management</h4>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div>
                              <div class="media-left">
                                  <div>
                                      <img src="images/resarcharea/CRTP.png">
                                  </div>
                              </div>
                              <div>
                                  <h4 class="media-heading">Cooperative Relay Transmissions and Routing Protocols for Future Mobile Wireless Networks</h4>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div>
                              <div class="media-left">
                                  <div>
                                      <img src="images/resarcharea/CRTC.jpeg">
                                  </div>
                              </div>
                              <div>
                                  <h4 class="media-heading">Cooperative Relay Transmissions and Cross-Layer Routing Protocols for Future Mobile Wireless Networks and Cognitive Radio Networks</h4>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#feature -->

            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title">Contact</h2>
                                <a href="contact.php" class="btn btn-default btn-contact">Contact With Me</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <? Footer::render(); ?> <!-- /#footer -->

        </body>
    </html>
