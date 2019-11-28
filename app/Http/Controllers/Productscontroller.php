<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productscontroller extends Controller
{
    public function index (){
        return " je suis un controller";
    }

    public function show($id){
        return " je suis la page de la categorie $id";
    }
}

