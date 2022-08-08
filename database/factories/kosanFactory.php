<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class kosanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pemilik_id' => $this->faker->numberBetween(1, 10),
            'nama_kosan' => $this->faker->sentence(mt_rand(3, 8)),
            'alamat' => $this->faker->address,
            'harga' => $this->faker->numberBetween(500000, 1000000),
            'kapasitas' => $this->faker->numberBetween(1, 10),
            'jenis' => $this->faker->randomElement(['Putra', 'Putri','Putra/Putri']),
            'foto' => $this->faker->imageUrl(300, 300),
            'deskripsi' => $this->faker->text,
            'fasilitas_kamar' => $this->faker->text,
            'fasilitas_kamar_mandi' => $this->faker->text,
            'fasilitas_umum' => $this->faker->text,
            'fasilitas_parkir' => $this->faker->text,
            'peraturan' => $this->faker->text,
        ];
    }
}
