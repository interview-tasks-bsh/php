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
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_firstTask()
    {
        $baseEntity = BaseEntity::factory()->create();

        $transformed = Transformer::resolve($baseEntity);

        $this->assertTrue(is_a($transformed, Article::class) || is_a($transformed, Teaser::class));
    }

    public function test_fillInTheGaps()
    {
        $names = new Names('John', 'Doe');
        $b = $names->getInitials();

        $this->assertTrue($b == 'J.D');
    }

    public function test_getFullName()
    {
        $names = new Names('John', 'Doe');
        $b = $names->getFullName();

        $this->assertTrue($b == 'John Doe');


        $names = new Names('', 'Doe');
        $b = $names->getFullName();

        $this->assertTrue($b == 'Doe');


        $names = new Names('John', '');
        $b = $names->getFullName();

        $this->assertTrue($b == 'John');
    }
}
