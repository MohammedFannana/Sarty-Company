@extends('layouts.sarty_front')

@section('content')

<style>
    .img-team {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        overflow: hidden;
        text-align: center !important;
        margin-bottom: 20px;
        margin-top: 5px;
    }

    .div_team {
        border: 2px rgb(0, 0, 0) solid;
        border-radius: 15px;
        border-color: #0e7fc3 #eee#eee#eee;
    }
</style>

<div class="introduction container-fluid text-center text-white p-4" style="background-color: #085faa; box-sizing:none;">

    <h5 class="mb-3">الفريق</h5>
    <p> {{ $company->first()->team_introduction }}
    </p>

</div>

<section class="sec4  text-center" style="padding-top:50px; padding-bottom:50px">
    <div class="container">
        <div class="row">
            @foreach($users as $user)
            <div class="col-lg-3 col-md-6 col-sm-12" data-aos=" zoom-in-down" data-aos-duration="1000">
                <div class="div_team">
                    <div class="image">
                        <img class="img-team" src="{{ $user->image_url}}" alt="">
                    </div>
                    <p class="chief" style="font-size: x-large;">{{$user->name}}</p>
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


@endsection