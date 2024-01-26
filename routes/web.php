<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LocalizationController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('role:Admin')->group(function () {
    Route::get('/admin', [Controller::class, 'adminIndex'])->name('adminPage');
});

Route::middleware('role:User')->group(function () {
    Route::get('/user', [Controller::class, 'userIndex'])->name('userPage');
});

Route::get('lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('login/id', [LocalizationController::class, 'loginID']);
Route::get('login/en', [LocalizationController::class, 'loginEN']);

Route::get('/accountmaintenance', [Controller::class, 'maintenance'])->name('maintenance');

Route::post('update/{id}', [Controller::class, 'updaterole'])->name('updaterole');
Route::post('delete/{id}', [Controller::class, 'deleteuser'])->name('deleteuser');
