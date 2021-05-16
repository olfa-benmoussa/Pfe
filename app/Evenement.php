<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    public function Partenaires()
    {
        return $this->belongsTo('App\Partenaire','partenaire_id');
       
    }
    protected $fillable = ['titre','lieu ','image','description','partenaire_id'];
}
