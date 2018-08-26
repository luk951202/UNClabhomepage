<?php /**

 @filesource
 @author SeungwanJo <wh7923@gmail.com
 @copyright 2016 UNClab
 @version [ 1.0.0 ]
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
        Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Big Headline for Portfolio Project</h2>
                            <div class="portfolio-meta">
                               <span>Dec 11, 2020</span>|
                               <span> Category: typography</span>|
                               <span> website: <a href="http://www.themefisher.com">Themefisher</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section><!--/#Page header-->

            <section class="portfolio-single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio-single-img">
                                <img class="img-responsive" alt="" src="images/portfolio/post-1.jpg">
                            </div>
                            <div class="portfolio-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas sit expedita, iusto repellendus cumque, officia architecto consequatur illo fuga eum sed ut autem eos voluptas. Nemo, a, rem! Atque quisquam aperiam eaque tenetur autem, soluta itaque omnis. Minus nesciunt, sint, animi illum quo ab voluptate esse delectus unde maiores iure, quasi a suscipit ipsam aliquid voluptatem. Perspiciatis eveniet, pariatur illum aut cum dolor neque consequatur error aliquid facilis in quasi temporibus assumenda tempore, doloremque autem saepe enim nihil. Voluptates asperiores ullam voluptate quas similique ratione quia hic, eum distinctio laboriosam, consectetur tempora voluptatibus optio natus cumque est necessitatibus dolore alias.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis expedita repellendus laboriosam aliquid. Neque doloribus ea, id reprehenderit alias saepe debitis eligendi molestias odit, nesciunt rem. Dolorem saepe, provident dolore nesciunt laudantium nostrum enim natus veritatis harum maxime et iure ratione, nulla. Minus excepturi commodi tempore voluptate. Blanditiis similique dolor asperiores ex excepturi perspiciatis, dolores id esse. Voluptate beatae nesciunt cum esse ratione officiis necessitatibus blanditiis ea, laboriosam fugit vero maxime? Voluptatum illo dolorum autem pariatur quisquam. Voluptates soluta culpa necessitatibus veritatis tempora incidunt doloribus placeat repellat et facilis eum sapiente fugit numquam aut, laboriosam aspernatur, esse, magnam excepturi repudiandae amet voluptas nulla quidem. Veritatis nisi consequuntur saepe qui quisquam dignissimos assumenda, iusto odio. Dignissimos reprehenderit esse iusto cupiditate nisi enim, animi similique itaque, perspiciatis error qui. Aperiam, architecto provident.
                                </p>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </section>

            <section class="works works-fit">
            <div class="container">
                <h2 class="subtitle">Some Of Our Features Works</h2>
                    <p class="subtitle-des">
                        Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere <br> tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.
                    </p>
                <div class="row">
                    <div class="col-sm-3">
                         <figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="300ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item-1.jpg" class="img-responsive" alt="portfolio items">
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" title="Proin imperdiet augue et magna interdum hendrerit" class="fancybox" href="images/portfolio/item-1.jpg">Demo</a>        
                                        <a target="_blank" href="single-postfolio.html">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4>
                                    <a href="#">
                                        Dew Drop        
                                    </a>
                                </h4>
                                <p>
                                    Redesigne UI Concept
                                </p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-sm-3">
                        <figure class="wow fadeInLeft animated animated" data-wow-duration="300ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 300ms; -webkit-animation-delay: 300ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item-2.jpg" class="img-responsive" alt="portfolio items">
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" title="Proin imperdiet augue et magna interdum hendrerit" class="fancybox" href="images/portfolio/item-2.jpg">Demo</a>        
                                        <a target="_blank" href="single-postfolio.html">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4>
                                    <a href="#">
                                        Bottle Mockup        
                                    </a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit.
                                </p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-sm-3">
                        <figure class="wow fadeInLeft animated animated" data-wow-duration="300ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 300ms; -webkit-animation-delay: 300ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item-3.jpg" class="img-responsive" alt="">
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" title="Proin imperdiet augue et magna interdum hendrerit" class="fancybox" href="images/portfolio/item-3.jpg">Demo</a>        
                                        <a target="_blank" href="single-postfolio.html">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4>
                                    <a href="#">
                                        Table Design        
                                    </a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet.
                                </p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-sm-3">
                        <figure class="wow fadeInLeft animated animated" data-wow-duration="300ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 600ms; -webkit-animation-delay: 600ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item-4.jpg" class="img-responsive" alt="">
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" title="Proin imperdiet augue et magna interdum hendrerit" class="fancybox" href="images/portfolio/item-4.jpg">Demo</a>        
                                        <a target="_blank" href="single-postfolio.html">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4>
                                    <a href="#">
                                        Make Up elements        
                                    </a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor.
                                </p>
                            </figcaption>
                        </figure>
                    </div>

                   

                </div>
            </div>
        </section>
        
            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="300ms">SO WHAT YOU THINK ?</h2>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="300ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,</br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                                <a href="#" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="300ms">Contact With Me</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <? Footer::render(); ?>
             <!-- /#footer -->
                
            </body>
        </html>
    </html>