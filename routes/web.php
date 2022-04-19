<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RekamController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get("/article", [ArticleController::class, 'index'])->middleware(['auth'])->name('article');
Route::get("/article/{article:slug}", [ArticleController::class, 'content'])->middleware(['auth']);
Route::get("/categories", [ArticleController::class, 'categories'])->middleware(['auth'])->name('categories');
Route::get("/categories/{category:slug}", [ArticleController::class, 'category'])->middleware(['auth']);


Route::get("/patient", [PasienController::class, 'index'])->middleware(['auth'])->name('patient');
Route::get("/patient/{patient:slug}", [PasienController::class, 'content'])->middleware(['auth']);

Route::get("/rekammedis", [RekamController::class, 'index'])->middleware(['auth'])->name('rekammedis');
Route::get("/rekammedis/{rekammedis:id}", [RekamController::class, 'content'])->middleware(['auth'])->name('rekammedis.show');

Route::get("/dokter", [DokterController::class, 'index'])->middleware(['auth'])->name('dokter');
Route::get("/dokter/{doctor:slug}", [DokterController::class, 'content'])->middleware(['auth']);

Route::get('/input',[BiodataController::class, 'input'])->middleware(['auth'])->name('rekammedis.tambah-data');
Route::post('/input-data', [BiodataController::class, 'store'])->middleware(['auth'])->name('rekammedis.buat-data');
Route::get('/edit/{id}', [BiodataController::class, 'edit'])->middleware(['auth'])->name('rekammedis.edit');
Route::post('/update/{id}', [BiodataController::class, 'update'])->middleware(['auth'])->name('rekammedis.update');
Route::delete('/delete/{id}', [BiodataController::class, 'destroy'])->middleware(['auth'])->name('rekammedis.destroy');
