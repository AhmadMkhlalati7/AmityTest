<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>AMITY - Machine Test</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/en/f/ff/Amity_University_logo.png" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

    <!--====== Glide CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/tiny-slider')}}.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/LineIcons.2')}}.0.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-5')}}.0.0-beta1.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <section id="home" class="header_area">
        <div id="header_navbar" class="header_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="/">
                                <img id="logo" src="{{asset('assets/images/logo.png')}}" alt="Logo">
                            </a>
                            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll active" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="page-scroll" href="#apply">Apply</a>
                                    </li>
                                    <li class="nav-item">
                                        <a  href="{{route('login')}}">Admin Area</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->

        <div class="header_hero">
            <div class="single_hero bg_cover d-flex align-items-center" style="background-image: url(https://www.amity.edu/backoffice/Uploads/HomeBanner/7banner_7banner_amity1.webp)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="hero_content text-center">
                                <h2 class="hero_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">STUDY AT </br> AMITY</h2>
                                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Amity sets the benchmarks of the global education with a system that matches the best of practices, theories, resources and standards all over the world                                </p>
                                <a href="#features" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Apply Now</a>
                            </div> <!-- hero content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single hero -->
        </div> <!-- header hero -->
    </section>

    <!--====== HEADER PART ENDS ======-->



    <!--====== ABOUT PART START ======-->

    <section id="about" >
        <div class="about_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about_content pt-120 pb-130">
                            <div class="section_title pb">
                                <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">About Amity</h4>
                                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">At Amity we are passionate about grooming leaders who are not only thorough professionals but also good human beings with values and sanskars.

                                </p>

                            </div> <!-- section title -->

                        </div> <!-- about content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->

            <div class="about_image bg_cover wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay="0.2s"
                style="background-image: url(https://www.amity.edu/images/academia-img2.jpg)">
                <div class="image_content">
                    <h4 class="experience"> Top  <span>3%</span>
                        UNIVERSITIES GLOBALLY</h4>
                </div>
            </div> <!-- about image -->
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== Apply PART START ======-->

    <section id="apply" class="contact_area bg_cover pt-120 pb-130" style="background-image: url(https://www.amity.edu/images/academia-img1.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title section_title_2 text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Apply Now</h4>
                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">Amity sets the benchmarks of the global education with a system that matches the best of practices, theories, resources and standards all over the world.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

            <form id="contact-form" action="{{ route('apply.store') }}" method="POST" class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single_form">
                            <input type="text" placeholder="Name" name="name" id="name" required>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single_form">
                            <input type="email" placeholder="Email" name="email" id="email" required>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single_form">
                            <input type="text" placeholder="Phone Number" name="phone" id="phone" required>
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single_form">
                            <select placeholder="Programs" name="programs" id="programs" required>
                                @foreach ($programs as $program)
                                    <option class="text-dark" value="{{ $program->id }}">{{ $program->name }}</option>
                                @endforeach
                            </select>
                            @error('programs')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <p class="form-message"></p>
                    <div class="col-lg-12">
                        <div class="single_form text-center">
                            <button class="main-btn" type="submit">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </form>
        </div> <!-- container -->
    </section>

    <!--====== Apply PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer_area">
        <div class="container">
            <div class="footer_wrapper text-center d-lg-flex align-items-center justify-content-between">
                <p class="credit">Designed and Developed by Ahmad Mkhlalati</p>
                <div class="footer_social pt-15">
                    <ul>
                        <li><a href="#0"><i class="lni lni-facebook-original"></i></a></li>
                        <li><a href="#0"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="#0"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#0"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul>
                </div> <!-- footer social -->
            </div> <!-- footer wrapper -->
        </div> <!-- container -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->


    <!--====== Bootstrap js ======-->
    <script src="{{asset('assets/js/bootstrap.bundle-5.0.0-beta1.min.js')}}"></script>

    <!--====== glide js ======-->
    <script src="{{asset('assets/js/tiny-slider.js')}}"></script>

    <!--====== wow js ======-->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {!! Toastr::message() !!}

</body>

</html>
