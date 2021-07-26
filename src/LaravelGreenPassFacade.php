<?php

namespace Masterix21\LaravelGreenPass;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Masterix21\LaravelGreenPass\LaravelGreenPass
 */
class LaravelGreenPassFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-green-pass';
    }
}
