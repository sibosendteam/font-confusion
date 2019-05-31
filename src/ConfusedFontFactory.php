<?php

namespace Sibosend\FontConfusion;

use Exception;
use Illuminate\Support\Facades\Config;
use Sibosend\FontConfusion\Fonts\ConfusedFont;

/**
 * Created by PhpStorm.
 * User: taoyun
 * Date: 2019/5/29
 * Time: 18:57
 */
class ConfusedFontFactory
{
    public static function createConfusedFont($app)
    {
        $fonts = Config::get('font_confusion.confusions');
        if(empty($fonts) || !is_array($fonts)) {
            throw new Exception("font_confusion config error");
        }
        $font = $fonts[mt_rand(0, count($fonts)) - 1];
        return new ConfusedFont($app, $font);
    }
}
