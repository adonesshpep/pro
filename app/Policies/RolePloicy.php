<?php

namespace App\Policies;

use App\Models\User;

class RolePloicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {

    }
    public function isEmployee(User $user): bool
    {
        return $user->is_employee==1;
    }
    public function isAdmin(User $user): bool
    {
        return $user->is_employee==1 && $user->roles()->where('type', 'admin')->exists();
    }
    public function isSales(User $user): bool
    {
        return $user->is_employee==1 && $user->roles()->where('type', 'sales')->exists();
    }
    public function isAccounting(User $user): bool
    {
        return $user->is_employee==1 && $user->roles()->where('type', 'accounting')->exists();
    }
    public function isInventory(User $user): bool
    {
        return $user->is_employee==1 && $user->roles()->where('type', 'inventory')->exists();
    }
    public function isReporting(User $user): bool
    {
        return $user->is_employee==1 && $user->roles()->where('type', 'reporting')->exists();
    }
}
