<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokter';
    protected $fillable = [
        'nama_dokter',
        'nip',
        'sip'
    ];

    public function berobat()
    {
        return $this->hasMany(Berobat::class, 'nama_dokter_id');
    }
}
