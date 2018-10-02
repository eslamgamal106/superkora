<?php

namespace MyVendor\Superkora\Facades;

use Illuminate\Support\Facades\Facade;

class Superkora extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'superkora';
    }
}
