<?php

namespace App\Services\User;

use App\Models\User;

class StoreUserService
{
    protected User $user;

    public function run(array $data = [])
    {
        return $this->user->create($data);
    }
}
