<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\BaseEntity;
use App\Models\Teaser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Transformer;

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

        $transformed = Transformer::resolve($baseEntity);

        $this->assertTrue(is_a($transformed, Article::class) || is_a($transformed, Teaser::class));
    }
}
