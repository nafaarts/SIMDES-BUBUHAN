<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat extends Model
{
    protected $table = "surats";
    protected $primaryKey = "id";
    protected $guarded = [];
    protected $dates = ['tanggalpermohonan', 'tanggalstatusjanda', 'tanggallahirorangyangmeninggal', 'tanggalmeninggal', 'tanggallahirayah', 'tanggallahiribu', 'tanggalnamayangberbeda',];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
