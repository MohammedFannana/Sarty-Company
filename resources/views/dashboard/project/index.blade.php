@extends('layouts.dashboard')

@section('title','Our Project')

@section('breadcrumb') <!-- Override into parent page dashboard page not display section parent page to show parent section use @parent   -->
@parent
<li class="breadcrumb-item active">Our Project</li>

@endsection

@section('content')


<div class="mb-5 ml-3">
    <a href="{{route('dashboard.project.create')}}" class="btn btn-sm btn-primary"> Create Project</a>
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
            <th>Project Url</th>
            <th>Created At</th>
            <th colspan="2"></th>
        </tr>
    </thead>

    <tbody>


        @forelse($projects as $project)

        <tr>
            <td></td>
            <td> {{$project->id}} </td>
            <td> {{$project->name}}</td>
            <td>{{$project->description}}</td>
            <td><img src="{{asset('storage/' . $project->image)}}" alt="" height="50"></td>
            <td><a href="{{$project->url}}">{{$project->url}}</a></td>


            <td>{{$project->created_at}}</td>
            <td>
                <a href="{{route('dashboard.project.edit',$project->id)}}" class="btn btn-sm btn-success">Edit</a>
            </td>

            <td>

                <form action="{{route('dashboard.project.destroy',$project->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                </form>


            </td>
        </tr>

        @empty

        <tr>
            <td colspan="8">No Project defined.</td>
        </tr>

        @endforelse


    </tbody>
</table>

{{$projects->withQueryString()->links()}}

@endsection