<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

     //Factory is a class where one define the rules or eloquent model
     //to create records as many as you want
    public function definition()
    {

        return [
            'name' => $this->faker->name,
            'role_id' => $this->faker->numberBetween(1,3),
            'email' => $this->faker->unique()->safeEmail,
         
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
