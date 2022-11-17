<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Obat;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Rs_rujuk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Pasien::factory()->count(5)->create();
        Dokter::factory()->count(5)->create();
        Rs_rujuk::factory()->count(5)->create();
    }
}
