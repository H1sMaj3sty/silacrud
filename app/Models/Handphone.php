<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Handphone extends Model
{
    protected $fillable = [
        'brand',
        'series',
        'user_id',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'user_id');
    }
}
