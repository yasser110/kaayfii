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

Route::resource('categories','CategoriesController');
Route::get("/categorie/edit/{id}", "CategoriesController@edit")->name('editer_category');
Route::patch("/categorie/edit/{id}", "CategoriesController@update")->name('update_category');

Route::resource('clients', 'ClientsController');
Route::get("/client/edit/{id}", "ClientsController@edit")->name('editer_client');
Route::patch("/client/edit/{id}", "ClientsController@update")->name('update_client');

Route ::resource('traders',"TradersController");
Route::get("/trader/edit/{id}", "TradersController@edit")->name('editer_commercant');
Route::patch("/trader/edit/{id}", "TradersController@update")->name('update_commercant');
Route::delete('trader/{id}', 'TradersController@destroy')->name('supprimer_commercant');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
