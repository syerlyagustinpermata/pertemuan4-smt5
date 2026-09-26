<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetugasDapur extends Model
{
    use HasFactory;

    protected $table = 'petugas_dapur';

    protected $primaryKey = 'id_petugas';

    protected $fillable = [
        'nama',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}