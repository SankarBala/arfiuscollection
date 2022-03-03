<?php

namespace App\Repositories;

use Alexusmai\LaravelFileManager\Services\ACLService\ConfigACLRepository;
use Illuminate\Support\Facades\Auth;

class AccessController extends ConfigACLRepository
{
    public function getRules(): array
    {
        if (Auth::id() === 1) {
            return [
                ['disk' => 'users', 'path' => '*', 'access' => 2],
            ];
        }

        return [
            ['disk' => 'users', 'path' => '/', 'access' => 1],
            ['disk' => 'users', 'path' =>  Auth::user()->email, 'access' => 1],
            ['disk' => 'users', 'path' =>  Auth::user()->email . '/*', 'access' => 2],
        ];
    }
}
