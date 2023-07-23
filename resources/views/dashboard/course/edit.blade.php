@extends('layouts.dashboard')

@section('title','Edit Course')

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Our Course</li>
<li class="breadcrumb-item active">Edit Course</li>

@endsection

@section('content')

<form action="{{route('dashboard.course.update',$course->id)}}" method="post" class="ml-3" enctype="multipart/form-data"> <!-- you must use enctype if input type file-->
    @csrf
    @method('put')


    <div class="form-group">
        <label for="">Course Name</label>
        <input type="text" name="name" class="form-control" value="{{old('name', $course->name)}}" @class(['form-control','is-invalid'=> $errors->has('name')])>
    </div>

    <div class="form-group">
        <label for="">Summary Of Course</label>
        <input type="text" name="summaryOfCourse" class="form-control" value="{{old('summaryOfCourse', $course->summaryOfCourse)}}" @class(['form-control','is-invalid'=> $errors->has('summaryOfCourse')])>
    </div>

    <div class="form-group">
        <label for="">Course Levels Number</label>
        <input type="number" name="courseLevelsNumber" class="form-control" value="{{old('courseLevelsNumber', $course->courseLevelsNumber)}}" @class(['form-control','is-invalid'=> $errors->has('courseLevelsNumber')])>
    </div>

    <div class="form-group">
        <label for="">Description</label>
        <textarea name="description" class="form-control">{{ old('description',$course->description)}}</textarea>
    </div>

    <div class="form-group">
        <label for="">Hours Number</label>
        <input type="number" name="houresNumber" class="form-control" value="{{old('houresNumber', $course->houresNumber)}}" @class(['form-control','is-invalid'=> $errors->has('houresNumber')])>
    </div>

    <div class="form-group">
        <label for="">Teacher Name</label>
        <input type="text" name="teacherName" class="form-control" value="{{old('teacherName', $course->teacherName)}}" @class(['form-control','is-invalid'=> $errors->has('teacherName')])>
    </div>

    <div class="form-group">
        <label for="">Image</label>
        <input type="file" name="image" class="form-control">
        @if($course->image)
        <img src="{{asset('storage/' . $course->image)}}" alt="" height="50">
        @endif
    </div>

    <div class="form-group">
        <label>Google Form Url</label>
        <input type="url" name="url" class="form-control" value="{{old('url', $course->url)}}" @class(['form-control','is-invalid'=> $errors->has('url')])>
    </div>



    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>




</form>

@endsection