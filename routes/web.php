<?php

use App\Http\Controllers\LoginController;
use App\Models\User;
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

Route::get('/', function () {
    return view('landingpage', [
        "title" => "Landing Page"
    ]);
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/tentangaspera', function () {
    return view('tentangaspera', [
        "title" => "Tentang Aspera"
    ]);
});

Route::get('/pengaduan', function () {
    return view('data.pengaduan', [
        "title" => "Pengaduan"
    ]);

})->middleware(['auth'])->name('pengaduan');

require __DIR__.'/auth.php';

Route::get('/pengguna', function () {
    return view('data.pengguna', [
        "title" => "Pengguna",
        'users' => User::all()
    ]);

})->middleware(['auth'])->name('pengguna');

require __DIR__.'/auth.php';


