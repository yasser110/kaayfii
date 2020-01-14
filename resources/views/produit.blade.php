<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kaay Fii </title>
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
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="index.html">KAAYFII
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a  href="{{asset('home')}}">Accueil</a></li>
                                    <li><a class="active" href="{{asset('Produit')}}">Produit</a></li>
                                    <li><a href="#">Electronique <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="{{asset('Smartphone')}}">Smartphone</a></li>
                                            <li><a href="{{asset('Info')}}">informatique</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{asset('Meubles')}}">Meubles</a></li>
                                    <li><a href="#">Mode <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="{{asset('Homme')}}">Homme</a></li>
                                            <li><a href="{{asset('Femme')}}">Femme</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{asset('Contact')}}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
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
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->


<!-- testimonial_area_start -->
<div class="testimonial_area testimonial_bg_1 overlay">
    <div class="testmonial_active owl-carousel">
        <div class="single_testmoial">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_text text-center">
                            <div class="author_img">
                                <img src="{{asset('image/m1.jpg')}}"  alt="">
                            </div>
                            <p>
                                " Armoire Penderie -  <br>3 Battants - Marron
                                Armoire Penderie - <br>
                               ....

                            </p>
                            <span>- Armoire Penderie</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_testmoial">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_text text-center">
                            <div class="author_img">
                                <img src="{{asset('image/m2.jpg')}}" alt="">
                            </div>
                            <p>
                                Table Basse EFFIE - <br> Bois - Blanc,
                                accents de modernité !<br>
                                Avec son écran LED 15,6"
                              ..

                            </p>
                            <span>-Table Basse</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_testmoial">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_text text-center">
                            <div class="author_img">
                                <img src="{{asset('image/s1.jpg')}}"  alt="">
                            </div>
                            <p>
                            Nokia 1 Plus - Ecran 5.45" <br> - RAM 1Go - RAM 8Go - 
                            Caméra 8MP - 2500mAh - Noir <br>
                            Caméra 8MP -
                            2500mAh - Noir...
                            </p>
                            <span>- HD LED 15.6</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_testmoial">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_text text-center">
                            <div class="author_img">
                                <img src="{{asset('image/s2.jpg')}}" alt="">
                            </div>
                            <p>
                            A51 - 4G - Double SIM - 6.5" <br> 
                            FHD+ - 128GB - RAM 4GB !<br> 
                            - 48MP - 4000mAh
                             - Garantie 24 mois

                            </p>
                            <span>- A51samsung</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_testmoial">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_text text-center">
                            <div class="author_img">
                                <img src="{{asset('image/hom1.jpg')}}" alt="">
                            </div>
                            <p>
                             Ensemble Costume Slim<br>
                             - 2 Pièces Pour Homme  
                                <br>
                             - Bleu Marine ...
                            </p>
                            <span>-Costume</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_testmoial">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_text text-center">
                            <div class="author_img">
                                <img src="{{asset('image/hom3.jpg')}}" alt="">
                            </div>
                            <p>
                            Ensemble Costume Homme de Deux Pièces:<br>
                             Veste + Pantalon - Coupe près du Corps - Bleu Ciel <br> 
                                - livraison offerte "
                                - paiement sécurisé...

                            </p>
                            <span>-Costume</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_testmoial">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_text text-center">
                            <div class="author_img">
                                <img src="{{asset('image/s3.jpg')}}" alt="">
                            </div>
                            <p>
                            - Camon 12 Air- Dual SIM - 6.55": <br> - Rom 32Go - Ram 3Go - 
                            - Caméra 16MP+2MP+5MP Camera Frond 8MP!<br>
                            - Batterie 4000mAh  "
                            - Bleu...

                            </p>
                            <span>- DELL510</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_testmoial">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_text text-center">
                            <div class="author_img">
                                <img src="{{asset('image/m3.jpg')}}" alt="">
                            </div>
                            <p>
                            Ensemble de 4 Chaise Royal en Plastique - Marron <br> 
                             en Plastique - Marron!<br>
                                - livraison offerte "
                                - paiement sécurisé...

                            </p>
                            <span>-Ensemble de 4 Chaise</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single_testmoial">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_text text-center">
                            <div class="author_img">
                                <img src="{{asset('image/m4.jpg')}}" alt="">
                            </div>
                            <p>
                            3 Étagères Rangement pour Cuisine - <br>pour Cuisine
                            Acier Inoxydable<br> bon marché 
                              

                            </p>
                            <span>- Étagères</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="testimonial_area testimonial_bg_1 overlay">
    <div class="testmonial_active owl-carousel">
        <div class="single_testmoial">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_text text-center">
                            <div class="author_img">
                                <img src="{{asset('image/pc.jpg')}}"  alt="">
                            </div>
                            <p>
                                " Ecran 15.6" HD LED - Processeur Intel <br>Core i3-7020U, 2.3 Ghz, 3 Mo de cache
                                - 4 Go de mémoire <br>
                                - Disque 1 To -
                                Carte graphique NVIDIA GeForce MX110, 2 ....

                            </p>
                            <span>- HD LED 15.6</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_testmoial">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_text text-center">
                            <div class="author_img">
                                <img src="{{asset('image/indexdell.jpeg')}}" alt="">
                            </div>
                            <p>
                                Description Asus S510UA-EJ1424T : <br> une élégance intemporelle aux
                                accents de modernité !<br>
                                Avec son écran LED 15,6"
                                Full HD de 1920 x 1080 pixels et son...

                            </p>
                            <span>- Asus510</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_testmoial">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_text text-center">
                            <div class="author_img">
                                <img src="{{asset('image/pc1.jpg')}}" alt="">
                            </div>
                            <p>
                                PC portable possédant port série : <br> idéal pour vos outils professionnels
                                idéal pour vos outils professionnels!<br>
                                - livraison offerte "
                                - paiement sécurisé...

                            </p>
                            <span>- DELL510</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single_testmoial">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_text text-center">
                            <div class="author_img">
                                <img src="{{asset('image/Ordi2.jpg')}}" alt="">
                            </div>
                            <p>
                                 Ordinateur portable avec SSD 2019 – <br>Meilleurs PC Portables SSD –
                                Meilleur ordinateur portable<br> bon marché avec SSD
                                Avec son écran LED 15,6"
                                Full HD de 1920 x 1080 pixels et son...

                            </p>
                            <span>- Jquileen</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-50" src="{{asset('image/Ordi2.jpg')}}" alt="Un tigre">
            <div class="carousel-caption d-none d-md-block">
                <h1>hp probook</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-50" src="{{asset('image/o.jpg')}}"  alt="Un tigre">
            <div class="carousel-caption d-none d-md-block">
                <h1>asus avec SSD</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-50" src="{{asset('image/indexdell.jpeg')}}" alt="Un tigre">
            <div class="carousel-caption d-none d-md-block">
                <h1>DELL corei7</h1>
            </div>
        </div>
    </div>
</div>


<div class="all_courses">
    <div class="container">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/Ordi2.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span>dell corei7</span>
                                <h3><a href="#">Mobile App design step by step <br>
                                        from beginner</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">145000</span>
                                        <span class="active_prise">
                                                            145000
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/ordi7.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span>VideoProjecteur</span>
                                <h3><a href="#">Le vidéoprojecteur BenQ W1500 est un modèle DLP 1080p compatible 3D,<br>
                                        pouvant fonctionner sans fil</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">450000</span>
                                        <span class="active_prise">
                                                            $49
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/ordi6.jpeg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span> BenQ W1500</span>
                                <h3><a href="#">Le vidéoprojecteur BenQ W1500 est  <br>
                                        un modèle DLP 10...</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">380000</span>
                                        <span class="active_prise">
                                                            $49
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/ordi5.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span>Photoshop</span>
                                <h3><a href="#">Mobile App design step by step <br>
                                        from beginner</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">$89.00</span>
                                        <span class="active_prise">
                                                            $49
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <img src="{{asset('image/ordi8.jpg')}}" alt="">
                            </div>
                            <div class="courses_info">
                                <span>UI/UX</span>
                                <h3><a href="#">How to complete user research <br>
                                        and make work flow</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">$89.00</span>
                                        <span class="active_prise">
                                                            $49
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/ordi9.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span>Tablette IPAD PRO</span>
                                <h3><a href="#">Tablette IPAD PRO Modèle 2017 Apple - 10.5'' - 64 GB - WIFI <br>
                                        - rétroéclairage par LED  <br>
                                        Apple A10X Fusion Système d'exploitation :</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">$89.00</span>
                                        <span class="active_prise">
                                                            $49
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <div class="all_courses">


                    <div class="all_courses">
    <div class="container">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/m1.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span>dell corei7</span>
                                <h3><a href="#">Armoire Penderie - <br>
                                3 Battants - Marron</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(30000)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer"></span>
                                        <span class="active_prise">
                                                            30000
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/m2.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span>Table Basse</span>
                                <h3><a href="#">Table Basse EFFIE - Bois - Blanc,<br>
                                        pouvant fonctionner </a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(75000)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">75000</span>
                                        <span class="active_prise">
                                                            $49
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/m3.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span> 4 Chaise Royal</span>
                                <h3><a href="#">Ensemble de 4 Chaise Royal  <br>
                                en Plastique - Marron...</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(50000)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">50000</span>
                                        <span class="active_prise">
                                                        
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/m4.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span>Étagères</span>
                                <h3><a href="#">3 Étagères Rangement pour Cuisine  <br>
                                - Acier Inoxydable</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(19000)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">29000</span>
                                        <span class="active_prise">
                                                            19000
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <img src="{{asset('image/m5.jpg')}}" alt="">
                            </div>
                            <div class="courses_info">
                                <span>etageres </span>
                                <h3><a href="#">Etagères décoratives en bois<br>
                                décoratives en bois  </a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(40000)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">60000</span>
                                        <span class="active_prise">
                                                            40000
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/m6.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span>Armoire penderie</span>
                                <h3><a href="#">Armoire penderie 3 Battants - <br>
                                        -  134x43x172 cm - Bleu  <br>
                                        Armoire penderie 3 Battants -</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(20000)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">20000</span>
                                        <span class="active_prise">
                                                            20000
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <div class="all_courses">

           
<div class="all_courses">
    <div class="container">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/hom5.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span>Lot de 2 T-shirts</span>
                                <h3><a href="#">Lot de 2 T-shirts Design <br>
                                "PERFECT" & "TIGER" en Coton - Col Rond - Noir/Gris</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">9000</span>
                                        <span class="active_prise">
                                                            9000
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/hom6.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span>Lot de 3 Chemises</span>
                                <h3><a href="#">Lot de 3 Chemises - Manches Longues,<br>
                                - Manches Longues,coton </a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">450000</span>
                                        <span class="active_prise">
                                                            $49
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/hom7.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span>Pack de 2 Pantalons</span>
                                <h3><a href="#">Pack de 2 Pantalons Chinos pour Homme <br>
                                - Noir et Beige...</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">12000</span>
                                        <span class="active_prise">
                                                            12000S
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/hom4.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span>Photoshop</span>
                                <h3><a href="#">Mobile App design step by step <br>
                                        from beginner</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">$89.00</span>
                                        <span class="active_prise">
                                                            $49
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <img src="{{asset('image/ordi8.jpg')}}" alt="">
                            </div>
                            <div class="courses_info">
                                <span>UI/UX</span>
                                <h3><a href="#">How to complete user research <br>
                                        and make work flow</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">$89.00</span>
                                        <span class="active_prise">
                                                            $49
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/ordi9.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span>Tablette IPAD PRO</span>
                                <h3><a href="#">Tablette IPAD PRO Modèle 2017 Apple - 10.5'' - 64 GB - WIFI <br>
                                        - rétroéclairage par LED  <br>
                                        Apple A10X Fusion Système d'exploitation :</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">$89.00</span>
                                        <span class="active_prise">
                                                            $49
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <div class="all_courses">

                    <div class="all_courses">
    <div class="container">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/s2.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span>dell corei7</span>
                                <h3><a href="#">A51 - 4G - Double SIM - 6.5" FHD+ - 128GB <br>
                                - RAM 4GB - 48MP - 4000mAh - Garantie 24 mois</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">175000</span>
                                        <span class="active_prise">
                                                            175000
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/s3.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span>VideoProjecteur</span>
                                <h3><a href="#">Camon 12 Air- Dual SIM - 6.55" - Rom 32Go - Ram 3Go <br>
                                - Caméra 16MP+2MP+5MP Camera Frond 8MP - Batterie 4000mAh - Bleu</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">76000</span>
                                        <span class="active_prise">
                                                            76000
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/s4.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span> BenQ W1500</span>
                                <h3><a href="#">Écouteur Bluetooth - <br>
                                Universel Compatible avec tout smartphone - Blanc ...</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">40000</span>
                                        <span class="active_prise">
                                                            49000
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/s5.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span>Photoshop</span>
                                <h3><a href="#">It 5081 - 2.4" - 3 SIM - Batterie :<br>
                                 2000mAh - FM Radio - Lamp Torch - Ultra Mince </a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">9000</span>
                                        <span class="active_prise">
                                                            9000
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <img src="{{asset('image/s6.jpg')}}" alt="">
                            </div>
                            <div class="courses_info">
                                <span>UI/UX</span>
                                <h3><a href="#">Écouteurs sans Fil avec Boîtier<br>
                                 de Charge sans Fil à Induction - Noir</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">20000</span>
                                        <span class="active_prise">
                                                            20000
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('image/s7.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span>Tablette IPAD PRO</span>
                                <h3><a href="#">Tablette Enfant antichoc - Écran 7" <br>
                                - ROM 8Go - RAM 1Go - Batterie 2800 mah - Bleu  :</a></h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>25000</span>
                                    </div>
                                    <div class="prise">
                                        <span class="offer">25000</span>
                                        <span class="active_prise">
                                                            25000
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <div class="all_courses">


<!-- form itself end-->
<form id="test-form" class="white-popup-block mfp-hide">
    <div class="popup_box ">
        <div class="popup_inner">
            <div class="logo text-center">
                <a href="#">
                    <img src="img/form-logo.png" alt="">
                </a>
            </div>
            <h3>Se connecter</h3>
            <form action="#">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <input type="email" placeholder="Enter email">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="password" placeholder="Password">
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="boxed_btn_orange">Connexion</button>
                    </div>
                </div>
            </form>
            <p class="doen_have_acc">Creer un compte ? <a class="dont-hav-acc" href="#test-form2">connecter</a>
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
                        <button type="submit" class="boxed_btn_orange">Connexion</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</form>
<!-- form itself end -->


<!-- JS here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/gijgo.min.js"></script>

<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>

<script src="js/main.js"></script>
</body>

</html>
