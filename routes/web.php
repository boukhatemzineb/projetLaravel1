<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProspectAController;
use App\Http\Controllers\ClientAController;
use App\Http\Controllers\ProduitAController;
use App\Http\Controllers\CommercialAController;
use App\Http\Controllers\ContactAController;
use App\Http\Controllers\OpportuniteAController;
use App\Http\Controllers\ProspectCController;
use App\Http\Controllers\ClientCController;
use App\Http\Controllers\ContactCController;
use App\Http\Controllers\OpportuniteCController;
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
    return view('firstpage');
});
Route::get('/administrateur', function () {
    return view('administrateur');
});



Route::get('/commerciale', function () {
    return view('commerciale');
});
 /* pages ajouter Admin */
Route::get('/contactA', function () {
    return view('contactA');
})->name('contactA');
Route::get('/prospectA', function () {
    return view('prospectA');
})->name('prospectA');
Route::get('/opportuniteA', function () {
    return view('opportuniteA');
})->name('opportuniteA');
Route::get('/produitA', function () {
    return view('produitA');
})->name('produitA');
Route::get('/commercialA', function () {
    return view('commercialA');
})->name('commercialA');
Route::get('/clientA', function () {
    return view('clientA');
})->name('clientA');
/*------------------------------*/
 /*page ajouter commerciale */
 Route::get('/contactC', function () {
    return view('contactC');
})->name('contactC');
Route::get('/clientC', function () {
    return view('clientC');
})->name('clientC');
Route::get('/prospectC', function () {
    return view('prospectC');
})->name('prospectC');
Route::get('/opportuniteC', function () {
    return view('opportuniteC');
})->name('opportuniteC');
 /*--------------------------------*/

/* Controlleurs admin */
Route::resource('ProspectA', ProspectAController::class);
Route::resource('ClientA', ClientAController::class);
Route::resource('ProduitA', ProduitAController::class);
Route::resource('CommercialA', CommercialAController::class);
Route::resource('ContactA', ContactAController::class);
Route::resource('ContactM', ContactMController::class);
Route::resource('OpportuniteA', OpportuniteAController::class);
/*--------------------------------------------------------*/
/* Controlleurs commerciale */
Route::resource('EventA', EventAController::class);
Route::resource('ProspectC', ProspectCController::class);
Route::resource('ClientC', ClientCController::class);
Route::resource('ContactC', ContactCController::class);
Route::resource('OpportuniteC', OpportuniteCController::class);
Route::get('/opper/{id}',[App\Http\Controllers\OpportuniteAController::class,'afficher'])->name('opper');
Route::get('/affpr/{id}',[App\Http\Controllers\OpportuniteAController::class,'afficher_p'])->name('affpr');
Route::get('/affevent/{id}',[App\Http\Controllers\EventController::class,'afficherevent'])->name('affevent');
Auth::routes();
Route::get('ajout',[App\Http\Controllers\OppsController::class,'store'])->name('ajout');
Route::get('modifier',[App\Http\Controllers\OppsController::class,'update'])->name('modifier');
Route::get('edit/{ido}/{idp}',[App\Http\Controllers\OppsController::class,'edit'])->name('edit');
Route::get('supprimer',[App\Http\Controllers\OppsController::class,'destroy'])->name('supprimer');
 Route::post('/verify',[App\Http\Controllers\HomeController::class, 'index'])->name('verify');
Route::get('/C_client', function () {
    return view('C_client');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/oper', function () {
    return view('opportunity');
})->name('/oper');
Route::get('/infper', function () {
    return view('infper');
})->name('/infper');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/user', function () {
    return view('user');
})->name('/user');



    return view('produit');
