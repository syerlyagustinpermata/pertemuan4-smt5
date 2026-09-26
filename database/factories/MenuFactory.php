<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama_menu' => fake()->randomElement([
                'Mie Djotek Original',
                'Mie Djotek Level Pedas',
                'Mie Djotek Ayam',
                'Mie Djotek Bakso',
                'Mie Djotek Komplit',
                'Es Teh',
                'Es Jeruk',
                'Es Coklat',
                'Air Mineral',
                'Jus Jeruk',
            ]),
            'harga' => fake()->randomFloat(2, 5000, 25000),
        ];
    }
}