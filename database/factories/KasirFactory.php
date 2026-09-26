<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class KasirFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'password' => Hash::make('password'),
        ];
    }
}