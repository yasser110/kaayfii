@extends('layouts.app')
    <!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kaay Fii</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" >
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<body>
@section('content')

    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="{{asset('image/img/logo.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">

                                        <li><a class="boxed_btn" href="accueil.html">accueil</a></li>
                                        <li><a class="boxed_btn_orange" href="Produit.html">Produit</a></li>
                                        <li><a class="boxed_btn" href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a class="boxed_btn_orange" href="course_details.html">course details</a></li>
                                                <li><a class="boxed_btn_orange" href="elements.html">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="boxed_btn_orange" href="about.html">About</a></li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="boxed_btn" href="contact.html">Contact</a></li>

                                        @guest
                                            <li class="nav-item">
                                                <a  class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item-blue" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form class="boxed-btn-blue" id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <a href="#test-form" class="login popup-with-form">
                                    <i class="flaticon-user"></i>
                                    <span>Se connecter</span>
                                </a>
                                <div class="live_chat_btn">

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img src="{{asset('image/imag1.jpeg')}}" alt="" width="300" height="300" >

                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="single_about_info">
                            <h3>tous Ce Que <br>
                                Vous chercher<br>
                                Rapidemment et Surement </h3>
                            <a href="#" class="boxed_btn">rechercher d,autre produit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_endslider_info -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="single_about_info">
                        <h3>plus de 1000 produits  <br>
                            par jour  </h3>
                        <p> chaque jour on recoit de nouvelle produit sur notre site kaay fii
                            et on essais de satisfaire les commandes et livraisons a temps reel
                            comme du tik tak  </p>
                        <a href="#" class="boxed_btn">acheter un produit</a>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6">
                    <div class="about_tutorials">
                        <div class="courses">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>20+</span>
                                    <p> articles</p>
                                </div>
                            </div>
                        </div>
                        <div class="courses-blue">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>763</span>
                                    <p> articles</p>
                                </div>

                            </div>
                        </div>
                        <div class="courses-sky">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>230+</span>
                                    <p> articles</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- popular_courses_start -->
    <div class="popular_courses">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>les plus rechercher</h3>
                        <p> Ceci permet de faciliter les recherches <br> Les produits les plus utilises dans notre site varient des differentes categories.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="course_nav">
                        <nav>
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                       aria-controls="home" aria-selected="true">All categories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                       aria-controls="profile" aria-selected="false">electronique</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                       aria-controls="contact" aria-selected="false">smartphone</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="design-tab" data-toggle="tab" href="#design" role="tab"
                                       aria-controls="design" aria-selected="false">mode</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Web-tab" data-toggle="tab" href="#Web" role="tab"
                                       aria-controls="design" aria-selected="false">Consommations</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Web-tab1" data-toggle="tab" href="#Web1" role="tab"
                                       aria-controls="design" aria-selected="false">vehicules</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Web-tab11" data-toggle="tab" href="#Web11" role="tab"
                                       aria-controls="design" aria-selected="false">batiment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Adobe-XD-tab8" data-toggle="tab" href="#Adobe-XD8" role="tab"
                                       aria-controls="design" aria-selected="false">Meubles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Adobe-XD-tab9" data-toggle="tab" href="#Adobe-XD9" role="tab"
                                       aria-controls="design" aria-selected="false">bebe</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>

    <!-- header-end -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- our_latest_blog_start -->
        <div class="our_latest_blog">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title text-center mb-100">
                            <h3>Our Latest Blog</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-4">
                        <div class="single_latest_blog">
                            <div class="thumb">
                                <img src="img/latest_blog/1.png" alt="">
                            </div>
                            <div class="content_blog">
                                <div class="date">
                                    <p>12 Jun, 2019 in <a href="#">Design tips</a></p>
                                </div>
                                <div class="blog_meta">
                                    <h3><a href="#">Commitment to dedicated Support</a></h3>
                                </div>
                                <p class="blog_text">
                                    Firmament morning sixth subdue darkness creeping gathered divide.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="single_latest_blog">
                            <div class="thumb">
                                <img src="img/latest_blog/2.png" alt="">
                            </div>
                            <div class="content_blog">
                                <div class="date">
                                    <p>12 Jun, 2019 in <a href="#">Design tips</a></p>
                                </div>
                                <div class="blog_meta">
                                    <h3><a href="#">Commitment to dedicated Support</a></h3>
                                </div>
                                <p class="blog_text">
                                    Firmament morning sixth subdue darkness creeping gathered divide.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="single_latest_blog">
                            <div class="thumb">
                                <img src="img/latest_blog/3.png" alt="">
                            </div>
                            <div class="content_blog">
                                <div class="date">
                                    <p>12 Jun, 2019 in <a href="#">Design tips</a></p>
                                </div>
                                <div class="blog_meta">
                                    <h3><a href="#">Commitment to dedicated Support</a></h3>
                                </div>
                                <p class="blog_text">
                                    Firmament morning sixth subdue darkness creeping gathered divide.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our_latest_blog_end -->


        <!-- footer -->
        <footer class="footer footer_bg_1">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget">
                                <div class="footer_logo">
                                    <a href="#">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                                <p>
                                    Firmament morning sixth subdue darkness creeping gathered divide our let god moving.
                                    Moving in fourth air night bring upon it beast let you dominion likeness open place day
                                    great.
                                </p>
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-youtube-play"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Courses
                                </h3>
                                <ul>
                                    <li><a href="#">Wordpress</a></li>
                                    <li><a href="#"> Photoshop</a></li>
                                    <li><a href="#">Illustrator</a></li>
                                    <li><a href="#">Adobe XD</a></li>
                                    <li><a href="#">UI/UX</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-lg-2">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Resourches
                                </h3>
                                <ul>
                                    <li><a href="#">Free Adobe XD</a></li>
                                    <li><a href="#">Tutorials</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#"> About</a></li>
                                    <li><a href="#"> Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Address
                                </h3>
                                <p>
                                    200, D-block, Green lane USA <br>
                                    +10 367 467 8934 <br>
                                    edumark@contact.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer -->


        <!-- form itself end-->
        <form id="test-form" class="white-popup-block mfp-hide">
            <div class="popup_box ">
                <div class="popup_inner">
                    <div class="logo text-center">
                        <a href="#">
                            <img src="img/form-logo.png" alt="">
                        </a>
                    </div>
                    <h3>se connecter</h3>
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <input type="email" placeholder="votre email">
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <input type="password" placeholder="Password">
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" class="boxed_btn_orange">Connexion</button>
                            </div>
                        </div>
                    </form>
                    <p class="doen_have_acc">Creer un Compte ? <a class="dont-hav-acc" href="#test-form2">Creer Votre compte</a>
                    </p>
                </div>
            </div>
        </form>
        <!-- form itself end -->

        <!-- form itself end-->
        <form id="test-form2" class="white-popup-block mfp-hide">
            <div class="popup_box ">
                <div class="popup_inner">
                    <div class="logo text-center">
                        <a href="#">
                            <img src="img/form-logo.png" alt="">
                        </a>
                    </div>
                    <h3>Inscription</h3>
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <input type="text" placeholder="Votre Nom">
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <input type="text" placeholder="Votre Prenom">
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <input type="email" placeholder="Votre email">
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <input type="password" placeholder="Password">
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <input type="Password" placeholder="Confirm password">
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" class="boxed_btn_orange">Creer Votre compte</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </form>
        <!-- form itself end -->
@endsection



</body>
