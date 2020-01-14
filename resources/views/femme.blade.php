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
                                <img src="{{asset('image/f1.jpg')}}"  alt="">
                            </div>
                            <p>
                            Ensemble Collier + <br> 
                            Boucles d'oreilles
                             <br>-  - Plaqué Or
                            </p>
                            <span>-Ensemble Collier</span>
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
                                <img src="{{asset('image/f2.jpg')}}" alt="">
                            </div>
                            <p>
                            Tissus Africain Avogan <br>
                            Wax- 6 Yards  
                                <br>
                                - 100% cotton-Nouvel
                            </p>
                            <span>-tissus</span>
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
                                <img src="{{asset('image/hom4.jpg')}}" alt="">
                            </div>
                            <p>
                               <br>Pantalon Super 100    <br>
                               Slim en Coton Gris - Homme
                            <br> Slim en Coton Gris - Homme.

                            </p>
                            <span>-Pantalon Super 100 </span>
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
            <img class="d-block w-50" src="{{asset('image/hom1.jpg')}}" alt="Un tigre">
            <div class="carousel-caption d-none d-md-block">
                <h1>veste bleu</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-50" src="{{asset('image/hom6.jpg')}}"  alt="Un tigre">
            <div class="carousel-caption d-none d-md-block">
                <h1>asus avec SSD</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-50" src="{{asset('image/hom4.jpeg')}}" alt="Un tigre">
            <div class="carousel-caption d-none d-md-block">
                <h1>super 100</h1>
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

