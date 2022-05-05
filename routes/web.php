<?php

use App\Http\Controllers\CourController;
use App\Http\Controllers\NoteController;
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

Route::get('/', function () {
    return view('layouts.app');
});

Route::prefix('student')->name('student.')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
    Route::post('/', [StudentController::class, 'store'])->name('store');
    Route::post('/{id}', [StudentController::class, 'update'])->name('update');
});

Route::prefix('cour')->name('cour.')->group(function () {
    Route::get('/', [CourController::class, 'index'])->name('index');
    Route::get('/create', [CourController::class, 'create'])->name('create');
    Route::post('/', [CourController::class, 'store'])->name('store');
});

Route::prefix('note')->name('note.')->group(function () {
    Route::get('/', [NoteController::class, 'index'])->name('index');
});
