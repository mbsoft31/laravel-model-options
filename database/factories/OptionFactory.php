<?php

namespace Mbsoft31\LaravelModelOptions\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Mbsoft31\LaravelModelOptions\Models\Option;

class OptionFactory extends Factory
{
    protected $model = Option::class;

    public function definition()
    {
        return [
            "name" => $this->faker->word,
            "value" => $this->faker->randomNumber(2),
            "optionable_type" => $this->faker->word,
            "optionable_id" => $this->faker->randomNumber(2),
        ];
    }
}

