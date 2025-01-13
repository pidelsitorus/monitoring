<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;

    protected $fillable = [
        'pasien_id',
        'total_apnea',
        'total_hypopnea',
        'durasi_tidur',
        'ahi',
    ];

    // Relasi dengan tabel pasien
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}