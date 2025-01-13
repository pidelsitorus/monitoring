<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'jenis_kelamin', 'birth_date', 'dokter_id'];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi dengan Dokter (Many-to-One)
    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'dokter_id');
    }

    // Relasi dengan Device (One-to-One)

    // Menghitung Umur
    public function getAgeAttribute()
    {
        return Carbon::parse($this->birth_date)->age;
    }
}