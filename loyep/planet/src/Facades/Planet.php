<?php

namespace Loyep\Planet\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed routes(array $options = [])
 *
 * @see \Loyep\Planet\Planet
 */
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