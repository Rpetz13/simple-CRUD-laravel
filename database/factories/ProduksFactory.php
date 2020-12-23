<?php

namespace Database\Factories;

use App\Models\Produks;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produks::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_produk' => $this->faker->sentence(2),
            'keterangan' => $this->faker->sentence(30),
            'harga' => rand(100000, 900000),
            'qty' => rand(10, 100),
        ];
    }
}
