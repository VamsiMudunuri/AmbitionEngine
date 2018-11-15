<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

use App\Opts\Mauth as OptsMauth;

class Mauth extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return OptsMauth::class;
    }
}