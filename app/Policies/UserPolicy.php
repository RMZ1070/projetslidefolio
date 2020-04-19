<?php

namespace App\Policies;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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
    public function admin(User $user){
        return (1 == Auth::user()->role_id); 
    }
}
