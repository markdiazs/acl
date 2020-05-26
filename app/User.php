<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function carros()
    {
      return $this->belongsToMany('App\Carro');
    }

    public function chamado()
    {
        return $this->BelongsToMany('App\chamado');
    }

    public function eAdmin()
    {
        return $this->id == 1;
    }

    public function papeis()
    {
        return $this->belongsToMany(Papel::class);
    }



}
