<?php

namespace Loyep\Facades;

use Illuminate\Support\Facades\Facade;

class Loyep extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'loyep';
    }
}