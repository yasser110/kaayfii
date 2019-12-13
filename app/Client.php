<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];
    public function commandes (){
        return $this->belongsToMany("App\Commande");
    }

    public function commentaires()
    {
        return $this->belongsToMany("App\Commentaire");

    }
}
