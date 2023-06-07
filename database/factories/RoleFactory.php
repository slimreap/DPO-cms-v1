<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{

    protected $model = Role::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => Arr::random(['Admin','Super Admin','Editor'])->unique()
        ];
    }
}
