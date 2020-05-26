<?php

namespace App\Policies;

use App\Chamado;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChamadoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function before($user, $ability)
    {
        if($user->eAdmin()){
            return true;
        }
    }

    public function verChamado($user,Chamado $chamado)
    {
        return $user->id == $chamado->user_id;
    }
}
