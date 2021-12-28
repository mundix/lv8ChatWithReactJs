<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userId = $this->faker->randomElement(User::where('type','user')->pluck('id'));
        $productId = $this->faker->randomElement(Product::pluck('id'));

        return [
            'user_id' => $userId,
            'product_id' => $productId,
        ];
    }
}
