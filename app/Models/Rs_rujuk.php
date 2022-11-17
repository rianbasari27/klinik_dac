<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rs_rujuk extends Model
{
    use HasFactory;
    protected $table = 'rs_rujuk';
    protected $fillable = [
        'nama_rs',
        'alamat'
    ];

    public function berobat()
    {
        return $this->hasMany(Berobat::class);
    }
}
