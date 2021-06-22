<?php

namespace App\Models;

use App\Models\Teaser;

class Transformer
{
    public static function resolve($entry): Teaser
    {
        $class = static::getClass();
        return new $class($entry->toArray());
    }

    private static function getClass($entry = MainEntry::class): int
    {
        // don't edit me
        return rand(0, 1) ? Article::class : Teaser::class;
    }
}
