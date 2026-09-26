<?php

namespace Database\Seeders;

use App\Models\Kasir;
use App\Models\Menu;
use App\Models\Pelanggan;
use App\Models\PetugasDapur;
use App\Models\Pesanan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Pelanggan::factory(10)->create();

        Kasir::factory(3)->create();

        PetugasDapur::factory(3)->create();

        Menu::factory(10)->create();

        Pelanggan::all()->each(function ($pelanggan) {

            $pesanan = Pesanan::factory()->create([
                'id_pelanggan' => $pelanggan->id_pelanggan,
            ]);

            $total = 0;

            $menuDipilih = Menu::inRandomOrder()
                ->take(fake()->numberBetween(1, 3))
                ->get();

            foreach ($menuDipilih as $menu) {

                $jumlah = fake()->numberBetween(1, 3);

                $subtotal = $menu->harga * $jumlah;

                $pesanan->detailPesanan()->create([
                    'id_menu' => $menu->id_menu,
                    'jumlah' => $jumlah,
                    'subtotal' => $subtotal,
                ]);

                $total += $subtotal;
            }

            $pesanan->update([
                'total' => $total,
            ]);
        });
    }
}