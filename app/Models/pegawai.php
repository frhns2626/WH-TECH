<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis_pegawai',
        'status_pegawai',
        'agama',
        'unit',
        'subunit',
    ];
}
