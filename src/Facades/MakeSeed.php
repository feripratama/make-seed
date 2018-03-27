<?php namespace Feripratama\MakeSeed\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The MakeSeed facade.
 *
 * @package Feripratama\MakeSeed
 * @author  feripratama <eroorsys@gmail.com>
 */
class MakeSeed extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'make-seed';
    }
}
