@extends('layouts.dashboard')

@section('title','Create Member')

@section('breadcrumb') <!-- Override into parent page dashboard page not display section parent page to show parent section use @parent   -->
@parent
<li class="breadcrumb-item active">Our Team</li>
<li class="breadcrumb-item active">Add Member</li>


@endsection

@section('content')

<form action="{{route('dashboard.team.store')}}" method="post" class="ml-3" enctype="multipart/form-data">
    @csrf


    <div class="form-group">
        <x-form.input label="Member Name" name="name" type="text" />
    </div>

    <div class="form-group">
        <x-form.input label="Email" name="email" type="text" />
    </div>


    <div class="form-group">
        <x-form.textarea label="Description" name="description">{{old('description')}}</x-form.textarea>
    </div>



    <div class="form-group">
        <label for="">Gender</label>
        <div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="Radios1" value="male">
                <label class="form-check-label" for="Radios1">
                    Male
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="Radios2" value="female">
                <label class="form-check-label" for="Radios2">
                    Female
                </label>
            </div>

        </div>
    </div>

    <div class="form-group">
        <label for="">Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    <x-form.input label="Instagram" name="instagram" type="text" />

    <x-form.input label="Facebook" name="facebook" type="text" />

    <x-form.input label="Linkedln" name="linkedln" type="text" />


    <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary">Save Member</button>
    </div>

</form>



@endsection