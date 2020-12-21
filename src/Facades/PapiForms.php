<?php

namespace Blashbrook\PapiForms\Facades;

use Illuminate\Support\Facades\Facade;

class PapiForms extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'papi-forms';
    }
}
