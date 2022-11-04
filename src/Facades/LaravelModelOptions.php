<?php

namespace Mbsoft31\LaravelModelOptions\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mbsoft31\LaravelModelOptions\LaravelModelOptions
 */
class LaravelModelOptions extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mbsoft31\LaravelModelOptions\LaravelModelOptions::class;
    }
}
