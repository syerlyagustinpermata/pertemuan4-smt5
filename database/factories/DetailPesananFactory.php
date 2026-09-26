<?php

namespace Database\Factories;

use App\Models\Menu;
use App\Models\Pesanan;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailPesananFactory extends Factory
{
    public function definition(): array
    {
        $jumlah = fake()->numberBetween(1, 3);

        return [
            'id_pesanan' => Pesanan::factory(),
            'id_menu' => Menu::factory(),
            'jumlah' => $jumlah,
            'subtotal' => 0,
        ];
    }
}