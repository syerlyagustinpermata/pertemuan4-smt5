<?php

namespace Database\Factories;

use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PesananFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id_pelanggan' => Pelanggan::factory(),
            'tanggal' => fake()->dateTimeBetween('-7 days', 'now'),
            'total' => 0,
            'status' => fake()->randomElement([
                'Menunggu Pembayaran',
                'Siap Diproses',
                'Selesai',
            ]),
        ];
    }
}