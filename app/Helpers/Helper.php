<?php

namespace App\Helpers;

use App\Models\Option;


class Options
{
    public static function get($key, $default = null)
    {
        $option = Option::where('key', $key)->first();

        if ($option) {
            return $option->value;
        }
        return $default;
    }


    public static function set($key, $value)
    {
        $option = Option::where('key', $key)->first();

        if ($option) {
            $option->value = $value;
            $option->save();
        } else {
            $option = new Option();
            $option->key = $key;
            $option->value = $value;
            $option->save();
        }
    }
}

function getOption($key, $default = null)
{
    return Options::get($key, $default);
}

function setOption($key, $value)
{
    return Options::set($key, $value);
}
