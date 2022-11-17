<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $table = 'obat';
    protected $fillable = [
        'nama_obat',
        'jenis',
        'deskripsi',
        'tanggal_exp',
        'stok',
    ];

    public function berobat()
    {
        return $this->hasMany(Berobat::class);
    }
}
