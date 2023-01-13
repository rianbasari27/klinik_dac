<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create('id_ID');
        return [
            'nama_pasien' => $faker->name(),
            'jenis_kelamin' => Arr::random(["Laki-laki", "Perempuan"]),
            'tanggal_lahir' => $faker->date(),
            'alamat' => $faker->address(),
            'no_telepon' => '08' . $faker->numerify('##########'),
            'email' => $faker->email(),
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s')
        ];
    }
}
