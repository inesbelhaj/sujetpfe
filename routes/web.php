<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/wel', 'adminController@wel')->name('wel');



///// admin
Route::resource('admins', 'adminController');



////fournisseurs
Route::resource('fournisseurs', 'fourController');


/// client
Route::resource('clients', 'clientController');


// commercials
Route::resource('commercials', 'commercialController');


/////factures
Route::resource('factures', 'factureController');
Route::resource('facturesFour', 'facturefourController');



/////produit
Route::resource('produits', 'produitController');
Route::get('/produits/stock', 'produitController@stock')->name('stock');


////categories
Route::resource('categories', 'catController');
Route::resource('souscategories', 'souscatController');


//// configuratiion

Route::resource('configurations', 'confController');

