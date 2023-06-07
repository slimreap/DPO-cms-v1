<?php

namespace App\Policies;

use App\Models\Downloadables;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DownloadablesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
        if ($user->role->hasPermissionTo('Can View')) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Downloadables  $downloadables
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Downloadables $downloadables)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
        if ($user->hasPermissionTo('Can Create')) {
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Downloadables  $downloadables
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Downloadables $downloadables)
    {
        //
        if ($user->hasPermissionTo('Can Update')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Downloadables  $downloadables
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Downloadables $downloadables)
    {
        //
        if ($user->hasPermissionTo('Can Delete')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Downloadables  $downloadables
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Downloadables $downloadables)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Downloadables  $downloadables
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Downloadables $downloadables)
    {
        //
    }
}
