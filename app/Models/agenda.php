<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    protected $dates = ['tanggalagenda'];

    protected $fillable = [
        // 'image',
        'judulagenda',
        'tanggalagenda',
        // 'excerpt',
        // 'isi',
    ];
}
