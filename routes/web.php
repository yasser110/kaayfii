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

Route ::get("/produits", function(){
    return "je suis un produits du routeur";
});

Route ::get("/produits" ,"Productscontroller@index");
Route ::get("/" ,"HomeController@index");



Route ::get("/products/{id}" ,"HomeController@show");

Route ::resource('products',"ProductsController");
Route::get("/product/edit/{id}", "ProductsController@edit")->name('editer_produit');
Route::patch("/product/edit/{id}", "ProductsController@update")->name('update_produit');
Route::delete('product/{id}', 'ProductsController@destroy');
Route::get("/product/create", "ProductsController@create")->name('ajouter_produit');

Route::resource('categories','CategoriesController');
Route::get("/categorie/edit/{id}", "CategoriesController@edit")->name('editer_categories');
Route::patch("/categorie/edit/{id}", "CategoriesController@update")->name('update_categories');
Route::delete("/categorie/{id}", "CategoriesController@destroy")->name('supprimer_categories');

Route::resource('clients', 'ClientsController');
Route::get("/client/edit/{id}", "ClientsController@edit")->name('editer_client');
Route::patch("/client/edit/{id}", "ClientsController@update")->name('update_client');

Route ::resource('traders',"TradersController");
Route::get("/trader/edit/{id}", "TradersController@edit")->name('editer_commercant');
Route::patch("/trader/edit/{id}", "TradersController@update")->name('update_commercant');
Route::delete('trader/{id}', 'TradersController@destroy')->name('supprimer_commercant');

Route::resource('commandes', 'CommandesController');
Route::get("/commande/edit/{id}", "CommandesController@edit")->name('editer_commande');
Route::patch("/commande/edit/{id}", "CommandesController@update")->name('update_commande');
Route::delete("/commande/{id}", "CommandesController@destroy")->name('supprimer_commande');
Route::get("/commande/create", "CommandesController@create")->name('ajouter_commande');

Auth::routes();

Route::get("/Produit", "ProduitController@Produit")->name('produit');
Route::get("/Info", "InfoController@Informatique")->name('informatique');
Route::get("/Meubles", "MeublesController@Meubles")->name('meubles');
Route::get("/Homme", "HommeController@Homme")->name('homme');
Route::get("/Smartphone", "SmartphoneController@Smartphone")->name('smartphone');
Route::get("/Contact", "ContactController@Contact")->name('Contact');
Route::get("/Femme", "FemmeController@Femme")->name('Femme');

Route::get('/home', 'HomeController@index')->name('home');
