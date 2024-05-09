<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{

    public function createUser($request)
    {
        $user = User::create($request);
        
        return $user;
    }
 

}
