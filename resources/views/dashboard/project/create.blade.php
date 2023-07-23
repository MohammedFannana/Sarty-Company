@extends('layouts.dashboard')

@section('title','Our Project')

@section('breadcrumb') <!-- Override into parent page dashboard page not display section parent page to show parent section use @parent   -->
@parent
<li class="breadcrumb-item active">Our Project</li>
<li class="breadcrumb-item active">Add Project</li>


@endsection

@section('content')

<form action="{{route('dashboard.project.store')}}" method="post" class="ml-3" enctype="multipart/form-data">
    @csrf


    <x-form.input label="Project Name" name="name" type="text" />


    <div class="form-group">
        <x-form.textarea label="Description" name="description">{{old('description')}}</x-form.textarea>
    </div>

    <div class="form-group">

        <x-form.input label="Image" name="image" type="file" />

    </div>

    <div class="form-group">
        <x-form.input label="Project Url" name="url" type="url" />
    </div>

    <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary">Save Project</button>
    </div>

</form>



@endsection