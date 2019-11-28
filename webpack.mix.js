const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
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
 */

mix.js(['resources/js/app.js',
'resources/js/bootstrap.js','resources/js/bootstrap.min.js',
'resources/js/ajax-form.js','resources/js/gijgo.min.js',
'resources/js/gmap3.min.js','resources/js/imagesloaded.pkgd.min.js',
'resources/js/isotope.pkgd.min.js','resources/js/jquery.form.js',
'resources/js/jquery.ajaxchimp.min.js','resources/js/jquery.counterup.min.js',
'resources/js/contact.js','resources/js/jquery.magnific-popup.min.js',
'resources/js/jquery.scrollUp.min.js','resources/js/jquery.validate.min.js',
'resources/js/jquery.slicknav.min.js',
'resources/js/mail-script.js','resources/js/main.js',
'resources/js/nice-select.min.js','resources/js/plugins.js',
'resources/js/owl.carousel.min.js','resources/js/popper.min.js',
'resources/js/scrollIt.js','resources/js/waypoints.min.js',
'resources/js/wow.min.js'],'public/js')
     .sass('resources/sass/app.scss', 'public/css')
     .styles([
        "resources/css/bootstrap.min.css",
        "resources/css/owl.carousel.min.css",
        "resources/css/magnific-popup.css",
        "resources/css/font-awesome.min.css",
        "resources/css/themify-icons.css",
        "resources/css/nice-select.css",
        "resources/css/flaticon.css",
        "resources/css/gijgo.css",
        "resources/css/animate.css",
        "resources/css/slicknav.css",
        "resources/css/style.css"
     ], 'public/css/all.css');
