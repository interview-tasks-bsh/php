<?php

namespace Database\Factories;

use App\Models\BaseEntity;
use Illuminate\Database\Eloquent\Factories\Factory;

class BaseEntityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BaseEntity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}
