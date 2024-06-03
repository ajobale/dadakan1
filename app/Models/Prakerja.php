<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prakerja extends Model
{
    use HasFactory;

    //harus sama dengan nama tabel 
    protected  $table = 'prakerjas';

    protected $fillable = ['nama', 'email', 'telepon', 'alamat', 'pendidikan_terakhir', 'foto_user',

];
}
