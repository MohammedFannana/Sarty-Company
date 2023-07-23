<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(5);
        return view('dashboard.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
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

        Project::create($data);

        //in store process you must follow in redirct()   
        return redirect()->route('dashboard.project.index')->with('success', 'The Project is Created!');
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
        $project = Project::findOrFail($id);
        return view('dashboard.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['string', 'min:3'],
            'url' => ['url'],
            'image' => ['image', 'max:1048576', 'dimensions:min_width=100,min_height=100'],
        ]);

        $project = Project::findOrFail($id);


        $old_image = $project->image;
        $old_file = $project->file;


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

        $project->update($data);

        if ($old_file && isset($data['file'])) {
            Storage::disk('public')->delete($old_file);
        }


        return redirect()->route('dashboard.project.index')->with('success', 'The Project is Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('dashboard.project.index')->with('success', 'The Project is Deleted!');
    }
}
