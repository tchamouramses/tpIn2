<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CourController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\StudentController;
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
//     return view('layouts.app');
// });

Route::get('/', [StudentController::class, 'guard']);

Route::prefix('student')->name('student.')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/{student}', [StudentController::class, 'show'])->name('show');
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::get('/edit/{student}', [StudentController::class, 'edit'])->name('edit');
    Route::post('/', [StudentController::class, 'store'])->name('store');
    Route::post('/{student}', [StudentController::class, 'update'])->name('update');
    Route::delete('/{student}', [StudentController::class, 'destroy'])->name('delete');
});

Route::prefix('cour')->name('cour.')->group(function () {
    Route::get('/', [CourController::class, 'index'])->name('index');
    Route::get('/create', [CourController::class, 'create'])->name('create');
    Route::get('/edit/{cour}', [CourController::class, 'edit'])->name('edit');
    Route::post('/', [CourController::class, 'store'])->name('store');
    Route::delete('/{cour}', [CourController::class, 'destroy'])->name('delete');
});

Route::prefix('note')->name('note.')->group(function () {
    Route::get('/', [NoteController::class, 'index'])->name('index');
});

// Auth::routes();
Route::get('loginFormAdmin', [LoginController::class, 'login']);
Route::get('loginFormClient', [LoginClientController::class, 'login']);
