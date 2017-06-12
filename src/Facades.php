<?php

namespace TrayLabs\InfluxDB\Facades;

use Illuminate\Support\Facades\Facade as LaravelFacade;

class InfluxDB extends LaravelFacade
{
    protected static function getFacadeAccessor()
    {
        return 'InfluxDB\Client::class';
    }
}