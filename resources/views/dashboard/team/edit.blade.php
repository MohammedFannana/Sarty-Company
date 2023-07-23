@extends('layouts.dashboard')

@section('title','Edit Team Member')

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Oue Team</li>
<li class="breadcrumb-item active">Edit Team Member</li>

@endsection

@section('content')

<form action="{{route('dashboard.team.update',$team->id)}}" method="post" class="ml-3" enctype="multipart/form-data"> <!-- you must use enctype if input type file-->
    @csrf
    @method('put')

    <div class="form-group">
        <label for="">Member Name</label>
        <input type="text" name="name" class="form-control" value="{{old('name', $team->name)}}" @class(['form-control','is-invalid'=> $errors->has('name')])>
    </div>


    <div class="form-group">
        <label for="">Description</label>
        <textarea name="description" class="form-control">{{ old('description',$team->description)}}</textarea>
    </div>

    <div class="form-group">
        <label for="">Gender</label>
        <div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="Radios1" value="male" @checked($team->gender == 'male')>
                <label class="form-check-label" for="Radios1">
                    Male
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="Radios2" value="female" @checked($team->gender == 'female')>
                <label class="form-check-label" for="Radios2">
                    Female
                </label>
            </div>

        </div>
    </div>


    <div class="form-group">
        <label for="">Image</label>
        <input type="file" name="image" class="form-control">
        @if($team->image)
        <img src="{{asset('storage/' . $team->image)}}" alt="" height="50">
        @endif
    </div>

    <div class="form-group">
        <label for="">Instagram</label>
        <textarea name="instagram" class="form-control">{{ old('instagram',$team->instagram)}}</textarea>
    </div>


    <div class="form-group">
        <label for="">Facebook</label>
        <textarea name="facebook" class="form-control">{{ old('facebook',$team->facebook)}}</textarea>
    </div>

    <div class="form-group">
        <label for="">Linkedln</label>
        <textarea name="linkedln" class="form-control">{{ old('linkedln',$team->linkedln)}}</textarea>
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>




</form>

@endsection