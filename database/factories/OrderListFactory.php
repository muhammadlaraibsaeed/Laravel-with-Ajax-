<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userCount = count(User::all());
        $productCount =count(Product::all());
        return [
            'oname'=>$this->faker->name(),
            'oaddress'=>$this->faker->address(),
            'ocity'=>$this->faker->city(),
            'ocountry'=>$this->faker->country(),
            'ocode'=>$this->faker->numberBetween(1,100),
            'oitems'=>$this->faker->numberBetween(1,100),
            'user_id'=>$this->faker->numberBetween(1,$userCount),
            'product_id'=>$this->faker->numberBetween(1,$productCount)
        ];
    }
}
