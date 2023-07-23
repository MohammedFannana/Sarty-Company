@extends('layouts.dashboard')

@section('title','Our Team')

@section('breadcrumb') <!-- Override into parent page dashboard page not display section parent page to show parent section use @parent   -->
@parent
<li class="breadcrumb-item active">Our Team</li>

@endsection

@section('content')


<div class="mb-5 ml-3">
    <a href="{{route('dashboard.team.create')}}" class="btn btn-sm btn-primary"> Create Member</a>
</div>

<!-- check if the flash message send from categoriesController the massge in session -->

<!-- invoke component alert components -->
<x-alert type="success" />

<table class="table">
    <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Created At</th>
            <th colspan="2"></th>
        </tr>
    </thead>

    <tbody>


        @forelse($teams as $team)

        <tr>
            <td></td>
            <td> {{$team->id}} </td>
            <td> <a href="{{route('dashboard.team.show',$team->id)}}">{{$team->name}} </a></td>
            <td>{{$team->description}}</td>
            <td><img src="{{asset('storage/' . $team->image)}}" alt="" height="50"></td>
            <td>{{$team->type}}</td>
            <td>{{$team->created_at}}</td>
            <td>
                <a href="{{route('dashboard.team.edit',$team->id)}}" class="btn btn-sm btn-success">Edit</a>
            </td>

            <td>

                <form action="{{route('dashboard.team.destroy',$team->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                </form>


            </td>
        </tr>

        @empty

        <tr>
            <td colspan="8">No Team Member defined.</td>
        </tr>

        @endforelse


    </tbody>
</table>

{{$teams->withQueryString()->links()}}

@endsection