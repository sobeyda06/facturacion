<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;
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

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::resource('contacts', ContactController::class);
    Route::get('contacts/{contact}/pdf', [ContactController::class, 'pdf'])->name('contacts.pdf');
});

Auth::routes();
