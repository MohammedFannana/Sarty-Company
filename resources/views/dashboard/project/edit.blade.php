@extends('layouts.dashboard')

@section('title','Edit Project')

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Our Project</li>
<li class="breadcrumb-item active">Edit Project</li>

@endsection

@section('content')

<form action="{{route('dashboard.project.update',$project->id)}}" method="post" class="ml-3" enctype="multipart/form-data"> <!-- you must use enctype if input type file-->
    @csrf
    @method('put')

    <div class="form-group">
        <label for="">Project Name</label>
        <input type="text" name="name" class="form-control" value="{{old('name', $project->name)}}" @class(['form-control','is-invalid'=> $errors->has('name')])>

    </div>


    <div class="form-group">
        <label for="">Description</label>
        <textarea name="description" class="form-control">{{ old('description',$project->description)}}</textarea>
    </div>



    <div class="form-group">
        <label for="">Image</label>
        <input type="file" name="image" class="form-control">
        @if($project->image)
        <img src="{{asset('storage/' . $project->image)}}" alt="" height="50">
        @endif
    </div>

    <div class="form-group">
        <label>Project Url</label>
        <input type="url" name="url" class="form-control" value="{{old('url', $project->url)}}" @class(['form-control','is-invalid'=> $errors->has('url')])>
    </div>



    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>




</form>

@endsection