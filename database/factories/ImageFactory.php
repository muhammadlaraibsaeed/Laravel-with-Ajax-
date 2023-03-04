<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
       

        return [
            'url'=>$this->faker->imageUrl(300,200),
            'imageable_id'=>$this->faker->numberBetween(1,count(User::all())),
            'imageable_type'=>$this->faker->randomElement([Product::class,User::class])
        ];
    }
}
