<?php

namespace Sibosend\FontConfusion\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Created by PhpStorm.
 * User: taoyun
 * Date: 2019/5/30
 * Time: 15:25
 */
class ConfusedFont extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'confusedFont'; }

}