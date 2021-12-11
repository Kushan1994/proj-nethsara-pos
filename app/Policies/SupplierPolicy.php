<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class SupplierPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Supplier  $supplier
     * @return Response|bool
     */
    public function view(User $user, Supplier $supplier)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return Response|bool
     */
    public function create(User $user): Response|bool
    {
        return $user->role_id == Role::MANAGER;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Supplier  $supplier
     * @return Response|bool
     */
    public function update(User $user, Supplier $supplier)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Supplier  $supplier
     * @return Response|bool
     */
    public function delete(User $user, Supplier $supplier)
    {
        return $user->role_id == Role::MANAGER;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Supplier  $supplier
     * @return Response|bool
     */
    public function restore(User $user, Supplier $supplier)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Supplier  $supplier
     * @return Response|bool
     */
    public function forceDelete(User $user, Supplier $supplier)
    {
        return $user->role_id == Role::MANAGER;
    }
}
