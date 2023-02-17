<?php

use App\Http\Controllers\LoginController;
use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\UserController;

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
//     return view('landingpage', [
//         "title" => "Landing Page"
//     ]);
// });

Route::get('/', [PengaduanController::class, 'index']);
Route::get('/beranda', [PengaduanController::class, 'create']);
Route::post('/store', [PengaduanController::class, 'store']);
Route::post('/show{id}', [PengaduanController::class, 'show']);
Route::post('/destroy{id}', [PengaduanController::class, 'destroy']);

Route::get('/pengguna', [UserController::class, 'index']);
Route::get('/create-pengguna', [UserController::class, 'create']);
Route::post('/up', [UserController::class, 'store']);


Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/masuk', function () {
    return view('auth.login');
});


Route::get('/tentangaspera', function () {
    return view('tentangaspera', [
        "title" => "Tentang Aspera"
    ]);
});

Route::get('/pengaduan', function () {
    return view('data.pengaduan', [
        "title" => "Pengaduan",
        'pengaduans' => Pengaduan::all()
    ]);
})->middleware(['auth'])->name('pengaduan');

require __DIR__ . '/auth.php';

Route::get('/pengguna', function () {
    return view('data.pengguna', [
        "title" => "Pengguna",
        'users' => User::all()
    ]);
})->middleware(['auth'])->name('pengguna');

require __DIR__ . '/auth.php';

Route::get('/cetakpengguna', function () {
    return view('cetak.cetakpengguna', [
        "title" => "Cetak Pengguna",
        'users' => User::all()
    ]);
})->middleware(['auth'])->name('pengguna');

require __DIR__ . '/auth.php';

Route::get('/cetakpengaduan', function () {
    return view('cetak.cetakpengaduan', [
        "title" => "Cetak Pengaduan",
        'pengaduans' => Pengaduan::all()
    ]);
})->middleware(['auth'])->name('pengaduan');

require __DIR__ . '/auth.php';
