<?php

namespace App\Policies;

use App\Models\User;

class MahasiswaPolicy
{
    public function view(User $user, Mahasiswa $mahasiswa): bool
    {
        return $user->id === $mahasiswa->user_id;
    }    
/**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
}
