<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeniskulitController;
use App\Http\Controllers\GejalakulitController;

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

Route::get('/admin', function () {
    return view('dashboardadmin');
});

// Route::resource('jeniskulit', JeniskulitController::class);

Route::get('/jeniskulit', [JeniskulitController::class, 'index'])->name('jeniskulit');

Route::get('/tambahjeniskulit', [JeniskulitController::class, 'tambahjeniskulit'])->name('tambahjeniskulit');
Route::POST('/insertdata', [JeniskulitController::class, 'insertdata'])->name('insertdata');

Route::get('/editdata/{id}', [JeniskulitController::class, 'editdata'])->name('editdata');
Route::POST('/updatedata/{id}', [JeniskulitController::class, 'updatedata'])->name('updatedata');

Route::delete('/delete/{id}', [JeniskulitController::class, 'delete'])->name('delete');

Route::resource('gejalakulit', GejalakulitController::class);
