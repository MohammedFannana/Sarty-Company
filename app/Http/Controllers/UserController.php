<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $teams = User::where('type', '=', 'user')->paginate(5);
        return view('dashboard.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate 
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['email', 'required'],
            'password' => ['nullable'],
            'image' => ['image', 'max:1048576', 'dimensions:min_width=100,min_height=100'],
            'gender' => 'required|in:male,female',
            'instagram' => ['nullable'],
            'facebook' => ['nullable'],
            'linkedln' => ['nullable']
        ]);

        $request->merge([
            'slug' => Str::slug($request->post('name'))
        ]);

        //use this way because the image insert by user 
        $data = $request->except('image');

        if ($request->hasFile('image')) {    //to check if image file is exit
            $file = $request->file('image');
            $path = $file->store('uploads', 'public');  //store image in public disk insde storge folder inside uploads folder ,'public' or['disk' => 'public]

            $data['image'] = $path;
        }

        $team = User::create($data);

        //in store process you must follow in redirct()   
        return redirect()->route('dashboard.team.index')->with('success', 'The Team Member is Created!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $user = User::where('id', '=', $id)->first();
        return view('dashboard.team.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = User::findOrFail($id);
        return view('dashboard.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['string', 'min:3', 'max:255'],
            'email' => ['email'],
            'password' => ['nullable'],
            'image' => ['image', 'max:1048576', 'dimensions:min_width=100,min_height=100'],
            'gender' => 'in:male,female',
            'instagram' => ['nullable'],
            'facebook' => ['nullable'],
            'linkedln' => ['nullable']
        ]);

        $team = User::findOrFail($id);


        $old_image = $team->image;

        $data = $request->except('image');

        if ($request->hasFile('image')) {    //to check if image file is exit
            $file = $request->file('image');
            $path = $file->store('uploads', 'public');  //store image in public disk insde storge folder inside uploads folder ,'public' or['disk' => 'public]

            $data['image'] = $path;
        }

        $team->update($data);

        if ($old_image && isset($data['image'])) {
            Storage::disk('public')->delete($old_image);
        }


        return redirect()->route('dashboard.team.index')->with('success', 'The Team Member is Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = User::findOrFail($id);
        $team->delete();
        return redirect()->route('dashboard.team.index')->with('success', 'The Team Member is Deleted!');
    }
}
