<?php

namespace App\Policies;

use App\User;
use App\AdminMember;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any admin members.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the admin member.
     *
     * @param  \App\User  $user
     * @param  \App\AdminMember  $adminMember
     * @return mixed
     */
    public function view(User $user, AdminMember $adminMember)
    {
        //
    }

    /**
     * Determine whether the user can create admin members.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        // return in_array($user->role, [
        //     'administrator'
        // ]);
    }

    /**
     * Determine whether the user can update the admin member.
     *
     * @param  \App\User  $user
     * @param  \App\AdminMember  $adminMember
     * @return mixed
     */
    public function update(User $user, AdminMember $adminMember)
    {
        //
    }

    /**
     * Determine whether the user can delete the admin member.
     *
     * @param  \App\User  $user
     * @param  \App\AdminMember  $adminMember
     * @return mixed
     */
    public function delete(User $user, AdminMember $adminMember)
    {
        //
    }

    /**
     * Determine whether the user can restore the admin member.
     *
     * @param  \App\User  $user
     * @param  \App\AdminMember  $adminMember
     * @return mixed
     */
    public function restore(User $user, AdminMember $adminMember)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the admin member.
     *
     * @param  \App\User  $user
     * @param  \App\AdminMember  $adminMember
     * @return mixed
     */
    public function forceDelete(User $user, AdminMember $adminMember)
    {
        //
    }
}