<?php

use App\Http\Controllers\EnrollController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::get('/login', [loginController::class, 'loginStudent'])->name('login');


Route::get('/login/mentor', [loginController::class, 'loginMentor']);
Route::get('/', [IndexController::class, 'index']);



Route::middleware(['auth'])->group(function () {
    Route::get('/video/{video:idVideo}', [VideoController::class, 'show']);
    Route::get('/student/index', [UserController::class, 'index']);
    Route::get('/profile/{user}', [UserController::class, 'edit']);
    Route::post('/profile/{id}', [UserController::class, 'update']);
    Route::get('/wrong', function () {
        return view('wrong', [
            'title' => 'Wrong Account'
        ]);
    });
    Route::get('/logout', [loginController::class, 'logout']);

    Route::get('/materi/{playlist}', [PlaylistController::class, 'show']);
    Route::post('/enroll', [EnrollController::class, 'store']);
    Route::post('/review', [ReviewController::class, 'store']);
    Route::post('/komentar', [KomentarController::class, 'store']);
    Route::post('/reply', [ReplyController::class, 'store']);
});

Route::get('/library', [KategoriController::class, 'index']);
Route::get('/library/{kategori:namaKategori}', [KategoriController::class, 'show']);
Route::get('/signup', [RegisterController::class, 'index']);
Route::post('/signup', [RegisterController::class, 'store']);
Route::post('/signup/form', [RegisterController::class, 'signupview']);
Route::post('/login', [loginController::class, 'authenticate']);
Route::get('/search', [PlaylistController::class, 'search']);

Route::middleware(['auth', 'CekRole:2'])->group(function () {
    Route::get('/mentor/index', [UserController::class, 'indexMentor']);
    Route::get('/mentor/mycourse', [PlaylistController::class, 'mycourses']);
    Route::get('/create/materi', [PlaylistController::class, 'create']);
    Route::get('/edit/materi/{playlist:judul}', [PlaylistController::class, 'edit']);
    Route::post('/edit/materi/{playlist:judul}', [PlaylistController::class, 'update']);
    Route::post('/create/materi', [PlaylistController::class, 'simpan']);
    Route::post('/create/video', [VideoController::class, 'simpan']);
    Route::get('/create/{playlist:judul}/video', [VideoController::class, 'create']);
});

Route::get('/cobaridho', function () {
    return view('Mentor.', [
        'title' => 'My Videos'
    ]);
});

Route::get('/cobaoscar', function () {
    return view('Mentor.', [
        'title' => 'My Reviews'
    ]);
});

Route::get('/editcourse', function () {
    return view('Mentor.editcourse', [
        'title' => 'edit course'
    ]);
});
