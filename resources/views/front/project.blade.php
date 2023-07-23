@extends('layouts.sarty_front')

@section('content')

<div class="introduction container-fluid text-center text-white p-4" style="background-color: #085faa; box-sizing:none;">

    <h5 class="mb-3">المشاريع</h5>
    <p> {{ $company->first()->project_introduction }}
    </p>

</div>

<div class="section" style="padding-top:50px; padding-bottom:50px">
    <div class="container">
        <div class="row">
            @foreach($projects as $project)
            <div class="card col-lg-3 col-md-4 col-sm-4 col-xs-12 p-0 m-4" data-aos="zoom-in-down" data-aos-duration="1000">

                <img src="{{asset('storage/' . $project->image)}}" class="card-img-top" alt="...">
                <a class="p-3 text-decoration-none" href="{{$project->url}}">
                    <h6>{{$project->name}}</h6>
                </a>
                <p class="card-text p-3 mb-4">{{$project->description}}</p>

            </div>

            @endforeach
        </div>
    </div>
</div>

@endsection