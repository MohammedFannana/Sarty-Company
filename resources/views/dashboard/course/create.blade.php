@extends('layouts.dashboard')

@section('title','Our Course')

@section('breadcrumb') <!-- Override into parent page dashboard page not display section parent page to show parent section use @parent   -->
@parent
<li class="breadcrumb-item active">Our Course</li>
<li class="breadcrumb-item active">Add Course</li>


@endsection

@section('content')

<form action="{{route('dashboard.course.store')}}" method="post" class="ml-3" enctype="multipart/form-data">
    @csrf


    <x-form.input label="Course Name" name="name" type="text" />

    <x-form.input label="Summary Of Course" name="summaryOfCourse" type="text" />

    <x-form.input label="Course Levels Number" name="courseLevelsNumber" type="number" />

    <div class="form-group">
        <x-form.textarea label="Description" name="description">{{old('description')}}</x-form.textarea>
    </div>

    <x-form.input label="Hours Number" name="houresNumber" type="number" />

    <x-form.input label="Teacher Name" name="teacherName" type="text" />

    <div class="form-group">
        <x-form.input label="Image" name="image" type="file" />
    </div>

    <div class="form-group">
        <x-form.input label="Google Form Url" name="url" type="url" />
    </div>

    <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary">Save Course</button>
    </div>

</form>

@endsection