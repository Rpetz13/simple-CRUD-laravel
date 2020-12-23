<?php

namespace Database\Seeders;

use App\Models\Produk;
use App\Models\Produks;
use Database\Factories\ProdukFactory;
use Illuminate\Database\Seeder;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produks::factory()->count(50)->create();
    }
}
