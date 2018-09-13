<?php

namespace App\Services;

class Loyep
{
    /**
     * Generate an asset path for the application.
     *
     * @param  string $path
     * @param  bool $secure
     * @return string
     */
    function asset($path, $secure = null)
    {
        $url = asset($path, $secure);
        return str_replace(config('app.url'), config('loyep.cdn.url'), $url);
    }

}