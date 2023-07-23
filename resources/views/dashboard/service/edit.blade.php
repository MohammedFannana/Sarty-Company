@extends('layouts.dashboard')

@section('title','Edit Service')

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Our Service</li>
<li class="breadcrumb-item active">Edit Service</li>

@endsection

@section('content')

<form action="{{route('dashboard.service.update',$service->id)}}" method="post" class="ml-3" enctype="multipart/form-data"> <!-- you must use enctype if input type file-->
    @csrf
    @method('put')

    <div class="form-group">
        <label for="">Service Name</label>
        <input type="text" name="name" class="form-control" value="{{old('name', $service->name)}}" @class(['form-control','is-invalid'=> $errors->has('name')])>
    </div>


    <div class="form-group">
        <label for="">Description</label>
        <textarea name="description" class="form-control">{{ old('description',$service->description)}}</textarea>
    </div>


    <div class="form-group">
        <label for="">Image</label>
        <input type="file" name="image" class="form-control">
        @if($service->image)
        <img src="{{asset('storage/' . $service->image)}}" alt="" height="50">
        @endif
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>

</form>

@endsection