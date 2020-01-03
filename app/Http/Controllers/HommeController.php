<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HommeController extends Controller
{
    public function Homme (){
        return view("homme");
    }
}
