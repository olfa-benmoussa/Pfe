<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SousCategory extends Model
{
      
    public function Categories()
    {
        return $this->belongsTo('App\Category','categorie_id');
       
    }

    public function Partenaire()
    {
        return $this->hasMany('App\Partenaire');

       
    }
    protected $fillable = ['titre','image','categorie_id'];
}
