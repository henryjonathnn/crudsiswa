<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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

// SISWA
Route::get('/siswa',[SiswaController::class,"index"])->name('siswa');
Route::get('/siswa/create',[SiswaController::class,"create"])->name('siswa.create');
Route::post('/siswa/post',[SiswaController::class, "store"])->name('siswa.post');
Route::get('/siswa/{id}/edit',[SiswaController::class,"edit"])->name('siswa.edit');
Route::put('siswa{id}', [SiswaController::class,"update"])->name('siswa.update');
Route::delete('/siswa/{id}', [SiswaController::class, "destroy"])->name('siswa.destroy');



// GURU
Route::resource('guru', GuruController::class);

Route::get('/dashboard1',[DashboardController::class,"index"])->name('dashboard1');

// PENULIS
Route::resource('penulis', PenulisController::class);

// BUKU
Route::resource('buku', BukuController::class);
Route::get('/buku/{id}/detail',[BukuController::class,"detail"])->name('buku.detail');

// PROFILE
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
