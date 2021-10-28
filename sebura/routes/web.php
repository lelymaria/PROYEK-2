<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Models\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Landing Page
Route::get('/', [LandingPageController::class, "landing"]);
Route::get('/home', [LandingPageController::class, "home"]);
Route::get('/login', [LandingPageController::class, "login"]);
Route::get('/visimisi', [LandingPageController::class, "visimisi"]);
Route::get('/kepengurusan', [LandingPageController::class, "kepengurusan"]);
Route::get('/chrodpage', [LandingPageController::class, "chrodpage"]);
Route::get('/oprec', [LandingPageController::class, "oprec"]);
Route::get('/pengenalandiv', [LandingPageController::class, "pengenalandiv"]);

//Login
Route::post('/login', [LoginController::class, "login"]);
Route::get('/logout', [LoginController::class, "logout"]);

//Admin
Route::get('/admin', [LoginController::class, "admin"]);
Route::get('/admin/dahboard', [LoginController::class, "dahboard"]);
Route::get('/admin/datauser', [LoginController::class, "datauser"]);
Route::get('/admin', [AdminController::class, "admin"]);



Route::get('/admin/dashboard',function(){
    return view('admin.dashboard');
});
Route::get('/admin/datauser',function(){

    $data = [
        "data_user" => Login::all()
    ];

    return view('admin.datauser', $data);
});

Route::get("/admin/datasiuser", [UserController::class, "data"]);


Route::get('/admin/kepengurusan', [AdminController::class, "kepengurusan"]);
Route::get('/admin/oprec', [AdminController::class, "oprec"]);
Route::get('/admin/absensi', [AdminController::class, "absensi"]);
Route::get('/admin/event', [AdminController::class, "event"]);

        //pengurus'
    //profile'
Route::get('/tampil_pengurus/visimisi',function(){
    return view('mahasiswa.profil.visimisi');
});
Route::get('/tampil_pengurus/strukturkepengurusan',function(){
    return view('mahasiswa.profil.strukturkepengurusan');
});

    //informasi
Route::get('/tampil_pengurus/chrodpage', function () {
    return view('mahasiswa.informasi.chrodpage');
});
Route::get('/tampil_pengurus/absensi', function () {
    return view('kepengurusan.absensi');
});
Route::get('/tampil_pengurus/event', function () {
    return view('kepengurusan.event');
});
