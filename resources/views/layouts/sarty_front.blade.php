<!DOCTYPE html>
<html dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>SARTY</title>
    <link rel="icon" href="photo/logo1.png">

    <style>
        .footer_link,
        header .nav-item .nav-link {
            color: #212529;
        }

        .footer_link:hover {
            color: #0d6efd;
        }

        .social_footer {
            background-color: #eef0ef;
            padding: 30px 100px;
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
        }

        header .nav-item .nav-link:hover {
            color: #0d6efd;
        }
    </style>

    @stack('front_styles')

</head>

<body dir="rtl">

    <header dir="ltr">
        <nav class="navbar navbar-expand-lg navbar-light nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="photo/logo1.png" alt="" width="130px" height="70px"> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link  " href="{{route('home')}}"> الرئيسية <span class="sr-only">(current)</span></a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}"> عن الشركة </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('services')}}"> خدماتنا </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{route('projects')}}"> أعمالنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('users')}}"> فريقنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('courses')}}"> دوراتنا </a>
                        </li>



                        <li class="nav-item">
                            <button type="button" class="btn btn-primary text-white button_nav" style="margin-right:5px" href="{{route('contact')}}"> ابدأ مشروعك </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary button2_nav" href="#" role="button">EN</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>



    @yield('content') <!-- use to show section name is content -->


    <!-- Start Footer Section  -->
    <footer class="footer" style="background-color: #f9faf9;">
        <div class="container py-5 px-lg-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-4 hhh">
                    <img class="footer-logo" src="photo/logo1.png" alt="logo" width="200px" height="150px">
                    <p class="section-title  h6 mb-4">شركة سارتي للخدمات البرمجية<span></span></p>

                </div>

                <div class="col-md-6 col-lg-4">
                    <p class="section-title  h6 mb-4 hhh">الروابط السريعة<span></span></p>


                    <a class=" footer_link text-decoration-none" href="{{route('home')}}">الرئيسية </a><br>
                    <a class=" footer_link text-decoration-none" href="{{route('courses')}}"> دوراتنا </a><br>

                    <a class=" footer_link text-decoration-none" href="{{route('services')}}">خدماتنا</a><br>
                    <a class=" footer_link text-decoration-none" href="{{route('about')}}">عن الشركة</a><br>
                    <a class=" footer_link text-decoration-none " href="{{route('contact')}}">تواصل معنا</a><br>

                </div>


                <div class="col-md-6 col-lg-4">

                    <p class="section-title  h6 mb-4 ">العنوان<span></span></p>

                    <?php

                    use Illuminate\Support\Facades\DB;

                    $companies_information = DB::table('company_information')->get();
                    ?>
                    @foreach($companies_information as $company_information)

                    <p class="man"><i class="fa fa-map-marker-alt me-3 man"></i> {{ $company->first()->address }}</p>
                    <p class="man"><i class="fa fa-phone-alt me-3 man"></i> {{ $company->first()->phone }}</p>
                    <p class="man"><i class="fa fa-envelope me-3 man"></i> {{ $company->first()->gmail }}

                        @endforeach

                </div>

            </div>
        </div>

        <div class="social_footer">

            <p class="pfoter fs-6 "> جميع الحقوق محفوظة <br> &copy; <br> <a href="{{route('home')}}" class="text-decoration-none text-dark">لشركة سارتي</a> </p>

            <div class="social-links text-md-right pt-3 ">
                <a class="btn btn-primary btn-social" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-primary btn-social" href="https://www.facebook.com/sarty.company"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-primary btn-social" href="https://www.instagram.com/sarty.company/"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-primary btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>

        </div>
    </footer> <!-- End Footer Section  -->


    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.min.js.map"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @stack('front_script')

</body>

</html>