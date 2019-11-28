<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view ("products.home");
    }

    public function show($id){
        return view ("products.show", compact("id"));
    }
}
