<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    //

    public function products (){
        return $this->lookToMany("App\Product");
    }
}
