<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('layout.template');
// });


Route::get('/lahir', function () {
    return view('kelahiran.lahir');
});

Route::get('/kematian', function () {
    return view('kematian');
});


Auth::routes();

// Route::GET('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::GET('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::GET('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
// Route::GET('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::GET('/riwayat', [App\Http\Controllers\PengajuanController::class, 'riwayat'])->name('riwayat');

Route::get('/user', [App\Http\Controllers\UserController::class,'index'])->name('user');
Route::get('/user/create', [App\Http\Controllers\UserController::class,'create'])->name('user.create');
Route::post('/user', [App\Http\Controllers\UserController::class,'simpan'])->name('user.simpan');
Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class,'edit'])->name('user.edit');
Route::post('/user/edit/{id}', [App\Http\Controllers\UserController::class,'editsimpan'])->name('user.editsimpam');
Route::delete('user/{id}', [App\Http\Controllers\UserController::class,'delete'])->name('user.delete');
Route::get('/setting', [App\Http\Controllers\UserController::class,'setting'])->name('user.setting');

Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile']);



Route::GET('/layanan', [App\Http\Controllers\MasterController::class, 'layanan'])->name('layanan');
Route::GET('/dataform', [App\Http\Controllers\MasterController::class, 'dataform'])->name('dataform');
Route::POST('/dataform', [App\Http\Controllers\MasterController::class, 'dataformsimpan'])->name('dataform.simpan');
Route::GET('/dataform/{id}', [App\Http\Controllers\MasterController::class, 'dataformdelete'])->name('dataform.delete');
Route::GET('/desa', [App\Http\Controllers\MasterController::class, 'desa'])->name('desa');
Route::POST('/desa', [App\Http\Controllers\MasterController::class, 'simpandesa'])->name('desa.simpan');


Route::GET('/pengajuan/{layanan}', [App\Http\Controllers\PengajuanController::class, 'tambah'])->name('pengajuan.tambah');
Route::POST('/pengajuan/{layanan}', [App\Http\Controllers\PengajuanController::class, 'simpan'])->name('pengajuan.simpan');



Route::GET('/riwayat/{layanan}/{status}', [App\Http\Controllers\PengajuanController::class, 'riwayat'])->name('riwayat.index');
Route::GET('/riwayat/{layanan}/{status}/{pengajuan}', [App\Http\Controllers\PengajuanController::class, 'riwayatDetail'])->name('riwayat.detail');
Route::POST('/riwayat/{layanan}/{status}/{pengajuan}', [App\Http\Controllers\PengajuanController::class, 'aksi'])->name('riwayat.aksi');



