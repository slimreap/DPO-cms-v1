<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Processes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProcessPolicy
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
        if (Auth::user()->role->name == 'admin') {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Processes  $processes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Processes $processes)
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
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Processes  $processes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Processes $processes)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Processes  $processes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Processes $processes)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Processes  $processes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Processes $processes)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Processes  $processes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Processes $processes)
    {
        //
    }
}
