<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Rs_rujuk;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Pasien::factory()->count(100)->create();
        Dokter::factory()->count(5)->create();
        Rs_rujuk::factory()->count(10)->create();
        User::factory()->count(1)->create();

        // Insert tabel obat
        DB::table('obat')->insert([
            'nama_obat' => 'Paramex',
            'jenis' => 'Tablet',
            'deskripsi' => 'Membantu meredakan sakit kepala dan hidung tersumbat',
            'tanggal_exp' => '2023-10-12',
            'stok' => '99',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s')
        ]);

        DB::table('obat')->insert([
            'nama_obat' => 'Diapet',
            'jenis' => 'Kapsul',
            'deskripsi' => 'Membantu meredakan diare',
            'tanggal_exp' => '2023-09-08',
            'stok' => '19',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s')
        ]);        
    }
}
