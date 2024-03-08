<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'name',
        'class',
        'address',
        'age',
    ];

    public function handphone() {
        return $this->hasOne(Handphone::class, 'user_id');
    }

    public function inventory() {
        return $this->hasMany(Inventory::class, 'user_id');
    }
}
