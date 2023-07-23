@extends('layouts.dashboard')

@section('title','Our Services')

@section('breadcrumb') <!-- Override into parent page dashboard page not display section parent page to show parent section use @parent   -->
@parent
<li class="breadcrumb-item active">Our Service</li>
<li class="breadcrumb-item active">Add Service</li>


@endsection

@section('content')

<form action="{{route('dashboard.service.store')}}" method="post" class="ml-3" enctype="multipart/form-data">
    @csrf


    <x-form.input label="Service Name" name="name" type="text" />


    <div class="form-group">
        <x-form.textarea label="Description" name="description">{{old('description')}}</x-form.textarea>
    </div>


    <div class="form-group">
        <label for="">Image</label>
        <input type="file" name="image" class="form-control">
    </div>



    <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary">Save Service</button>
    </div>

</form>



@endsection