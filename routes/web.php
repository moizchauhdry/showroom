<?php

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

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('admin.invoices');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', function () {
    return redirect()->route('login');
});

Route::group(['middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/users', function () {
        return view('admin.users');
    })->name('users')->middleware('permission:user-list');

    Route::get('/roles', function () {
        return view('admin.roles');
    })->name('roles')->middleware('permission:role-list');

    Route::get('/invoices', function () {
        return view('admin.invoices');
    })->name('invoices')->middleware('permission:invoice-list');

    Route::get('/invoices/print/{id}', [App\Http\Controllers\InvoiceController::class, 'print'])->name('invoices.print');
});
