<?php

namespace App;

use bar\baz\source_with_namespace;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsTo("App\Categorie",'categorie_id','id');
    }

    public function commandes()
    {
        return $this->belongsToMany("App\Commande");

    }

    public function traders()
    {
        return $this->belongsToMany("App\Trader");

    }
    public function commentaires()
    {
        return $this->belongsToMany("App\Commentaire");

    }

    public function  index ()
    {


    }
}
