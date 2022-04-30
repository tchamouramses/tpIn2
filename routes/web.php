<?php

use App\Http\Controllers\CourController;
use App\Http\Controllers\StudentController;
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
//     return view('welcome');
// });
Route::get('/', function () {
    return view('layouts.app');
});

Route::prefix('student')->name('student.')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::post('/', [StudentController::class, 'store'])->name('store');
});

Route::prefix('cour')->name('cour.')->group(function () {
    Route::get('/', [CourController::class, 'index'])->name('index');
    Route::get('/create', [CourController::class, 'create'])->name('create');
    Route::post('/', [CourController::class, 'store'])->name('store');
});
