<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\PeranController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\IndikatorController;
use App\Http\Controllers\PertanyaanController;

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
    return view('index', [
        'title'=>'Dashboard', 'active' => 'home'
    ]);
});
Route::get('/pertanyaan', [PertanyaanController::class, 'index']);
Route::get('/indikator', [IndikatorController::class, 'index']);
Route::get('/peran', [PeranController::class, 'index']);
Route::get('/sekolah', [SekolahController::class, 'index']);
Route::get('/hasil', [HasilController::class, 'index']);