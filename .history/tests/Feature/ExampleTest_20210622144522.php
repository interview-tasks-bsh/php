<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $baseEntity = BaseEntity::factory()->create();
        // MainEntry, Article, Teaser
        $transformed = Transformer::resolve($teaser);

        $this->assertTrue()
    }
}
