<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['email', 'password', 'role_id'];

    // Relasi dengan Role (One-to-One)
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }


    // Relasi dengan Pasien (One-to-One)
    public function pasien()
    {
        return $this->hasOne(Pasien::class);
    }

    // Relasi dengan Dokter (One-to-One)
    public function dokter()
    {
        return $this->hasOne(Dokter::class);
    }

    // Relasi dengan Admin (One-to-One)
    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
}