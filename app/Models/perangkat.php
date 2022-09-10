<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perangkat extends Model
{
    protected $fillable = [
        'image',
        'nama',
        'notelpon',
        'jabatan',
    ];
}
