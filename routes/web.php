<?php

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
    return view('login');
});
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/prospect', function () {
    return view('prospect');
})->name('prospect');
Route::get('/ListPro', function () {
    return view('ListePro');
})->name('ListPro');
Route::get('/opportunite', function () {
    return view('opportunite');
})->name('opportunite');
Route::get('/produit', function () {
    return view('produit');
})->name('produit');
Route::get('/ListeP', function () {
    return view('ListeP');
})->name('ListeP');
Route::get('/commercial', function () {
    return view('commercial');
})->name('commercial');
Route::get('/ListeCo', function () {
    return view('ListeCo');
})->name('ListeCo');
Route::get('/client', function () {
    return view('client');
})->name('client');
Route::get('/ListeCl', function () {
    return view('ListeCl');
})->name('ListeCl');
Route::get('/administrateur', function () {
    return view('administrateur');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

