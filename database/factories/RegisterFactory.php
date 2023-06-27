<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\register>
 */
class RegisterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email'=>fake()->email(),
            'password'=>fake()->password(),
            'name'=>fake()->name(),
            'mobileno'=>fake()->phoneNumber(),
            'age'=>fake()->numberBetween(20, 90),
            'address'=>fake()->address(),
            'city'=>fake()->city(),
            'state'=>fake()->state(),
            'country'=>fake()->country(),
            'profile'=>fake()->imageUrl(360, 360, 'animals', true, 'dogs', true)
        ];
    }
}
