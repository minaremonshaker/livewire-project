<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialsController;
use Illuminate\Support\Facades\Route;



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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/',[HomeController::class,'index'])->name('Home.index');

Route::get('/about',[AboutController::class,'index'])->name('about.index');

Route::get('/contact',[ContactController::class,'index'])->name('contact.index');

Route::get('/projects',[ProjectsController::class,'index'])->name('projects.index');

Route::get('/services',[ServicesController::class,'index'])->name('services.index');

Route::get('/team',[TeamController::class,'index'])->name('team.index');

Route::get('/testimonials',[TestimonialsController::class,'index'])->name('testimonials.index');

Route::get('/search',[SearchController::class,'index'])->name('search.index');
Route::post('/search',[SearchController::class,'store'])->name('search.store');

require __DIR__.'/admin.php';

require __DIR__.'/auth.php';