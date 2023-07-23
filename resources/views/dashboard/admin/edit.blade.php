@extends('layouts.dashboard')

@section('title','Edit Admin')

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Our Admin</li>
<li class="breadcrumb-item active">Edit Admin</li>

@endsection

@section('content')

<form action="{{route('dashboard.admin.update',$admin->id)}}" method="post" class="ml-3" enctype="multipart/form-data"> <!-- you must use enctype if input type file-->
    @csrf
    @method('put')

    <div class="form-group">
        <label for="">Admin Name</label>
        <input type="text" name="name" class="form-control" value="{{old('name', $admin->name)}}" @class(['form-control','is-invalid'=> $errors->has('name')])>
    </div>

    <div class="form-group">
        <label for="">Admin Email</label>
        <input type="text" name="name" class="form-control" value="{{old('email', $admin->email)}}" @class(['form-control','is-invalid'=> $errors->has('email')])>
    </div>


    <div class="form-group">
        <label for="">Description</label>
        <textarea name="description" class="form-control">{{ old('description',$admin->description)}}</textarea>
    </div>

    <div class="form-group">
        <label for="">Gender</label>
        <div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="Radios1" value="male" @checked($admin->gender == 'male')>
                <label class="form-check-label" for="Radios1">
                    Male
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="Radios2" value="female" @checked($admin->gender == 'female')>
                <label class="form-check-label" for="Radios2">
                    Female
                </label>
            </div>

        </div>
    </div>


    <div class="form-group">
        <label for="">Image</label>
        <input type="file" name="image" class="form-control">
        @if($admin->image)
        <img src="{{asset('storage/' . $admin->image)}}" alt="" height="50">
        @endif
    </div>

    <div class="form-group">
        <label for="">Instagram</label>
        <textarea name="instagram" class="form-control">{{ old('instagram',$admin->instagram)}}</textarea>
    </div>


    <div class="form-group">
        <label for="">Facebook</label>
        <textarea name="facebook" class="form-control">{{ old('facebook',$admin->facebook)}}</textarea>
    </div>

    <div class="form-group">
        <label for="">Linkedln</label>
        <textarea name="linkedln" class="form-control">{{ old('linkedln',$admin->linkedln)}}</textarea>
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>




</form>

@endsection