<?php

use App\Http\Controllers\EnrollController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::get('/login', [loginController::class, 'loginStudent'])->name('login');


Route::get('/login/mentor', [loginController::class, 'loginMentor']);
Route::get('/', function () {
    return view('landing', [
        'title' => 'Sqeel.io'
    ]);
});



Route::middleware(['auth'])->group(function () {
    Route::get('/video/{video:idVideo}', [VideoController::class, 'show']);
    Route::get('/student/index', [UserController::class, 'index']);
    Route::get('/student/profile/{user}', [UserController::class, 'edit']);
    Route::post('/student/profile/{id}', [UserController::class, 'update']);
    Route::get('/wrong', function () {
        return view('wrong', [
            'title' => 'Wrong Account'
        ]);
    });
    Route::get('/logout', [loginController::class, 'logout']);
    Route::get('/library', [KategoriController::class, 'index']);
    Route::get('/library/{kategori:namaKategori}', [KategoriController::class, 'show']);
    Route::get('/materi/{playlist}', [PlaylistController::class, 'show']);
    Route::post('/enroll', [EnrollController::class, 'store']);
});

Route::get('/signup', [RegisterController::class, 'index']);
Route::post('/signup', [RegisterController::class, 'store']);
Route::post('/signup/form', [RegisterController::class, 'signupview']);

Route::post('/login', [loginController::class, 'authenticate']);

Route::middleware(['auth', 'CekRole:2'])->group(function () {
    Route::get('/mentor/index', [UserController::class, 'indexMentor']);
    Route::get('/create/materi', [PlaylistController::class, 'create']);
});
