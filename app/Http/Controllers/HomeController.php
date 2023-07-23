<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Service;
use App\Models\User;
use App\Models\Project;
use App\Models\CompanyInformation;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function  index()
    {
        $services = Service::latest()->limit(8)->get();
        $users = User::latest()->limit(8)->get();
        $projects = Project::latest()->limit(6)->get();
        $courses = Course::latest()->limit(6)->get();

        return view('home', compact(['services', 'users', 'projects', 'courses']));
    }
}
