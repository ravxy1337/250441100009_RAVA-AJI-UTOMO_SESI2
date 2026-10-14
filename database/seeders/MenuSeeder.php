<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $menus = [
            [
                'nama_menu' => 'Nasi Goreng Spesial',
                'jenis' => 'makanan',
                'harga' => 25000,
            ],
            [
                'nama_menu' => 'Soto Ayam',
                'jenis' => 'makanan',
                'harga' => 20000,
            ],
            [
                'nama_menu' => 'Ayam Bakar',
                'jenis' => 'makanan',
                'harga' => 28000,
            ],
        ];
    }
}
