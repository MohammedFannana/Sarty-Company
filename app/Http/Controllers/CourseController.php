<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::paginate(5);
        return view('dashboard.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'summaryOfCourse' => ['required', 'string'],
            'courseLevelsNumber' => ['required', 'numeric'],
            'description' => ['nullable', 'string'],
            'houresNumber' => ['required', 'numeric'],
            'teacherName' => ['required', 'string', 'min:3'],
            'image' => ['image', 'max:1048576', 'dimensions:min_width=100,min_height=100'],
            'url' => ['url'],
        ]);

        $request->merge([
            'slug' => Str::slug($request->post('name'))
        ]);

        $data = $request->except('image', 'file');

        if ($request->hasFile('image')) {    //to check if image file is exit
            $file = $request->file('image');
            $path = $file->store('uploads', 'public');  //store image in public disk insde storge folder inside uploads folder ,'public' or['disk' => 'public]

            $data['image'] = $path;
        }

        if ($request->hasFile('file')) {    //to check if image file is exit
            $file = $request->file('file');
            $path = $file->store('uploads', 'public');  //store image in public disk insde storge folder inside uploads folder ,'public' or['disk' => 'public]

            $data['file'] = $path;
        }

        $course = Course::create($data);

        return redirect()->route('dashboard.course.index')->with('success', 'The Course is Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::findOrFail($id);
        return view('dashboard.course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['string', 'min:3'],
            'summaryOfCourse' => ['string'],
            'courseLevelsNumber' => ['numeric'],
            'houresNumber' => ['numeric'],
            'teacherName' => ['string', 'min:3'],
            'image' => ['image', 'max:1048576', 'dimensions:min_width=100,min_height=100'],
            'url' => ['url'],
        ]);

        $course = Course::findOrFail($id);


        $old_image = $course->image;
        $old_file = $course->file;


        $data = $request->except('image', 'file');

        if ($request->hasFile('image')) {    //to check if image file is exit
            $file = $request->file('image');
            $path = $file->store('uploads', 'public');  //store image in public disk insde storge folder inside uploads folder ,'public' or['disk' => 'public]

            $data['image'] = $path;
        }

        if ($old_image && isset($data['image'])) {
            Storage::disk('public')->delete($old_image);
        }


        if ($request->hasFile('file')) {    //to check if image file is exit
            $file = $request->file('file');
            $path = $file->store('uploads', 'public');  //store image in public disk insde storge folder inside uploads folder ,'public' or['disk' => 'public]

            $data['file'] = $path;
        }

        $course->update($data);

        if ($old_file && isset($data['file'])) {
            Storage::disk('public')->delete($old_file);
        }


        return redirect()->route('dashboard.course.index')->with('success', 'The Course is Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('dashboard.course.index')->with('success', 'The Course is Deleted!');
    }
}
