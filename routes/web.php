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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OppsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactMController;
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
Route::resource('ContactM', ContactMController::class);
Route::get('/opper/{id}', [App\Http\Controllers\OpportuniteAController::class, 'afficher'])->name('opper');
Route::get('/affpr/{id}', [App\Http\Controllers\OpportuniteAController::class, 'afficher_p'])->name('affpr');
Route::get('/affevent/{id}',[App\Http\Controllers\EventController::class,'afficher'])->name('affevent');
Auth::routes();
Route::get('/user', function () {
    return view('user');
})->name('user');
Route::resource('Event', EventController::class);
Route::get('/index1/{id}',[App\Http\Controllers\EventController::class,'index1'])->name('index1');
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
Route::get('/facture', function () {
    return view('facture');
})->name('/facture');
Route::get('ajout',[App\Http\Controllers\OppsController::class,'store'])->name('ajout');
Route::get('modifier',[App\Http\Controllers\OppsController::class,'update'])->name('modifier');
Route::get('edit/{ido}/{idp}',[App\Http\Controllers\OppsController::class,'edit'])->name('edit');
Route::get('supprimer',[App\Http\Controllers\OppsController::class,'destroy'])->name('supprimer');
 Route::post('/verify',[App\Http\Controllers\HomeController::class, 'index'])->name('verify');
 Route::get('ajout2',[App\Http\Controllers\OppsController::class,'store2'])->name('ajout2');
 Route::get('modifier2',[App\Http\Controllers\OppsController::class,'update2'])->name('modifier2');
 Route::get('supprimer2',[App\Http\Controllers\OppsController::class,'destroy2'])->name('supprimer2');
 Route::get('/transformer/{id}',[App\Http\Controllers\ProspectAController::class,'transformer'])->name('transformer');

 Route::post('/ajax',[App\Http\Controllers\ContactAController::class, 'liste'])->name('ajax');
 Route::post('/ajax2',[App\Http\Controllers\OpportuniteAController::class, 'liste'])->name('ajax2');

 Route::get('supprimer1',[App\Http\Controllers\ClientAController::class,'destroy1'])->name('supprimer1');
 Route::get('modifier1',[App\Http\Controllers\ClientAController::class,'update1'])->name('modifier1');
 Route::get('ajouterC',[App\Http\Controllers\ClientAController::class,'ajouter'])->name('ajouterC');
 Route::get('edit2/{id}',[App\Http\Controllers\ClientAController::class,'edit2'])->name('edit2');

 Route::get('supprimer2',[App\Http\Controllers\OpportuniteAController::class,'destroy1'])->name('supprimer2');
 Route::get('modifier2',[App\Http\Controllers\OpportuniteAController::class,'update1'])->name('modifier2');
 Route::get('ajouterO',[App\Http\Controllers\OpportuniteAController::class,'ajouter'])->name('ajouterO');



 Route::get('modifierevent',[App\Http\Controllers\EventController::class,'update'])->name('modifierevent');
 Route::get('suprimerevent',[App\Http\Controllers\EventController::class,'destroy'])->name('suprimerevent');
 Route::get('/produit', function () {

    return view('produit');
