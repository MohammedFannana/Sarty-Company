<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Middleware\CheckUserType;
use App\Http\Middleware\PreventAdminRoute;
use App\Http\Controllers\CompanyInformationController;

//beacuse the admin is table and user anthoertable not need ,CheckUserType::class  middleware
// auth:admin admin is guard to able to enter in dashboard beacause use two guard web (for user) and admin

Route::middleware(['auth', CheckUserType::class])->as('dashboard.')->prefix('/dashboard')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])
        ->middleware(['verified'])
        ->name('dashboard');

    Route::resource('/team', UserController::class);
    Route::resource('/project', ProjectController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('/course', CourseController::class);
    Route::resource('/company', CompanyInformationController::class);
    Route::resource('/admin', AdminController::class)->middleware(PreventAdminRoute::class);
});
