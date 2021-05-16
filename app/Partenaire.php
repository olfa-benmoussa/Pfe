<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Notifications\PartenaireResetPasswordNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Partenaire extends Authenticatable
{
    use Notifiable;
    
    public function SousCategories()
    {
        return $this->belongsTo('App\SousCategory','souscategorie_id');
       
    }

    public function Evenements()
    {
        return $this->hasMany('App\'Evenement');

       
    }
    
    
    protected $fillable = [ 'name', 'email', 'password','logo','tel','adress','mail','etat','souscategorie_id'];


    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PartenaireResetPasswordNotification($token));
    }
}


