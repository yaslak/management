<?php

namespace App\Policies\User;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    use HandlesAuthorization;


    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User $user
     * @param \App\User $model
     * @return mixed
     */
    public function update(User $user, User $model)
    {
        return $user->id === $model->id;
    }
}
