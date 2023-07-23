@extends('layouts.dashboard')

@section('title','Our Admin')

@section('breadcrumb') <!-- Override into parent page dashboard page not display section parent page to show parent section use @parent   -->
@parent
<li class="breadcrumb-item active">Our Admin</li>

@endsection

@section('content')


<div class="mb-5 ml-3">
    <a href="{{route('dashboard.admin.create')}}" class="btn btn-sm btn-primary"> Create Admin</a>
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
            <th>Email</th>
            <th>Description</th>
            <th>Image</th>
            <th>Created At</th>
            <th colspan="2"></th>
        </tr>
    </thead>

    <tbody>


        @forelse($admins as $admin)

        <tr>
            <td></td>
            <td> {{$admin->id}} </td>
            <td> <a href="{{route('dashboard.admin.show',$admin->id)}}">{{$admin->name}} </a></td>
            <td>{{$admin->email}}</td>
            <td>{{$admin->description}}</td>
            <td><img src="{{asset('storage/' . $admin->image)}}" alt="" height="50"></td>
            <td>{{$admin->created_at}}</td>
            <td>
                <a href="{{route('dashboard.admin.edit',$admin->id)}}" class="btn btn-sm btn-success">Edit</a>
            </td>

            <td>

                <form action="{{route('dashboard.admin.destroy',$admin->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                </form>


            </td>
        </tr>

        @empty

        <tr>
            <td colspan="8">No admin defined.</td>
        </tr>

        @endforelse


    </tbody>
</table>

{{$admins->withQueryString()->links()}}

@endsection