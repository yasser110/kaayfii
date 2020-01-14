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
                            <a href="index.html">
                                <img src="img/logo.png" alt="">KAAYFII
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a  href="{{asset('home')}}">Accueil</a></li>
                                    <li><a  href="{{asset('Produit')}}">Produit</a></li>
                                    <li><a href="#">Electronique <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="{{asset('Smartphone')}}">Smartphone</a></li>
                                            <li><a href="{{asset('Info')}}">informatique</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="active" href="{{asset('Meubles')}}">Meubles</a></li>
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


<div class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-50" src="{{asset('image/m5.jpg')}}" alt="Un tigre">
            <div class="carousel-caption d-none d-md-block">
                <h1>Etagères décoratives</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-50" src="{{asset('image/m6.jpg')}}"  alt="Un tigre">
            <div class="carousel-caption d-none d-md-block">
                <h1>Armoire penderie 3 Battants</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-50" src="{{asset('image/m7.jpg')}}" alt="Un tigre">
            <div class="carousel-caption d-none d-md-block">
                <h1>Lampe discothèque en boule</h1>
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
