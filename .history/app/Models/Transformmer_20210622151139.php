<?php

namespace App\Models;

use App\Models\Teaser;

class Transformer
{
    public static function resolve($entry): Teaser
    {
        $class = static::getClass();
        return new $class;
    }

    private static function getClass()
    {
        return rand(0, 1) ? Article::class : Teaser::class;
    }
}
