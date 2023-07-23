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
    <link rel="stylesheet" href="css/css.css">
    <title>SARTY</title>
    <link rel="icon" href="photo/logo1.png">
</head>

<body dir="rtl">
    <div style="height: 100vh;    background-color:#2a0055d1;">
        <header dir="ltr">
            <nav class="navbar navbar-expand-lg navbar-dark nav">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="photo/logo1.png" alt="" width="130px" height="70px"> </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link color" href="{{route('home')}}"> الرئيسية <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color" href="{{route('about')}}"> عن الشركة </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link color" href="{{route('services')}}"> خدماتنا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color" href="{{route('projects')}}"> أعمالنا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color" href="{{route('users')}}"> فريقنا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color" href="{{route('courses')}}"> دوراتنا</a>
                            </li>
                            <li class="nav-item">
                                <a type="button" class="btn btn-primary text-white button_nav" href="{{route('contact')}}"> ابدأ مشروعك </a>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="btn btn-primary button2_nav" href="#contact_me" role="button">EN</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="div2" dir="ltr">
            <div class="container main ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 img_hero " data-aos="zoom-in-up" data-aos-duration="1000">
                        <img src="photo/ph2.png" alt="sarty" width="100%" height="100%">
                    </div>
                    <div class="col-lg-6 col-md-6 div3" data-aos="zoom-in-left" data-aos-duration="1000">
                        <p class="head">شركة سارتي للخدمات البرمجية </p>


                        <p class="head2 mb-4">{{$company->first()->header_text}}</p>
                        <a class="learn-more1 text-center text-decoration-none btn btn-primary" type="button" href="{{route('contact')}}"> ابدأ مشروعك</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="sec1">
        <div class="container">
            <div class="row g-5 align-items-center"> <!-- g-5  --> <!-- Removed class By IBM -->

                <div class="col-lg-6 col-md-6 col-sm-12 mb-5" style="visibility: visible;" data-aos="zoom-in-up" data-aos-duration="1000">
                    <p class="about">عن الشركة<span></span></p>
                    <p class="mb-4 p2p">
                        {{$company->first()->about_company_introduction}}
                    </p>

                    <a href="{{route('about')}}" class="btn btn-outline-primary more-btn py-sm-2 px-sm-4 - mt-2 button3">قراءة المزيد </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12" data-aos="zoom-in-up" data-aos-duration="1000">
                    <img class="img-about " src="photo/ph3.png" width="100%" height="100%">
                </div>
            </div>
        </div>
    </section>



    <!--start section 2-->
    <section class="sec2">
        <div class="container">
            <div class="section-title mb-0" data-aos="fade-down-left" data-aos-duration="1000">
                <h2 class="title_sec2">خدماتنا !</h2>
            </div>
            <!-- <div class="row align-items-center div10">  -->
            <div class="row">

                @foreach($services as $service)
                <div class="col-lg-3 col-md-6 sm-mt-6 col-xs-12 div_1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="div">
                        <div class="featured-item text-center ">
                            <div class="featured-icon" style="height:130px">
                                <img class="img-center lazyloaded" src="{{asset('storage/' . $service->image)}}" height="100%" width="90%" alt="">
                            </div>
                            <div class="featured-title mb-3 mt-3">
                                <h5 class="h5_k"> {{$service->name}}</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- start courses page -->

    <section class="sec7">
        <div class="container">
            <div class="section-title mb-0" data-aos="fade-down-left" data-aos-duration="1000">
                <h2 class="title_sec2">دوراتنا !</h2>
            </div>
            <!-- <div class="row align-items-center div10">  -->
            <div class="row">

                @foreach($courses as $course)

                <div class="col-lg-4 col-md-6 sm-mt-5 col-xs-12" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">


                    <div class="card ">
                        <img src="{{ $course->image_url}}" alt="...">

                        <div class="card-intro p-3">
                            <div>
                                <p class="text-body"> عدد الساعات : {{$course->houresNumber}}</p>
                            </div>
                            <div>
                                <a href="https://wa.me/+972567719788" type="button" class="btn btn-sm btn-primary">التفاصيل</a>
                            </div>
                        </div>


                        <div class="card-body">
                            <h5 class="card-title">{{$course->name}}</h5>
                            <p class="card-text">{{$course->summaryOfCourse}}</p>
                        </div>

                        <div>
                            <p class="level p-3"> عددالمستويات : {{$course->courseLevelsNumber}}</p>
                        </div>

                        <div class="card-footer">
                            <div>
                                <h6 class="text-body-secondary">{{$course->teacherName}}</h6>
                            </div>
                            <div>
                                <img src="photo/logo1.png" alt="" width="70px" height="50px">
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </section>


    <!-- end course page -->


    <section class="sec3">
        <div class="container">
            <div data-aos="zoom-in-up" data-aos-duration="1000">
                <p class="title_sec2">أعمالنا ومشاريعنا</p>
            </div>
            <div class="row">
                @foreach($projects as $project)
                <div class="col-lg-3 am_1" data-aos="zoom-in-down" data-aos-duration="1000">
                    <a href="{{$project->url}}">
                        <div class="word">
                            <img src="{{asset('storage/' . $project->image)}}" alt="" width="100%" height="200px">
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
    </section>


    <!--  -->
    <section class="sec4 mb-5 text-center">
        <div class="container">
            <div data-aos="fade-down">
                <p class="title_sec2">فريقنا !</p>
            </div>

            <div class="row">
                @foreach($users as $user)
                <div class="col-lg-3 col-md-6 col-sm-12" data-aos=" zoom-in-down" data-aos-duration="1000">
                    <div class="divteam">
                        <div class="mage">
                            <img class="img-team" src="{{ $user->image_url}}" alt="">
                        </div>
                        <p class="chief" style="height: 80px;">{{$user->name}}</p>
                        <p class="chieff">{{$user->description}} </p>
                        <div class="social mb-2">
                            <a class="btn btn-outline-primary " href="{{$user->linkedln}}"> <i class="fab fa-linkedin-in"> </i> </a>
                            <a class="btn btn-outline-primary " href="{{$user->facebook}}"> <i class="fab fa-facebook-f"> </i> </a>
                            <a class="btn btn-outline-primary " href="{{$user->instagram}}"> <i class="fab fa-instagram"> </i> </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


        </div>
    </section>

    <!--  -->
    <section class="sec7">
        <div class="container">
            <div>
                <p class="title_sec2" id="contact_me">تواصل معنا </p>
            </div>
            <div class="row">

                <div class="col-lg-5" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div class="form">
                        <form class="form1" action="{{route('contactStore')}}" method="post">
                            @csrf

                            <div class="mb-3">
                                <x-form.input label="اسمك الشخصي " placeholder="ادخل اسمك الشخصي" name="name" type="text" />

                            </div>
                            <div class="mb-3">
                                <x-form.input label=" رقم الهاتف " placeholder="ادخل رقم الهاتف" name="phoneNumber" type="phone" />

                            </div>
                            <div class="mb-3">
                                <x-form.input label="بريدك الالكتروني " placeholder="ادخل بريدك الالكتروني" name="email" type="email" />

                            </div>

                            <div class="form-group">
                                <x-form.textarea label="رسالتك" name="message">{{old('message')}}</x-form.textarea>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">إرسال</button>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div style="width: 100%;">
                        <img class="bord" src="photo/kar.jpg" alt="" width="100%" height="420px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <footer class="footer" style="background-color: #2a0055d1;
">
        <div class="container py-5 px-lg-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-4">
                    <img class="footer-logo" src="photo/logo1.png" alt="logo" width="200px" height="150px">
                    <p class=" text-white h6 mb-4">شركة سارتي للخدمات البرمجية<span></span></p>

                </div>
                <div class="col-md-6 col-lg-4">
                    <p class="section-title h6 mb-4 text-white">الروابط السريعة<span></span></p>
                    <a class=" btn-link text-white" href="{{route('home')}}">الرئيسية </a><br>
                    <a class=" btn-link text-white" href="{{route('courses')}}">دوراتنا</a><br>

                    <a class=" btn-link text-white" href="{{route('services')}}">خدماتنا</a><br>
                    <a class=" btn-link text-white" href="{{route('about')}}">عن الشركة</a><br>
                    <a class=" btn-link text-white" href="{{route('contact')}}">تواصل معنا</a><br>


                </div>

                <div class="col-md-6 col-lg-4">
                    <p class="section-title text-white h6 mb-4 ">العنوان</p>
                    <p class="man"><i class="fa fa-map-marker-alt me-3 man"></i> {{ $company->first()->address }}
                    </p>
                    <p class="man"><i class="fa fa-phone-alt me-3 man"></i> {{ $company->first()->phone }}
                    </p>
                    <p class="man"><i class="fa fa-envelope me-3 man"></i> {{ $company->first()->gmail }}
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/sarty.company"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/sarty.company/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

            </div>
        </div>
        <p class="pfoter fs-6"> جميع الحقوق محفوظة @ <a href="{{route('home')}}" class="btn-link text-white">لشركة سارتي</a> </p>
    </footer>


    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.min.js.map"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>