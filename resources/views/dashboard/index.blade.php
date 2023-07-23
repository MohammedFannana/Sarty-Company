@extends('layouts.dashboard')

@section('title','Dashboard')



@push('styles')
<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush

@section('content')



<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3 class="text-white"><?php

                                                use Illuminate\Support\Facades\DB;

                                                echo DB::table('users')->count(); ?>
                        </h3>
                        <h4>New Employees</h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{route('dashboard.team.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- ./col -->

            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3 class="text-white"><?php
                                                echo DB::table('projects')->count(); ?>
                        </h3>
                        <h4>Projects</h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{route('dashboard.project.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->


            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3 class="text-white"><?php


                                                echo DB::table('services')->count(); ?>
                        </h3>

                        <h4 class="text-white">Services</h4>
                    </div>


                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>

                    <a href="{{route('dashboard.service.index')}}" style="    color: white!important;
" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->


    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection