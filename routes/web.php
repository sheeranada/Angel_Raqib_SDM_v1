<?php

use App\Http\Middleware\CheckLevel;
use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PenilaiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenilaianController;

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

Route::get('/login', function () {return view('user.login');})->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



Route::middleware(['auth', 'checklevel:admin,superadmin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index');
    });
    Route::controller(KaryawanController::class)->group(function () {
        Route::get('/karyawan', 'index')->name('karyawan.index');
        Route::get('/karyawan/create', 'create');
        Route::post('/karyawan/store', 'store');
        Route::get('/karyawan/edit/{id}', 'edit');
        Route::put('/karyawan/{id}', 'update');
        Route::get('/karyawan/destroy/{id}', 'destroy');
    });
    Route::controller(UnitController::class)->group(function () {
        Route::get('/unit', 'index')->name('unit.index');
        Route::get('/unit/create', 'create');
        Route::post('/unit/store', 'store');
        Route::get('/unit/edit/{id}', 'edit');
        Route::put('/unit/{id}', 'update');
        Route::get('/unit/destroy/{id}', 'destroy');
    });
    Route::controller(PenilaiController::class)->group(function () {
        Route::get('/penilai', 'index')->name('penilai.index');
        Route::get('/penilai/create', 'create');
        Route::post('/penilai/store', 'store');
        Route::get('/penilai/edit/{id}', 'edit');
        Route::put('/penilai/{id}', 'update');
        Route::get('/penilai/destroy/{id}', 'destroy');
    });
    // Route::controller(NilaiController::class)->group(function () {
    //     Route::get('/nilai', 'index')->name('nilai.index');
    //     Route::get('/nilai/create', 'create');
    //     Route::post('/nilai/store', 'store');
    //     Route::get('/nilai/edit/{id}', 'edit');
    //     Route::put('/nilai/{id}', 'update');
    //     Route::get('/nilai/destroy/{id}', 'destroy');
    // });
    Route::controller(PenilaianController::class)->group(function () {
        Route::get('/penilaian', 'index')->name('penilaian.index');
        Route::get('/penilaian/edit/{id}', 'edit');
        Route::get('/penilaian/detail/{id}', 'show');
        Route::put('/penilaian/{id}', 'update');
        Route::get('/penilaian/destroy/{id}', 'destroy');
    });
    // Route::get('/','EmployeesController@index');
    // Route::post('/employees/getEmployees/','EmployeesController@getEmployees')->name('employees.getEmployees');

});



Route::middleware(['auth', 'checklevel:admin,user,superadmin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index');
    });
    Route::controller(PenilaianController::class)->group(function () {
        Route::get('/penilaian', 'index')->name('penilaian.index');
    });
    Route::controller(PenilaianController::class)->group(function () {
        Route::get('/penilaian/create', 'create');
        Route::get('/skor', 'skor');
        Route::get('/skor/generate', 'generate');
        Route::post('/penilaian/store', 'store');
        Route::get('/penilaian/pilihan', 'pilihan');
        Route::get('/penilaian/show_hasil', 'show_hasil');
        Route::get('/penilaian/show_hapus/{id}', 'hapus');
    });

});


Route::middleware(['auth', 'checklevel:superadmin'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index')->name('user.index');
        Route::get('/user/create', 'create');
        Route::post('/user/store', 'store')->name('user.store');
        Route::get('/user/edit/{id}', 'edit');
        Route::put('/user/{id}', 'update');
        Route::get('/user/destroy/{id}', 'destroy');
    });

});
