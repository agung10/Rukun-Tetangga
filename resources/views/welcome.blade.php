<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Website Title -->
    <title>Rukun Tetangga 001</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="{{asset('assets/wellcome/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/wellcome/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/wellcome/css/swiper.css')}}" rel="stylesheet">
	<link href="{{asset('assets/wellcome/css/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{asset('assets/wellcome/css/styles.css')}}" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="{{asset('assets/stisla/img/logo/logo-1.png')}}">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Image Logo -->
        <img src="{{asset('assets/stisla/img/logo/logo-3.png')}}" alt="logo" width="60" class="rounded-circle">
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
            @if (Route::has('login'))
                @auth
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('login') }}">Login</a>
                </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('register') }}">Register</a>
                    </li>
                    @endif
                @endauth
            @endif
            </ul>
        </div>
    </nav> 
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise">RuTe -</span>- Rukun Tetangga</h1>
                            <p class="p-large">
                               "Merupakan aplikasi untuk pendataan sederhana dilingkungan RT" 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="{{asset('assets/wellcome/images/wellcome-bg.png')}}" alt="alternative" style="margin-bottom:13%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end of header -->
	
    <!-- Scripts -->
    <script src="{{asset('assets/wellcome/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/wellcome/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/wellcome/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/wellcome/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/wellcome/js/swiper.min.js')}}"></script>
    <script src="{{asset('assets/wellcome/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('assets/wellcome/js/validator.min.js')}}"></script>
    <script src="{{asset('assets/wellcome/js/scripts.js')}}"></script>
</body>
</html>