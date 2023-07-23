@extends('layouts.dashboard')

@section('title','Our Courses')

@section('breadcrumb') <!-- Override into parent page dashboard page not display section parent page to show parent section use @parent   -->
@parent
<li class="breadcrumb-item active">Our Courses</li>

@endsection

@section('content')


<div class="mb-5 ml-3">
    <a href="{{route('dashboard.course.create')}}" class="btn btn-sm btn-primary"> Create Course</a>
</div>

<!-- check if the flash message send from categoriesController the massge in session -->

<!-- invoke component alert components -->
<x-alert type="success" />

<table class="table table-sm table-responsive">
    <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Course Name</th>
            <th>Summary Of Course</th>
            <th>Description</th>
            <th>Levels Number</th>
            <th>Houres Number</th>
            <th>Teasher Name</th>
            <th>Image</th>
            <th>Google Form Url</th>
            <th>Created At</th>
            <th colspan="2"></th>
        </tr>
    </thead>

    <tbody>


        @forelse($courses as $course)

        <tr>
            <td></td>
            <td> {{$course->id}} </td>
            <td> {{$course->name}}</td>
            <td> {{$course->summaryOfCourse}}</td>
            <td> {{$course->description}}</td>
            <td> {{$course->courseLevelsNumber}}</td>
            <td> {{$course->houresNumber}}</td>
            <td> {{$course->teacherName}}</td>
            <td><img src="{{asset('storage/' . $course->image)}}" alt="" height="50"></td>

            <td><a href="{{$course->url}}">{{$course->url}}</a></td>


            <td>{{$course->created_at}}</td>
            <td>
                <a href="{{route('dashboard.course.edit',$course->id)}}" class="btn btn-sm btn-success">Edit</a>
            </td>

            <td>

                <form action="{{route('dashboard.course.destroy',$course->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                </form>


            </td>
        </tr>

        @empty

        <tr>
            <td colspan="8">No Courses defined.</td>
        </tr>

        @endforelse


    </tbody>
</table>

{{$courses->withQueryString()->links()}}

@endsection