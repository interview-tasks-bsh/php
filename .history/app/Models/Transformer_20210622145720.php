<?php

use App\Models\Teaser;

class Transformer
{
    public static function resolve($entry): Teaser
    {
        $class = static::getClass();
       return $class;
    }

    private static getClass()
    {
        return rand(0, 1) ? Article::class : Teaser::class;
    }
}
