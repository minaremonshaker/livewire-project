<?php

use App\Http\Controllers\admin\AuthenticateSessionController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\MessagesController;
use App\Http\Controllers\admin\ProjectsController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\admin\SkillsController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;






Route::prefix('/admin')->name('admin.')->group(function () {

    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
        Route::get('/skills',[SkillsController::class,'index'])->name('skills');
        Route::get('/subscribers',[SubscriberController::class,'index'])->name('subscriber');
        Route::get('/counters',[CounterController::class,'index'])->name('counter');
        Route::get('/service',[ServiceController::class,'index'])->name('service');
        Route::get('/messages',[MessagesController::class,'index'])->name('message');
        Route::get('/categories',[CategoriesController::class,'index'])->name('categories');
        Route::get('/projects',[ProjectsController::class,'index'])->name('projects');
    });

    Route::get('/login', [AuthenticateSessionController::class, 'create'])->middleware('guest:admin')->name('create');

    

});
    