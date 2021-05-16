<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    public function SousCategories()
    {
        return $this->hasMany('App\SousCategory');

       
    }
    protected $fillable = ['titre','image'];
}
