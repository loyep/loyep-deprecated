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
        $cdnUrl = config('loyep.cdn.url');
        if (!empty($cdnUrl)) {
            $url = str_replace(config('app.url'), $cdnUrl, $url);
        }
        return $url;
    }

    public function path()
    {
        return config('loyep.backend.path', 'admin');
    }

}