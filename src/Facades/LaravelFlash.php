<?php

namespace Hen8y\Flash\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelFlash extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'flash';
    }
}