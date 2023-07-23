@extends('layouts.dashboard')

@section('title','Edit Course')

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Our Company Information</li>
<li class="breadcrumb-item active">Edit Company Information</li>

@endsection

@section('content')

<form action="{{route('dashboard.company.update',$company->id)}}" method="post" class="ml-3" enctype="multipart/form-data"> <!-- you must use enctype if input type file-->
    @csrf
    @method('put')

    <div class="form-group">
        <label for="">Header Information</label>
        <textarea name="header_text" class="form-control">{{old('header_text',$company->header_text)}}</textarea>
    </div>


    <div class="form-group">
        <label for="">About Company Introduction</label>
        <textarea name="about_company_introduction" class="form-control">{{old('about_company_introduction',$company->about_company_introduction)}}</textarea>
    </div>

    <div class="form-group">
        <label for="">About Company Details</label>
        <textarea name="about_company_details" class="form-control">{{old('about_company_details',$company->about_company_details)}}</textarea>
    </div>

    <div class="form-group">
        <label for="">Services Information</label>
        <textarea name="service_introduction" class="form-control">{{old('service_introduction',$company->service_introduction)}}</textarea>
    </div>

    <div class="form-group">
        <label for="">Course Information</label>
        <textarea name="course_introduction" class="form-control">{{old('course_introduction',$company->course_introduction)}}</textarea>
    </div>

    <div class="form-group">
        <label for="">Project Information</label>
        <textarea name="project_introduction" class="form-control">{{old('project_introduction',$company->project_introduction)}}</textarea>
    </div>

    <div class="form-group">
        <label for="">Team Information</label>
        <textarea name="team_introduction" class="form-control">{{old('team_introduction',$company->team_introduction)}}</textarea>
    </div>

    <div class="form-group">
        <label for="">Contact Information</label>
        <textarea name="contact_introduction" class="form-control">{{old('contact_introduction',$company->contact_introduction)}}</textarea>
    </div>


    <div class="form-group">
        <label for="">Company Address</label>
        <input type="text" name="address" class="form-control" value="{{old('address', $company->address)}}" @class(['form-control','is-invalid'=> $errors->has('address')])>
    </div>

    <div class="form-group">
        <label for="">Company Phone</label>
        <input type="text" name="phone" class="form-control" value="{{old('phone', $company->phone)}}" @class(['form-control','is-invalid'=> $errors->has('phone')])>
    </div>

    <div class="form-group">
        <label for="">Company Gmail</label>
        <input type="text" name="gmail" class="form-control" value="{{old('gmail', $company->gmail)}}" @class(['form-control','is-invalid'=> $errors->has('gmail')])>
    </div>



    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>




</form>

@endsection