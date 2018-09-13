<?php

namespace App\Facades;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed asset($path, $secure)
 *
 * @see \Loyep\Planet\Planet
 */
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