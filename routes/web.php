<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentDetailController;
use App\Http\Controllers\SearchController;
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
//     return view('home.index', []);
// })->name('home.index');


Route::get('/', [StudentDetailController::class, 'index'])->name('home');
Route::get('add-student', [StudentDetailController::class, 'create']);
Route::post('add-student', [StudentDetailController::class, 'store'])->name('store');
Route::get('students', [StudentDetailController::class, 'index']);

Route::get('edit-student/{id}', [StudentDetailController::class, 'edit']);
Route::put('update-student/{id}', [StudentDetailController::class, 'update'])->name('update-student');
Route::get('student-profile/{id}', [StudentDetailController::class, 'showProfile']);
Route::get('delete-student/{id}', [StudentDetailController::class, 'destroy'])->name('delete');
Route::get('search', [SearchController::class, 'index']);
Route::get('do-search', [SearchController::class, 'advance'])->name('advance_search');



