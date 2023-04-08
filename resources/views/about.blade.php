<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>zon</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="/assets/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3//assets/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout inner_page">

    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="/assets/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <div class="header">
        <div class="container-fluid">
            <div class="row d_flex">
                <div class="col-xl-1 col-lg-3 col-sm-2 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="{{ url('/') }}">Zon</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-9 col-md-10 col-sm-12">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('about') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('service') }}">Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('testimonial') }}">Testimonial</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="background: transparent;" href="Javascript:void(0)"><i
                                            class="fa fa-search"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-4 re_no">
                    <ul class="infomaco">
                        <li><i class="fa fa-phone" aria-hidden="true"></i> +01 1234567890</li>
                        <li><a href="Javascript:void(0)"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                demo@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="row d_flex grid">
                <div class="col-md-6">
                    <div class="about_img text_align_center">
                        <figure><img src="/assets/images/about.png" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-6 order1">
                    <div class="titlepage text_align_left">
                        <h2>About Zon Coffee</h2>
                        <p>sing 'Content here, content here', making it look like readable English. Many desktop
                            publishing packages and web page editors
                        </p>
                        <a class="read_more" href="{{ url('about') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a class="logo_bottom" href="{{ url('/') }}">Zon</a>
                    </div>
                    <div class="col-md-12">
                        <form class="form_subscri">
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="subsrib" placeholder="Enter your email" type="text"
                                        name="Enter your email">
                                </div>
                                <div class="col-md-12">
                                    <button class="subsci_btn">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="infoma text_align_left">
                                    <h3>Menu</h3>
                                    <ul class="menu_bottom">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('about') }}">About </a></li>
                                        <li><a href="{{ url('serviec') }}">Coffee Serviec</a></li>
                                        <li><a href="{{ url('testimonial') }}">Testimonial</a></li>
                                        <li><a href="{{ url('blog') }}">Blog</a></li>
                                        <li><a href="{{ url('contact') }}">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="infoma text_align_left">
                                    <h3>Coffee</h3>
                                    <ul class="menu_bottom">
                                        <li><a href="Javascript:void(0)">Black Coffee</a></li>
                                        <li><a href="Javascript:void(0)">Read Coffee </a></li>
                                        <li><a href="Javascript:void(0)">Coffee Serviec</a></li>
                                        <li><a href="Javascript:void(0)">Green Tea</a></li>
                                        <li><a href="Javascript:void(0)">Choclate Coffee</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="infoma">
                            <h3>Follow Us</h3>
                            <ul class="social_icon">
                                <li><a href="Javascript:void(0)"><i class="fa fa-facebook"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="Javascript:void(0)"><i class="fa fa-linkedin"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="Javascript:void(0)"><i class="fa fa-instagram"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="Javascript:void(0)"><i class="fa fa-youtube-play"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                            <ul class="conta">
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i>Locations
                                </li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Call +01 1234567890</li>
                                <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="Javascript:void(0)">
                                        demo@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>© 2020 All Rights Reserved. <a href="https://html.design/"> Free html Templates</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox./assets/js/1.8.1/baguetteBox.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/custom.js"></script>
</body>

</html>
