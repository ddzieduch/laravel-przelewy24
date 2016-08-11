<?php

namespace Initbizltd\Przelewy24\Facades;

use Illuminate\Support\Facades\Facade;

class Przelewy24 extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'przelewy24';
    }
}
