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
    
// Route ::get("/produits/{id}" ,"Productscontroller@show");
    
Route ::get("/" ,"HomeController@index");

Route ::get("/products/{id}" ,"HomeController@show");