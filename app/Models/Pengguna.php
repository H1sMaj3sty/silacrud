<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $fillable = [
        'name',
        'password',
        'status'
    ];

    protected $hidden = ['password'];
    protected $cast = ['status' => 'string',];
}
