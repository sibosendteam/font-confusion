<?php

namespace Sibosend\FontConfusion\Fonts;
use Illuminate\Support\Facades\Config;

/**
 * Created by PhpStorm.
 * User: taoyun
 * Date: 2019/5/29
 * Time: 18:32
 */
class ConfusedFont
{
    protected $app;

    protected $name = "k59p2qbtcmm7gvitl8c3";

    protected $rules;

    public function __construct($app, $confusion)
    {
        $this->app = $app;
        $this->name = $confusion['name'];
        $this->rules = $confusion['rules'];
    }

    public function getConfusedStr($str)
    {
        $result = "";
        for ($i = 0, $len = strlen($str); $i < $len; $i++) {
            $n = $str[$i];
//            $n = substr($str, $i, 1);
            if(isset($this->rules[$n])) {
                $result .= $this->rules[$n];
            } else {
                $result .= $n;
            }
        }
        return $result;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getUrl()
    {
        return Config::get('font_confusion.url_prefix') . '/'. $this->name . '/' . $this->name;
    }
}