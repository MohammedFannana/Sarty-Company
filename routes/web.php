<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\CourseController;
use App\Http\Controllers\front\ProjectController;
use App\Http\Controllers\front\ServiceController;
use App\Http\Controllers\front\UserController;
use App\Http\Controllers\HomeController;
use App\Models\Contact;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/courses', [CourseController::class, 'index'])->name('courses');

Route::get('/about', function () {
    return view('front.about_company');
})->name('about');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contactStore');





require __DIR__ . '/auth.php';

require __DIR__ . '/dashboard.php';
