<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        
    }

    public function createUser(User $user): bool
    {
        Log::error($user);
        return $user->isAdmin();
    }
}
