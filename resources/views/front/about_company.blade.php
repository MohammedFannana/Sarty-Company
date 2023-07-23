@extends('layouts.sarty_front')

@section('content')

<div class="introduction container-fluid text-center text-white p-4" style="background-color: #085faa; box-sizing:none;">

    <h5 class="mb-3">عنا</h5>

    <!-- This company send to all controller in index function compact base on view in all index using middleware -->
    <p> {{ $company->first()->about_company_introduction }} </p>

</div>

<!-- {{$company->first()->about_company_introduction}} -->

<div class="section" style="padding-top:50px; padding-bottom:50px">

    <div class="container">
        <div class="row g-5 align-items-center"> <!-- g-5  --> <!-- Removed class By IBM -->

            <div class="col-lg-6 col-md-6 col-sm-12 mb-5" style="visibility: visible;" data-aos="zoom-in-up" data-aos-duration="1000">
                <p class="mb-4 p2p fs-5">
                    {{ $company->first()->about_company_details }}
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" data-aos="zoom-in-up" data-aos-duration="1000">
                <img class="img-about " src="photo/ph3.png" width="100%" height="100%">
            </div>
        </div>
    </div>


</div>

@endsection