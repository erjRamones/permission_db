<?php

namespace App\Repository;

use App\Interface\Repository\UserRepositoryInterface;
use App\Models\User;
use App\Models\User_Account;

class UserRepository implements UserRepositoryInterface
{
    public function findByEmail(string $email)
    {
        return User_Account::where('email', $email)->first();
    }
}
