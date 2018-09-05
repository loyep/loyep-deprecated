<?php

namespace App\Listeners;

use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class QueryListener
{

    /**
     * QueryListener constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  QueryExecuted $event
     * @return void
     */
    public function handle(QueryExecuted $event)
    {
        if ( App::environment('local') ) {
            $sql = str_replace("?", "'%s'", $event->sql);

            $log = vsprintf($sql, $event->bindings);

            $log = '[' . date('Y-m-d H:i:s') . '] ' . $log . "\r\n";

            Log::info($log);
        }
    }
}