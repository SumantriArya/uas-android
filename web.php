<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\anggotaController;


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
    return view('welcome');
});

//Route Salam
Route::get('/salam', function(){
    return "Assalamu'alaikum Sobat, Selamat Belajar Laravel";
});

//Routing dengan Parameter
Route::get('/pegawai/{nama}/{divisi}',function ($nama,$divisi){
    return 'Nama Pegawai : '.$nama.'<br/>Departemen : '.$divisi;
});

//Menambahkan Route /kabar
Route::get('/kabar',function () {
    return view('kondisi');
});

//Route Data Mahasiswa
//versi 1
// Route::get('/mahasiswa','App\Http\Controllers\MahasiswaController@dataMahasiswa');

//Versi 2
Route::get('/mahasiswa',[MahasiswaController::class, 'dataMahasiswa']);

//Pertemuan 4
//Menambahkan View Hello
Route::get('/hello', function () {
    return view('p4/hello',['name' => 'Inaya']);
});

//Menambahkan Route Nilai
Route::get('/nilai', function () {
    return view('p4/nilai');
});

//Menambahkan Route Daftar Nilai
Route::get('/daftarNilai', function () {
    return view('p4/daftar_nilai');
});

//Route Dasar Blade Template
Route::get('/phpFramework', function () {
    return view('p4/layouts/index');
});

Auth::routes();

//route home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route About us
Route::get('/aboutus',[HomeController::class, 'aboutus']);

//Tambahkan route baru di routes/web.php
Route::get(
'/pegawai',
[PegawaiController::class, 'index']
);

Route::get(
    '/anggota',
    [PegawaiController::class, 'index']
    );

