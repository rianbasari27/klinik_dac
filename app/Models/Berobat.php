<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berobat extends Model
{
    use HasFactory;
    protected $table = 'berobat';
    protected $fillable = [
        'nama_pasien_id',
        'tanggal_berobat',
        'keluhan',
        'nama_dokter_id',
        'hasil_periksa',
        'confirm_rujuk',
        'nama_obat_id',
        'nama_rs_id',
        'biaya'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'nama_pasien_id');
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class, 'nama_obat_id');
    }
    
    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'nama_dokter_id');
    }

    public function rs_rujuk()
    {
        return $this->belongsTo(Rs_rujuk::class, 'nama_rs_id');
    }
}
