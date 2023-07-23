@extends('layouts.dashboard')

@section('title','Our Services')

@section('breadcrumb') <!-- Override into parent page dashboard page not display section parent page to show parent section use @parent   -->
@parent
<li class="breadcrumb-item active">Our Service</li>

@endsection

@section('content')


<div class="mb-5 ml-3">
    <a href="{{route('dashboard.service.create')}}" class="btn btn-sm btn-primary"> Create Service</a>
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


        @forelse($services as $service)

        <tr>
            <td></td>
            <td> {{$service->id}} </td>
            <td> {{$service->name}}</td>
            <td>{{$service->description}}</td>
            <td><img src="{{asset('storage/' . $service->image)}}" alt="" height="50"></td>
            <td>{{$service->created_at}}</td>
            <td>
                <a href="{{route('dashboard.service.edit',$service->id)}}" class="btn btn-sm btn-success">Edit</a>
            </td>

            <td>

                <form action="{{route('dashboard.service.destroy',$service->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                </form>


            </td>
        </tr>

        @empty

        <tr>
            <td colspan="8">No Services defined.</td>
        </tr>

        @endforelse


    </tbody>
</table>

{{$services->withQueryString()->links()}}

@endsection