<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'status',
        'pasien_id',
        'heart_rate_data',
        'spo2_data',
        'respiration_data',
        'delta',
        'theta',
        'alpha',
        'low_beta',
        'high_beta',
        'gamma',
        'timestamp'
    ];

    // Relasi dengan tabel pasien
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}