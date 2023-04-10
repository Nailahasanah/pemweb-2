<?php

use App\Http\Controllers\DashboardController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Naila Hasanah',
        'image' => 'loksado.jpg',
        'active' => 'about'
    ]);
});

Route::get('/posts', [postController::class, 'index']);

Route::get('/register', [registerController::class, 'show'])->name('register.show');
Route::post('/register', [registerController::class, 'store'])->name('register.store');

Route::get('/login', [loginController::class, 'show'])->name('login');
Route::post('/login', [loginController::class, 'auth'])->name('login.auth');

Route::group(['middleware' => ['auth']], function () {
Route::get('/logout', [loginController::class, 'logout'])->name('login.logout');
Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard.index');
Route::get('/data_pengguna',[dashboardController::class,'showDataPengguna'])->name('dashboard.showDataPengguna');
Route::get('/data_post', [dashboardController::class, 'showPost'])->name('dashboard.showPost');
Route::get('/tambahPost', [dashboardController::class, 'create'])->name('dashboard.create');
Route::get('/editPost', [dashboardController::class, 'edit'])->name('dashboard.edit');
Route::get('/data_post', [dashboardController::class, 'destroy'])->name('dashboard.destroy');
});

Route::group(['middleware' => ['admin']], function(){
Route::get('/logout', [loginController::class, 'logout'])->name('login.logout');
Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard.index');
Route::get('/data_pengguna', [dashboardController::class, 'showDataPengguna'])->name('dashboard.showDataPengguna');
Route::get('/data_post', [dashboardController::class, 'showPost'])->name('dashboard.showPost');
});

Route::resource('posts', postController::class) ->name('index', 'posts');
Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/login', [loginController::class, 'index']);
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);

Route::get('/register', [registerController::class, 'index'])->middleware('guest');
Route::post('/register', [registerController::class, 'store']);

