<?php

namespace App\Helper;

trait Artisan
{
    public function init()
    {
        Artisan::call('migrate');
    }
}
