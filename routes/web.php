<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProspectAController;
use App\Http\Controllers\ClientAController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommercialAController;
use App\Http\Controllers\ContactAController;
use App\Http\Controllers\OpportuniteAController;
use App\Http\Controllers\ProspectCController;
use App\Http\Controllers\ClientCController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OpportuniteCController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OppsController;

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



/* Controlleurs admin */
Route::resource('ProspectA', ProspectAController::class);
Route::resource('ClientA', ClientAController::class);
Route::resource('Produit', ProduitController::class);
Route::resource('CommercialA', CommercialAController::class);
Route::resource('ContactA', ContactAController::class);
Route::resource('OpportuniteA', OpportuniteAController::class);
Route::get('OpportuniteA/{$id}/edit','OppotuniteAController@edit')->name('opportunite-edit');
/*--------------------------------------------------------*/
/* Controlleurs commerciale */
Route::resource('ProspectC', ProspectCController::class);
Route::resource('ClientC', ClientCController::class);
Route::resource('Contact', ContactController::class);
Route::resource('OpportuniteC', OpportuniteCController::class);
Route::resource('ContactM', ContactMController::class);
Route::get('/opper/{id}', [App\Http\Controllers\OpportuniteAController::class, 'afficher'])->name('opper');
Route::get('/affpr/{id}', [App\Http\Controllers\OpportuniteAController::class, 'afficher_p'])->name('affpr');

Auth::routes();
Route::get('/C_client', function () {
    return view('C_client');
})->name('C_client');
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

 


 Route::get('/produit', function () {

    return view('produit');

})->name('produit');