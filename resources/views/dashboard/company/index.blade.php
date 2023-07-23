@extends('layouts.dashboard')

<style>
    p {
        color: #777;
    }
</style>

@section('title','Company Informations')

@section('breadcrumb')
@parent

<li class="breadcrumb-item active">Our Company Information</li>

@endsection

@section('content')


@foreach($companies as $company)

<div class="p-5">

    <x-alert type="success" />

    <div>
        <h4>Header Information</h4>
        <p>{{$company->header_text}}</p>
    </div>

    <div>
        <h4>About Company Introduction</h4>
        <p>{{ $company->about_company_introduction}}</p>
    </div>

    <div>
        <h4>About Company Details</h4>
        <p>{{ $company->about_company_details}}</p>
    </div>

    <div>
        <h4>Services Information</h4>
        <p>{{ $company->service_introduction}}</p>
    </div>

    <div>
        <h4>Course Information</h4>
        <p>{{ $company->course_introduction}}</p>
    </div>

    <div>
        <h4>Project Information</h4>
        <p>{{ $company->project_introduction}}</p>
    </div>


    <div>
        <h4>Team Information</h4>
        <p>{{ $company->team_introduction}}</p>
    </div>

    <div>
        <h4>Contact Information</h4>
        <p>{{ $company->contact_introduction}}</p>
    </div>

    <div>
        <h4>Company Address</h4>
        <p>{{ $company->address}}</p>
    </div>

    <div>
        <h4>Company Phone</h4>
        <p>{{ $company->phone}}</p>
    </div>

    <div>
        <h4>Company Gmail</h4>
        <p>{{ $company->gmail}}</p>
    </div>


    <a href="{{route('dashboard.company.edit',$company->id)}}" class="btn btn-sm btn-success">Edit Information</a>

</div>


@endforeach


@endsection