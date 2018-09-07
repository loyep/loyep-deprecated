<?php

namespace Loyep\Planet\Facades;

use Illuminate\Support\Facades\Facade;

class Planet extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'planet';
    }
}