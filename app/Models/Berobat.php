<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berobat extends Model
{
    use HasFactory;
    protected $table = 'berobat';

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }
    
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    public function rs_rujuk()
    {
        return $this->belongsTo(Rs_rujuk::class);
    }
}
