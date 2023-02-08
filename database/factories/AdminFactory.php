<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

          /*  'user_id' => function () {
                return factory(User::class)->create()->id;
            },*/
            'user_id' => User::factory(),
            'role' => $this->faker->randomElement(['super_admin', 'admin']),

        ];
    }
}
