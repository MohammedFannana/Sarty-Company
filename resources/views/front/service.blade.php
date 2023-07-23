@extends('layouts.sarty_front')

@section('content')

<div class="introduction container-fluid text-center text-white p-4 mb-5" style="background-color: #085faa; box-sizing:none;">

    <h5 class="mb-3">الخدمات</h5>
    <p> {{ $company->first()->service_introduction }}
    </p>


</div>



<div class="section" style="padding-top:50px; padding-bottom:50px">
    <div class="container">
        <div class="row">
            @foreach($services as $service)
            <div class="card col-lg-3 col-md-4 col-sm-4 col-xs-12 p-0 m-4" data-aos="zoom-in-down" data-aos-duration="1000">

                <div style="height: 160px;">
                    <img src="{{asset('storage/' . $service->image)}}" class="card-img-top" width="96%" height="100%" alt="...">
                </div>

                <div class="p-3">
                    <h6 class="text-center">{{$service->name}}</h6>

                    <p class="card-text mb-1">{{$service->description}}</p>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection