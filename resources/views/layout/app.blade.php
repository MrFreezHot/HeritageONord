<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heritage O Nord</title>

    <meta name="keywords" content="HTML5 Template">
	<meta name="description" content="Heritage O Nord Data">
	<meta name="author" content="Mr FreezHot">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ secure_asset('/img/heritageonord.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ secure_asset('/img/apple-touch-icon.png') }}">
    <link href="{{ secure_asset('/css/tobii.min.css')}}" rel="stylesheet">

    <!-- Mobile Metas -->
     <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&amp;display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ secure_asset('/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/vendor/magnific-popup/magnific-popup.min.css') }}"> -->


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ secure_asset('/css/theme.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/css/theme-shop.css') }}">

    <!-- Revolution Slider CSS -->
    <link rel="stylesheet" href="{{ secure_asset('/vendor/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/vendor/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/vendor/rs-plugin/css/navigation.css') }}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ secure_asset('/vendor/circle-flip-slideshow/css/component.css') }}"> 

    <!-- tablelsaw CSS-->
    <link href="{{secure_asset('/vendor/tablesaw/dist/tablesaw.css')}}" rel="stylesheet">

    <!--echarts JS-->
    <script src="{{secure_asset('/vendor/echarts/echarts-all.js')}}"></script>

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ secure_asset('/css/skins/default.css') }}">

    <!--Theme Custom CSS -->
    <link rel="stylesheet" href="{{ secure_asset('/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ secure_asset('/vendor/modernizr/modernizr.min.js') }}"></script>


    

</head>
<body data-plugin-page-transition>
    <div class="body">

    <!--HEADER START-->

    <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0">
            <div class="header-container container container-xl-custom">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="{{route('acceuil')}}">
                                    <img alt="Heritage o Nord" width="80" height="65" data-sticky-width="82" data-sticky-height="40" src="{{asset('img/heritageonord.png')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-links">
                                <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-arrow header-nav-main-effect-3 header-nav-main-sub-effect-1">
                                    <nav class="collapse navbar-collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown">
                                                <a class="dropdown-item  active" href=" {{route('waitingg')}} ">
                                                    Acceuil
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item" href="#apropos">
                                                    Histoire
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#portfolio">
                                                    Culture
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item " href="#service">
                                                    Sport
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item" href="#">
                                                    Tourisme
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item" href="#">
                                                    Service
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item" href="#contact">
                                                    Contact
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                            <i class="fas fa-bars"></i>
                                        </button>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
        <hr class="my-1">
    </header>

    <!-- HEADER STOP -->
    @yield('content')

    <!--FOOTER START -->

    <footer id="footer">
        <div class="footer-copyright">
            <div class="container py-2">
                <div class="row py-4">
                    <div class="col text-center">
                        <ul class="footer-social-icons social-icons social-icons-clean social-icons-icon-light mb-3">
                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
                            <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
                            <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
                            <li class="social-icons-linkedin"><a href="http://www.github.com/" target="_blank" title="Github"><i class="fab fa-github text-2"></i></a></li>
                        </ul>
                        <p><strong>Heritage O Nord</strong> - © Copyright 2022. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


            <!-- Vendor -->
        <script src={{asset('/vendor/jquery/jquery.min.js')}}></script>
        <script src={{asset('/vendor/jquery.appear/jquery.appear.min.js')}}></script>
        <script src={{asset('/vendor/jquery.easing/jquery.easing.min.js')}}></script>
        <script src={{asset('/vendor/jquery.cookie/jquery.cookie.min.js')}}></script>
        <script src={{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>
        <script src={{asset('/vendor/jquery.gmap/jquery.gmap.min.js')}}></script>
        <script src={{asset('/vendor/lazysizes/lazysizes.min.js')}}></script>
        <script src={{asset('/vendor/isotope/jquery.isotope.min.js')}}></script>
        <script src={{asset('/vendor/owl.carousel/owl.carousel.min.js')}}></script>
        <script src={{asset('/vendor/magnific-popup/jquery.magnific-popup.min.js')}}></script>
        <script src={{asset('/vendor/vide/jquery.vide.min.js')}}></script>
        <script src={{asset('/vendor/vivus/vivus.min.js')}}></script>

        <!-- Theme Base, Components and Settings -->
        <script src={{asset('/js/theme.js')}}></script>

        <!-- Circle Flip Slideshow Script -->
        <script src={{asset('/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js')}}></script>
        <!-- Current Page Views -->
        <script src={{asset('/js/views/view.home.js')}}></script>

        <!-- Theme Custom -->
        <script src={{asset('/js/custom.js')}}></script>

        <!-- Theme Initialization Files -->
        <script src={{asset('/js/theme.init.js')}}></script>

</body>
</html>
