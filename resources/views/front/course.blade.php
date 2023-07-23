@extends('layouts.sarty_front')

@push('front_styles')
<style>
    .card-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .card-intro {
        display: flex;
        justify-content: space-between;
        padding-bottom: 0px !important;
    }
</style>
@endpush

@section('content')

<div class="introduction container-fluid text-center text-white p-4" style="background-color: #085faa; box-sizing:none;">

    <h5 class="mb-3">الدورات</h5>
    <p>
        {{ $company->first()->course_introduction }}
    </p>
</div>

<div class="section" style="padding-top:50px; padding-bottom:50px">
    <div class="row">
        @foreach($courses as $course)

        <div class="col-lg-4 col-md-6 sm-mt-5 col-xs-12" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">


            <div class="card">
                <img src="{{ $course->image_url}}" alt="...">

                <div class="card-intro p-3">
                    <div>
                        <p class="text-body fw-bold"> عدد الساعات : {{$course->houresNumber}}</p>
                    </div>
                    <div>


                        <a href="https://wa.me/+972567719788" type="button" class="btn btn-sm btn-primary">التفاصيل</a>
                    </div>
                </div>


                <div class="card-body">
                    <h5 class="card-title">{{$course->name}}</h5>
                    <p class="card-text">{{$course->summaryOfCourse}}</p>
                </div>

                <div class="p-3" style="padding-top:0px!important;padding-bottom:0px!important;">
                    <p class="text-body" style="    font-size: 14px; color: #777777 !important;"> عددالمستويات : {{$course->courseLevelsNumber}}</p>
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

@endsection