<?php

namespace Rapidely\Forms\Facades;

use Illuminate\Support\Facades\Facade;

class Forms extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'forms';
    }
}
