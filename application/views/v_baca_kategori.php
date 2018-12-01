<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Robita Sembiring Personal Web" />
    <meta name="keywords" content="Robita Sembiring" />
    <meta name="author" content="Children, parents, Love" />

    <!--====== TITLE TAG ======-->
    <title>Robita Sembiring &amp; Personal Portfolio</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="<?php echo base_url().'assets/img/Robita.png'?>"/>


    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/normalize.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/reset.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/animate.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/magnific-popup.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/font-awesome.min.css'?>">

    <!--====== MAIN STYLESHEETS ======-->
    <link rel="stylesheet" href="<?php echo base_url().'assets/style.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/responsive.css'?>">

    <script src="<?php echo base_url().'assets/js/vendor/modernizr-2.8.3.min.js'?>"></script>
    <!--[if lt IE 9]>
 
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    ol.c {list-style: decimal inside;}
</style>
</head>

<body>

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area single-page blog-page" id="home">
        <div class="top-area-bg"></div>
        <div class="header-top-area">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <button class="collapsed navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-scrollspy">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="#home" class="navbar-brand"><img src="img/Robita-Sembiring-dot-com.png" alt="logo"></a>
                        </div>
                        <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy">
                            <ul id="nav" class="nav navbar-nav cl-effect-11" >
                                <li ><a href="http://robitasembiring.com/" style="color: #000">home</a></li>
                                <li><a href="http://robitasembiring.com/#about" style="color: #000">about</a></li>
                                <li><a href="http://robitasembiring.com/#service" style="color: #000">Service</a></li>
                                <li><a href="http://robitasembiring.com/#experience" style="color: #000">Experience</a></li>
                                <li><a href="http://robitasembiring.com/#portfolio" style="color: #000">Portfolio</a></li>
                                <li><a href="http://robitasembiring.com/#testmonial" style="color: #000">Testmonial</a></li>
                                <li><a href="#" style="color: #000">Blog</a></li>
                                <li><a href="http://robitasembiring.com/#contact" style="color: #000">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>

        <!--WELCOME BARNER AREA-->
        <div class="welcom-barner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="baner-text text-center">
                         <!-- <h2>MENJADI ORANGTUA HEBAT BAGI ANAK MILENIAL</h2>-->
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--WELCOME BARNER AREA END-->
 </header>
 <!--END TOP AREA-->

 <!--BLOG AREA-->
 <section class="blog-page blog-area padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                <ul>
                    <?php foreach($artikel as $side2){ ?>
                    <li class="s_post col-md-12" style="padding-bottom: 25px">
                        <div class="post-tumb col-md-4">
                            <a href="#"><img src="<?php echo base_url().'assets/img/blog/'.$side2->gambar?>" alt="" width=100% ></a>
                        </div>
                        <div class="post-title-and-date col-md-8">
                            <h4><a href="<?php echo base_url().'baca/artikel/'.$side2->id_artikel?>"><?php echo $side2->judul_artikel; ?></a></h4>
                            <p class="post-meta"><a href="menjadi-orang-tua-hebat-bagi-anak-milenial.html"><?php echo $side2->tgl_input; ?></a></p>
                        </div>
                    </li>
                    <?php }?>

                </ul>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div class="blog-sidebar">
                    <div class="single-sidebar-widget">
                        <form action="#">
                            <input type="search" name="search" id="search" placeholder="Search...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="single-sidebar-widget catagories-widget wow fadeIn">
                        <h4>Catagories</h4>
                        <ul>
                            <li><a href="<?php echo base_url().'baca/kategori/3'?>"><i class="fa fa-angle-right"></i>Parents</a></li>
                            <li><a href="<?php echo base_url().'baca/kategori/2'?>"><i class="fa fa-angle-right"></i>Children</a></li>
                            <li><a href="<?php echo base_url().'baca/kategori/1'?>"><i class="fa fa-angle-right"></i>Love</a></li>
                        </ul>
                    </div>
                    <div class="single-sidebar-widget social-widget wow fadeIn">
                        <h4>Follow Me</h4>
                        <ul>
                            <li class="s_facebook"><a href="https://www.facebook.com/robitasembiring"><i class="fa fa-facebook"></i></a></li>
                            <li class="s_twitter"><a href="https://www.instagram.com/robitasembiring/"><i class="fa fa-instagram"></i></a></li>
                           <!-- <li class="s_youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li class="s_dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
                        </ul>
                    </div>
                    <div class="single-sidebar-widget post-widget wow fadeIn">
                        <h4>Recent Blog Post</h4>
                        <ul>
                            <?php foreach($side as $side){ ?>
                            <li class="s_post">
                                <div class="post-tumb alignleft">
                                    <a href="#"><img src="<?php echo base_url().'assets/img/blog/'.$side->gambar?>" alt=""></a>
                                </div>
                                <div class="post-title-and-date">
                                    <h4><a href="<?php echo base_url().'baca/artikel/'.$side->id_artikel?>"><?php echo $side->judul_artikel; ?></a></h4>
                                    <p class="post-meta"><a href="menjadi-orang-tua-hebat-bagi-anak-milenial.html"><?php echo $side->tgl_input; ?></a></p>
                                </div>
                            </li>
                            <?php }?>
                            
                        </ul>
                    </div>
                    <div class="single-sidebar-widget tag-widget wow fadeIn">
                        <h4>Blog Tags</h4>
                        <ul>
                            <li><a href="#">Parents</a></li>
                            <li><a href="#">pendidikan</a></li>
                            <li><a href="#">sikap</a></li>
                            <li><a href="#">anak</a></li>
                            <li><a href="#">pengetahuan dini</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--BLOG AREA END-->

<!--CONTACT AREA-->
<section class="contact-area gray-bg padding-top" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="contact-area-details">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="contact-form-area wow fadeIn">
                                <h2>Contact Me</h2>
                                <div class="contact-form">
                                    <form action="process.php" id="contact-form" method="post">
                                        <div class="form-group" id="name-field">
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Name.." required>
                                            </div>
                                        </div>
                                        <div class="form-group" id="email-field">
                                            <div class="form-input">
                                                <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email.." required>
                                            </div>
                                        </div>
                                        <div class="form-group" id="phone-field">
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="form-phone" name="form-phone" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="form-group" id="message-field">
                                            <div class="form-input">
                                                <textarea class="form-control" rows="6" id="form-message" name="form-message" placeholder="Your Message Here..." required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit">send message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 col-sm-12 col-xs-12">
                            <div class="footer-right-area wow fadeIn">
                                <h2>Contact Address</h2>
                                <div class="footer-right-contact">
                                    <div class="single-contact">
                                        <div class="contact-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <p>Royal Paka Residence A-20, Gunung Anyar - Surabaya </p>
                                    </div>
                                    <div class="single-contact">
                                        <div class="contact-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <p><a href="mailto:robitasembiring@gmail.com">Robitasembiring@gmail.com</a></p>
                                    </div>
                                    <div class="single-contact">
                                        <div class="contact-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <p><a href="calto:+6282143995899">082143995899</a></p>
                                        <p><a href="calto:+6285883759612">085883759612</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CONTACT AREA END-->

<!--FOOER AREA-->
<div class="footer-area gray-bg">
    <div class="container">
        <div class="row wow fadeIn">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="social-bookmark">
                    <ul>
                        <li><a href="https://www.facebook.com/robitasembiring/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/robitasembiring/"><i class="fa fa-instagram"></i></a></li>
                            <!--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
                        </ul>
                    </div>
                    <div class="footer-copyright text-center">
                        <p>Copyright  &copy;2018 Web Design by <a href="https://flashcom.id"> FlashcomID</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FOOER AREA END-->


    <!--====== SCRIPTS JS ======-->
    <script src="<?php echo base_url().'/assets/js/vendor/jquery-1.12.4.min.js'?>"></script>
    <script src="<?php echo base_url().'/assets/js/vendor/bootstrap.min.js'?>"></script>


    <!--====== PLUGINS JS ======-->
    <script src="<?php echo base_url().'assets/js/vendor/jquery.easing.1.3.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/vendor/jquery-migrate-1.2.1.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/vendor/jquery.appear.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/imagesloaded.pkgd.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/masonry.pkgd.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.magnific-popup.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/slick.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/waypoints.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.counterup.min.'?>"></script>
    <script src="<?php echo base_url().'assets/js/wow.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/contact-form.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.sticky.js'?>"></script>
    <!--===== ACTIVE JS=====-->
    <script src="<?php echo base_url().'assets/js/main.js'?>"></script>
</body>

</html>