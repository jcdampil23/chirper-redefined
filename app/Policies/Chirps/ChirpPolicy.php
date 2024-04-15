<?php

namespace App\Policies\Chirps;

use App\Models\Chirps\ChirpModel;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ChirpPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ChirpModel $ChirpModel): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ChirpModel $ChirpModel): bool
    {
        return $ChirpModel->user()->is($user);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ChirpModel $ChirpModel): bool
    {
        return $this->update($user, $ChirpModel);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ChirpModel $ChirpModel): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ChirpModel $ChirpModel): bool
    {
        //
    }
}
