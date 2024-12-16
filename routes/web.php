<?php

use App\Http\Controllers\adminTable;
use App\Http\Controllers\adminTableController;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users_tableController;
use App\Models\User;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::get('/users', function () {
    //     return view('users_table');
    // })->name('users');
    
    
    Route::get('/users', [users_tableController::class, 'index'])->name('users');
    Route::get('/admintable', [adminTableController::class, 'index'])->name('admintable');


    // Route::get('/users', Counter::class)->name('users');

    // Route::get('/users/table', function () {
    //     return::get('/users/table', [Counter::class, 'tabla']);
    // })->name('users_table');

});
