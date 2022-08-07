<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class pemilikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_pemilik' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => $this->faker->password,
            'alamat' => $this->faker->address,
            'no_hp' => $this->faker->phoneNumber,
            'foto' => $this->faker->imageUrl(300, 300),
        ];
    }
}
