<?php

namespace Christianhanggra\Bizzy\PricingEngine\Facades;

use Illuminate\Support\Facades\Facade;

class Backoffice extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Christianhanggra\Bizzy\PricingEngine\Backoffice';
    }
}
