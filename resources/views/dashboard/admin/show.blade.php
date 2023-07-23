<!-- <div>
            <img src="{{asset('storage/' . $admin->image)}}" alt="">
        </div> -->




@extends('layouts.dashboard')


<style>
    @media(max-width:767px) {
        .card .row {
            display: flex;
            flex-direction: column;
            margin-bottom: 30px;
        }

        .card .content {
            text-align: center;
        }
    }
</style>

@section('title','Team Member')

@section('breadcrumb')
@parent

<li class="breadcrumb-item active">Our Admin</li>
<li class="breadcrumb-item active">Admin</li>

@endsection

@section('content')


<!-- Start team Member Details -->

<div class="card mb-3" style="padding: 70px;">
    <div class="row align-items-center">

        <div class="col-lg-8 col-md-8 col-6">
            <img src="{{$admin->image_url}}" alt="#" style="max-width: 300px;">
        </div>

        <div class="col-lg-4 col-md-4 col-6 content">
            <div>
                <h2 class="title">{{$admin->name}}</h2>
                <p>
                    Email:
                    <a class="link-offset-2 link-underline link-underline-opacity-0" href="mailto:{{$admin->email}}">{{$admin->email}}</a>
                </p>
                <p class="info-text">{{$admin->description}}</p>

                <div class="social">
                    <a class="btn btn-outline-primary btn-social" href="{{$admin->linkedln}}"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-social" href="{{$admin->facebook}}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-social" href="{{$admin->instagram}}"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- End Item Details -->



@endsection