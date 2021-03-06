<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

use App\Services\Cldr as ServicesCldr;

class Cldr extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ServicesCldr::class;
    }
}
