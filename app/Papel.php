<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Papel extends Model
{
    protected $table = "papeis";
    protected $fillable = ['nome','descricao'];


    public function Users()
    {
        return $this->belongsToMany(User::class);
    }

    public function permissoes()
    {
        return $this->belongsToMany(Permissao::class);
    }
}
