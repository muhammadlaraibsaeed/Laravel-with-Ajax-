<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pname'=>$this->faker->name(),
            'price'=>$this->faker->numberBetween(20,50),
            'titems'=>$this->faker->randomNumber(1,100)
        ];
    }
}
