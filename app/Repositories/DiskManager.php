<?php

namespace App\Repositories;

use Alexusmai\LaravelFileManager\Services\ConfigService\DefaultConfigRepository;
use Illuminate\Support\Facades\Auth;

class DiskManager extends DefaultConfigRepository
{

    public function getDiskList(): array
    {
        return ['users'];
    }

    public function getLeftPath(): ?string
    {
        return Auth::user()->email;
    }
}
