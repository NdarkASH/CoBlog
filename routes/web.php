<?php

use App\Http\Controllers\AdminEditCategories;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;

use Illuminate\Auth\Events\Login;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('home', [
        'title'=> 'home',
        'active'=> 'home',
        'selected'=> 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title'=> 'about',
        'active'=> 'about',
        'name'=> 'DarkNash',
        'email'=> 'nashihulwan9@gmail.com',
        'img'=> 'width_200.webp',
    ]);
});
// all posts
Route::get('/blog', [PostController::class,'index']);
// specific post
Route::get('/blog/{post:slug}', [PostController::class,'show']);
// specific category
Route::get('/categories/{category:slug}', [PostController::class,'category']);
// all category
Route::get('/categories', [PostController::class,'categories']);
// specific user
Route::get('/authors/{user:username}', [PostController::class,'user']);
// login get
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class,'logout'])->middleware('auth');
// register
Route::get('/register', [RegisterController::class,'index'])->name('login')->middleware('guest');
Route::post('/register', [RegisterController::class,'store'])->name('login')->middleware('guest');

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class,'checkSlug']);
Route::resource('/dashboard/categories', AdminEditCategories::class)->except('show')->middleware('auth');


