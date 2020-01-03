<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeublesController extends Controller
{
    public function Meubles (){
        return view("meubles");
    }
}
